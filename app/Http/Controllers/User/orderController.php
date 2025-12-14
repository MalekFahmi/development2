<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class orderController extends Controller
{
    public function index()
    {
        $orders=Order::with('Orderitem')->get();
        return view('',compact('orders'));
    }

    public function show(Order $order){
        $userorder=Order::with('Orderitem')->first();
        return view('',compact('userorder'));
    }

    public function store(Request $request){
        $input=$request->validate([
            'phonenumber'=>['required'],
            'location'=>['required'],
            'note'=>['nullable']
        ]);
        $order=Order::latest()->first();
        $orderid=$order->id;
        if(!$order){
            $orderid=1;
        }
        else{
            $orderid=$orderid+1;
        }
        $cartitem=Cart::where('user_id',auth('web')->id())->with('book')->get();
        $total=0;
        foreach($cartitem as $item){
            OrderItem::create(
                [
                    'order_id'=>$orderid,
                    'book_id'=>$item->book_id,
                    'quantity'=>$item->quantity
                ]
                );
        }
        Order::create([
            'user_id'=>auth('web')->id(),
            'phonenumber'=>$input['phonenumber'],
            'location'=>$input['location'],
            'note'=>$input['note'] ?? null
        ]);
        return redirect()->route('')->with('success');
    }
}
