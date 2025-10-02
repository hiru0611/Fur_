<?php

namespace App\Livewire;

use App\Models\Deal;
use App\Models\Event;
use Livewire\Component;

class DiscoverPage extends Component
{
    public $categories = [];
    public $allTags = [];
    public $deals = [];
    public $events = [];
    
    // Search and filter properties
    public $search = '';
    public $selectedCategory = '';
    public $allCategories = [];

    public function mount()
    {
        $this->loadData();
    }

    public function loadData()
    {
        // Get all unique categories for filter dropdown
        $eventCategories = Event::active()->whereNotNull('category')->distinct()->pluck('category');
        $dealCategories = Deal::active()->whereNotNull('category')->distinct()->pluck('category');
        $allCategories = $eventCategories->merge($dealCategories)->unique()->values();
        
        $this->allCategories = $allCategories->toArray();
        
        $this->categories = $allCategories->map(function ($category) {
            $eventCount = Event::active()->where('category', $category)->count();
            $dealCount = Deal::active()->where('category', $category)->count();
            return [
                'name' => $category,
                'count' => $eventCount + $dealCount
            ];
        })->toArray();

        // Get all tags from events
        $this->allTags = Event::active()->whereNotNull('tags')->get()->pluck('tags')->flatten()->unique()->values()->toArray();

        // Get filtered deals
        $dealsQuery = Deal::active()->latest();
        
        if ($this->search) {
            $dealsQuery->where('title', 'like', '%' . $this->search . '%');
        }
        
        if ($this->selectedCategory) {
            $dealsQuery->where('category', $this->selectedCategory);
        }
        
        $this->deals = $dealsQuery->get()->map(function ($deal) {
            // Convert image to base64 if not already converted
            $base64Image = $deal->base64_image;
            if (!$base64Image && $deal->image) {
                $base64Image = \App\Services\ImageService::convertToBase64($deal->image);
            }
            
            return [
                'title' => $deal->title,
                'distance' => $deal->distance,
                'discount' => $deal->discount,
                'image' => $base64Image ?: asset('storage/' . $deal->image),
                'base64_image' => $base64Image,
            ];
        })->toArray();

        // Get filtered events
        $eventsQuery = Event::active()->latest();
        
        if ($this->search) {
            $eventsQuery->where('title', 'like', '%' . $this->search . '%');
        }
        
        if ($this->selectedCategory) {
            $eventsQuery->where('category', $this->selectedCategory);
        }
        
        $this->events = $eventsQuery->get()->map(function ($event) {
            // Convert image to base64 if not already converted
            $base64Image = $event->base64_image;
            if (!$base64Image && $event->image) {
                $base64Image = \App\Services\ImageService::convertToBase64($event->image);
            }
            
            return [
                'title' => $event->title,
                'author' => $event->author,
                'date' => $event->event_date->format('F j, Y'),
                'excerpt' => $event->excerpt,
                'image' => $base64Image ?: asset('storage/' . $event->image),
                'base64_image' => $base64Image,
            ];
        })->toArray();
    }

    public function refreshData()
    {
        $this->loadData();
    }

    public function updatedSearch()
    {
        $this->loadData();
    }

    public function updatedSelectedCategory()
    {
        $this->loadData();
    }

    public function clearFilters()
    {
        $this->search = '';
        $this->selectedCategory = '';
        $this->loadData();
    }

    public function render()
    {
        return view('livewire.discover-page');
    }
}
