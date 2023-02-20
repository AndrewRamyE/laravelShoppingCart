<?php

namespace App\Http\Livewire;

use App\Http\Service\Cart;
use App\Models\Product;
use Livewire\Component;

class ProductDetail extends Component
{
    public $product ;
    public function mount($id)
    {
        $this->product = Product::findOrFail($id);
    }
    public function AddToCart($product_id)
    {
        $product = Product::find($product_id);
        Cart::add($product->id , $product->name ,$product->image ,$product->price  , 1);
        $this->emit('cartCount');
    }
    public function render()
    {
        return view('livewire.product-detail');
    }
}
