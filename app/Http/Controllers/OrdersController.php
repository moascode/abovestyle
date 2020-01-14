<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Order;

class OrdersController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('welcome', compact('user'));
    }

    public function add()
    {
        return view('add');
    }

    public function create(Request $request)
    {
        $order = new Order();
        $order->shipment_id = ' ';
        $order->name = $request->name;
        $order->phone_number = $request->phone_number;
        $order->email = $request->email;
        $order->address = $request->address;
        $order->category = $request->category;
        $order->product_name = $request->product_name;
        $order->quantity = $request->quantity;
        $order->product_price = $request->product_price;
        $order->weight_charge = $request->weight_charge;
        $order->delivery_charge = $request->delivery_charge;
        $order->product_cost = 0;
        $order->weight_cost = 0;
        $order->advance_pay = 0;
        $order->cod_credit = 0;
        $order->user_id = Auth::id();
        $order->save();
        return redirect('/');
    }

    public function edit(Order $order)
    {
        if(Auth::check() && Auth::user()->id == $order->user_id)
        {
            $order->name = $order->name . ' hello';
            return view('edit', compact('order'));
        }
        else
        {
            return redirect('/');
        }
    }

    public function update(Request $request, Order $order)
    {
        if(isset($_POST['delete']))
        {
            $order->delete();
            return redirect('/');
        }
        else
        {
            $order->name = $request->name;
            $order->save();
            return redirect('/');
        }
    }
}
