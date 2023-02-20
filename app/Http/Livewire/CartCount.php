<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartCount extends Component
{
    protected $listeners = ['cartCount' => 'render'];
    public function render()
    {
        return view('livewire.cart-count');
    }
}
