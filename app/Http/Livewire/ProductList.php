<?php

namespace App\Http\Livewire;

use App\Http\Service\Cart;
use App\Models\Product;
use Livewire\Component;

class ProductList extends Component
{

    public function mount()
    {
        // dd(Cart::count());
    }
    public function AddToCart($product_id)
    {
        $product = Product::find($product_id);
        Cart::add($product->id , $product->name ,$product->image ,$product->price  , 1);
        $this->emit('cartCount');
    }
    public function render()
    {
        $products = Product::paginate(10);
        return view('livewire.product-list',compact('products'));
    }
}
