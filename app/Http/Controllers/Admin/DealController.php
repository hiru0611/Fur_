<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Deal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DealController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $deals = Deal::latest()->paginate(10);
        return view('admin.deals.index', compact('deals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.deals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'discount' => 'required|string|max:255',
            'distance' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
        ]);

        $imagePath = $request->file('image')->store('deals', 'public');

        Deal::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
            'discount' => $request->discount,
            'distance' => $request->distance,
            'category' => $request->category,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('admin.deals.index')->with('success', 'Deal created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Deal $deal)
    {
        return view('admin.deals.show', compact('deal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Deal $deal)
    {
        return view('admin.deals.edit', compact('deal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Deal $deal)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'discount' => 'required|string|max:255',
            'distance' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
        ]);

        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'discount' => $request->discount,
            'distance' => $request->distance,
            'category' => $request->category,
            'is_active' => $request->has('is_active'),
        ];

        if ($request->hasFile('image')) {
            // Delete old image
            if ($deal->image) {
                Storage::disk('public')->delete($deal->image);
            }
            $data['image'] = $request->file('image')->store('deals', 'public');
        }

        $deal->update($data);

        return redirect()->route('admin.deals.index')->with('success', 'Deal updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Deal $deal)
    {
        if ($deal->image) {
            Storage::disk('public')->delete($deal->image);
        }
        
        $deal->delete();

        return redirect()->route('admin.deals.index')->with('success', 'Deal deleted successfully!');
    }
}
