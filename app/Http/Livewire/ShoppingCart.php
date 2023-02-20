<?php

namespace App\Http\Livewire;

use App\Http\Service\Cart;
use App\Models\Product;
use Livewire\Component;

class ShoppingCart extends Component
{
    public function AddToCart($product_id)
    {
        $product = Product::find($product_id);
        Cart::add($product->id , $product->name ,$product->image ,$product->price  , 1);
        $this->emit('cartCount');
    }
    public function removeFromCart($product_id)
    {
        $product = Product::find($product_id);
        Cart::remove($product->id , 1);
        $this->emit('cartCount');
    }
    public function emptyCart()
    {
        Cart::empty();
        $this->emit('cartCount');
    }
    public function render()
    {
        $cartItems = Cart::items();
        return view('livewire.shopping-cart',compact('cartItems'));
    }
}
