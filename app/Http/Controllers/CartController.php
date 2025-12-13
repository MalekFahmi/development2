<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        $cart=Cart::where('user_id',auth('web')->id())->get();
        return view('user.cart.index',compact('cart'));
    }

    public function store(Request $request){
        $input=$request->validate([
            'book_id'=>['required','exists:books,id'],
            'quantity'=>['nullable','numeric']
        ]);
        $input['user_id']=auth('web')->id();
        $cart=Cart::where('user_id',auth('web')->id())->where('book_id');
        if(!$cart){
            Cart::create($input);
            return redirect()->route('user.cart.index')->with('success');
        }
        $cartqty=$cart->quantity +1;
        if($cartqty> $cart->book->qtyInStock){
            return redirect()->back()->with('error');
        }
        $cart->quantity=$cartqty;
        $cart->save();
        return redirect()->route('user.cart.index')->with('success');
    }
    public function update(Request $request,string $bookid){
        $cart=Cart::where('user_id',auth('web')->id())->where('book_id',$bookid)->first();
        $cartqty=$cart->quantity +1;
        if($cartqty> $cart->book->qtyInStock){
            return redirect()->back()->with('error');
        }
        $cart->quantity=$cartqty;
        $cart->save();
        return redirect()->route('user.cart.index')->with('success');
    }

    public function remove(string $bookid){
        $cart=Cart::where('user_id',auth('web')->id())->where('book_id',$bookid)->first();
        $cartqty=$cart->quantity -1;
        if($cartqty<1){
            return redirect()->back()->with('error');
        }
        $cart->quantity=$cartqty;
        $cart->save();
        return redirect()->route('user.cart.index')->with('success');
    }

    public function destroy(string $bookid){
        $cart=Cart::where('user_id',auth('web')->id())->where('book_id',$bookid)->first();
        $cart->delete();
        return redirect()->route('user.cart.index')->with('success');
    }
    
}
