<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    /**
     * Display a listing of active events
     */
    public function index(Request $request): JsonResponse
    {
        try {
            $query = Event::active();

            // Filter by category if provided
            if ($request->has('category')) {
                $query->where('category', $request->category);
            }

            // Filter by date range
            if ($request->has('from_date')) {
                $query->whereDate('event_date', '>=', $request->from_date);
            }
            if ($request->has('to_date')) {
                $query->whereDate('event_date', '<=', $request->to_date);
            }

            // Filter by tags
            if ($request->has('tags')) {
                $tags = is_array($request->tags) ? $request->tags : [$request->tags];
                $query->where(function($q) use ($tags) {
                    foreach ($tags as $tag) {
                        $q->orWhereJsonContains('tags', $tag);
                    }
                });
            }

            // Sorting
            $sortBy = $request->get('sort_by', 'event_date');
            $sortOrder = $request->get('sort_order', 'asc');
            $query->orderBy($sortBy, $sortOrder);

            // Pagination
            $perPage = $request->get('per_page', 15);
            $events = $query->paginate($perPage);

            return response()->json([
                'success' => true,
                'data' => $events,
                'message' => 'Events retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to retrieve events',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified event
     */
    public function show(string $id): JsonResponse
    {
        try {
            $event = Event::findOrFail($id);
            
            return response()->json([
                'success' => true,
                'data' => $event,
                'message' => 'Event retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Event not found'
            ], 404);
        }
    }

    /**
     * Store a newly created event (Admin only)
     */
    public function store(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'excerpt' => 'required|string|max:500',
            'content' => 'required|string',
            'author' => 'required|string|max:255',
            'event_date' => 'required|date|after:today',
            'category' => 'required|string|max:255',
            'tags' => 'nullable|array',
            'tags.*' => 'string|max:50',
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
            $eventData = $request->only([
                'title', 'excerpt', 'content', 'author', 'event_date', 'category', 'tags', 'is_active'
            ]);

            // Handle image upload
            if ($request->hasFile('image')) {
                $path = $request->file('image')->store('events', 'public');
                $eventData['image'] = $path;
            }

            // Handle base64 image
            if ($request->has('base64_image')) {
                $eventData['base64_image'] = $request->base64_image;
            }

            $event = Event::create($eventData);

            return response()->json([
                'success' => true,
                'data' => $event,
                'message' => 'Event created successfully'
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to create event',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Update the specified event (Admin only)
     */
    public function update(Request $request, string $id): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'title' => 'sometimes|required|string|max:255',
            'excerpt' => 'sometimes|required|string|max:500',
            'content' => 'sometimes|required|string',
            'author' => 'sometimes|required|string|max:255',
            'event_date' => 'sometimes|required|date',
            'category' => 'sometimes|required|string|max:255',
            'tags' => 'nullable|array',
            'tags.*' => 'string|max:50',
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
            $event = Event::findOrFail($id);
            
            $updateData = $request->only([
                'title', 'excerpt', 'content', 'author', 'event_date', 'category', 'tags', 'is_active'
            ]);

            // Handle image upload
            if ($request->hasFile('image')) {
                $path = $request->file('image')->store('events', 'public');
                $updateData['image'] = $path;
            }

            // Handle base64 image
            if ($request->has('base64_image')) {
                $updateData['base64_image'] = $request->base64_image;
            }

            $event->update($updateData);

            return response()->json([
                'success' => true,
                'data' => $event,
                'message' => 'Event updated successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to update event',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified event (Admin only)
     */
    public function destroy(string $id): JsonResponse
    {
        try {
            $event = Event::findOrFail($id);
            $event->delete();

            return response()->json([
                'success' => true,
                'message' => 'Event deleted successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to delete event',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
