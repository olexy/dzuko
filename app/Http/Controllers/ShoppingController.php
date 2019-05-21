<?php

namespace dzuko\Http\Controllers;

use dzuko\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;


class ShoppingController extends Controller
{
    public function addToCart(Request $request)
    {
        $product = Product::find($request->prod_id);

        $cartItem = Cart::add([
           'id' =>$product->id,
           'name' => $product->name,
           'qty' => $request->qty,
           'price' => $product->price,
           'weight' => 550
       ]);

    //    Cart::associate($cartItem->rowId, 'Product');
       Cart::associate($cartItem->rowId, \dzuko\Product::class);


       return redirect()->route('storefront.cart');
    }

    public function cart()
    {
        //Cart::destroy();
        return view('storefront.cart');
    }

    public function destroy($rowId)
    {

        Cart::remove($rowId);

        return redirect()->back();
    }
}
