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

       Cart::associate($cartItem->rowId, \dzuko\Product::class);


       return redirect()->route('cart');
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

    public function update($rowId, $qty)
    {

        Cart::update($rowId, $qty + 1);

        return redirect()->back();
    }

    public function fast_add_to_cart($id)
    {
        $product = Product::find($id);

        $cartItem = Cart::add([
           'id' =>$product->id,
           'name' => $product->name,
           'qty' => 1,
           'price' => $product->price,
           'weight' => 550
       ]);

       Cart::associate($cartItem->rowId, \dzuko\Product::class);


       return redirect()->route('cart');
    }

    public function checkout()
    {
       return view('storefront.checkout');
    }

    public function confirm(Request $request)
    {
        $email = auth()->user()->email;
        $amount = str_replace( ',', '', $request->amount);
        $amount2 = $amount * 100;

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/transaction/initialize",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS =>"{\n   \"email\": \"$email\", \n   \"amount\": \"$amount2\"}",
            CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer sk_test_36e175c5c710aacac84e2a3974988707c0834e7d",
            "Cache-Control: no-cache",
            "Content-Type: application/json"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        $auth_url ='';
        $ref = '';
        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo "<br/>=========Paystack Response============<br/>".$response."<br/>";
                $myfile = file_put_contents('logs.txt', $response.PHP_EOL , FILE_APPEND | LOCK_EX);
            $ans = json_decode($response);
            // dd($ans);
            $auth_url = $ans->data->authorization_url;
            $ref = $ans->data->reference;
        }

        Cart::destroy();

        return redirect()->away($auth_url);

    }
}
