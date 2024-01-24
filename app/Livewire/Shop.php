<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Modules\Dashboard\app\Models\Category;
use Modules\Dashboard\app\Models\Product;

class Shop extends Component
{
    use WithPagination;

    public $sortField = 'default';
    public $filters = [];
    public $search = '';

    public $category;

    public function render()
    {
        $products = Product::query();

        // Apply filters
        if (!empty($this->filters)) {
            // Adjust this part based on your filter logic
            // Example: $products->where('category', $this->filters['category']);
        }

        // Apply search
        if (!empty($this->search)) {
            $products->where('name', 'like', '%' . $this->search . '%');
        }

        // Apply sorting
        switch ($this->sortField) {
            case 'price_low':
                $products->orderBy('price');
                break;
            case 'price_high':
                $products->orderByDesc('price');
                break;
            // Add more cases for other sorting options
        }

        $categories = Category::orderBy('id', 'DESC')->get();
        $products = $products->paginate(12);

        return view('livewire.shop', compact('products', 'categories'));
    }
}
