<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Deal;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;

class DealController extends Controller
{
    /**
     * Display a listing of active deals
     */
    public function index(Request $request): JsonResponse
    {
        try {
            $query = Deal::active();

            // Filter by category if provided
            if ($request->has('category')) {
                $query->where('category', $request->category);
            }

            // Filter by discount range
            if ($request->has('min_discount')) {
                $query->where('discount', '>=', $request->min_discount);
            }
            if ($request->has('max_discount')) {
                $query->where('discount', '<=', $request->max_discount);
            }

            // Sorting
            $sortBy = $request->get('sort_by', 'created_at');
            $sortOrder = $request->get('sort_order', 'desc');
            $query->orderBy($sortBy, $sortOrder);

            // Pagination
            $perPage = $request->get('per_page', 15);
            $deals = $query->paginate($perPage);

            return response()->json([
                'success' => true,
                'data' => $deals,
                'message' => 'Deals retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to retrieve deals',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified deal
     */
    public function show(string $id): JsonResponse
    {
        try {
            $deal = Deal::findOrFail($id);
            
            return response()->json([
                'success' => true,
                'data' => $deal,
                'message' => 'Deal retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Deal not found'
            ], 404);
        }
    }

    /**
     * Store a newly created deal (Admin only)
     */
    public function store(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'discount' => 'required|numeric|min:0|max:100',
            'distance' => 'nullable|numeric|min:0',
            'category' => 'required|string|max:255',
            'is_active' => 'boolean',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'base64_image' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $dealData = $request->only([
                'title', 'description', 'discount', 'distance', 'category', 'is_active'
            ]);

            // Handle image upload
            if ($request->hasFile('image')) {
                $path = $request->file('image')->store('deals', 'public');
                $dealData['image'] = $path;
            }

            // Handle base64 image
            if ($request->has('base64_image')) {
                $dealData['base64_image'] = $request->base64_image;
            }

            $deal = Deal::create($dealData);

            return response()->json([
                'success' => true,
                'data' => $deal,
                'message' => 'Deal created successfully'
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to create deal',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Update the specified deal (Admin only)
     */
    public function update(Request $request, string $id): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'title' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|required|string',
            'discount' => 'sometimes|required|numeric|min:0|max:100',
            'distance' => 'nullable|numeric|min:0',
            'category' => 'sometimes|required|string|max:255',
            'is_active' => 'boolean',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'base64_image' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $deal = Deal::findOrFail($id);
            
            $updateData = $request->only([
                'title', 'description', 'discount', 'distance', 'category', 'is_active'
            ]);

            // Handle image upload
            if ($request->hasFile('image')) {
                $path = $request->file('image')->store('deals', 'public');
                $updateData['image'] = $path;
            }

            // Handle base64 image
            if ($request->has('base64_image')) {
                $updateData['base64_image'] = $request->base64_image;
            }

            $deal->update($updateData);

            return response()->json([
                'success' => true,
                'data' => $deal,
                'message' => 'Deal updated successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to update deal',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified deal (Admin only)
     */
    public function destroy(string $id): JsonResponse
    {
        try {
            $deal = Deal::findOrFail($id);
            $deal->delete();

            return response()->json([
                'success' => true,
                'message' => 'Deal deleted successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to delete deal',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
