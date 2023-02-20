<?php
namespace App\Http\Service;

class Cart
{
    static public function add($id ,$name ,$image, $price, $quantity)
    {
        if (session()->has("cart.$id")) {
            session()->increment("cart.$id.quantity", $incrementBy = $quantity);
        }else{
            session(["cart.$id" => [
                'id'=>$id,
                'name'=>$name,
                'image'=>$image,
                'price'=>$price,
                'quantity'=>$quantity,
            ]
            ]);
        }
    }
    static public function remove($id ,$quantity)
    {
        if (session()->has("cart.$id") && session("cart.$id.quantity") > 1) {
            session()->decrement("cart.$id.quantity", $decrementBy  = $quantity);
        }elseif(session()->has("cart.$id")){
            session()->forget("cart.$id");
        }
    }
    static public function count()
    {
        if(session()->has('cart')){

            return array_sum(array_column(session('cart') , 'quantity'));
        }
        return 0;
    }
    static public function items()
    {
        return session('cart');
    }
    static public function empty()
    {
        session()->forget('cart');
    }
}
