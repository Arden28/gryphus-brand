<?php

namespace App\Livewire\Home;

use Livewire\Component;
use Modules\Dashboard\app\Models\Product;

class Trends extends Component
{
    public function render()
    {
        $products = Product::isTrend()->orderBy('id', 'DESC')->take(10)->get();
        return view('livewire.home.trends', compact('products'));
    }

    public function changeName(Product $product){
        $product->update([
            'title' => 'Laud Arden',
        ]);
    }
}
