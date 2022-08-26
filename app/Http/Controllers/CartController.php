<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::all();
        return view('cart.index',compact('carts'));
 
    }
   
    public function addToCart($id)
    {
        if(auth()->user()) 
        {
            $data = [
                'user_id' => auth()->user()->id,
                'product_id' => $id,
                'quantity' => $id,
            ];
            Cart::updateOrCreate($data);
            Session::flash('status','Add to cart successfulliy');
            
            return redirect('product');
        }else{
            return redirect(route('login'));
    }
    }

    public function updateToCart(Request $request)
    {
        $product_id = $request->input('product_id');
        $product_qty = $request->input('product_qty');

        if(Auth::check())
        {
            if(Cart::where('product_id', $product_id)->where('user_id',Auth::id())->exists())
            {
                $cart = Cart::where('product_id',$product_id)->where('user_id',Auth::id())->first();
                $cart->quantity = $product_qty;
                $cart->update();
                return response()->json(['status'=> "Updated"]);
            }
        }
    }

}
