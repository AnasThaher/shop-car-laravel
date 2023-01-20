<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
class OrderController extends Controller
{
    public function order(Request $request){
        $request->validate([
            'price' => 'required',
            'car_id' => 'required',
            'user_name' => 'required',
            'location' => 'required',
            'user_id' => 'required',
        ]);
        // Order::create($request->all());
    //    $order = Order::where('car_id','=',$request->car_id,'user_id','=',$request->user_id)->first();
       $order = Order::where('car_id',$request->car_id)->where('user_id',$request->user_id)->first();
       if(is_null($order)){
          $re = Order::create($request->all());
           return response()->json("your car is ordared ", 200);
        } else{
            return response()->json('this order is alredy exist', 400);
       }
    }
}
