<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\Collection;
use App\User;
use App\Order;
use DB;

class OrdersController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $user->orders = $user->orders->reverse();

        foreach ($user->orders as $order) {
            $product_price = $order->quantity * $order->product_price;
            $additional_charge = $order->weight_charge + $order->delivery_charge;
            $total_amount = $product_price +  $additional_charge;
            $due_amount = $total_amount - $order->advance_pay;
            $order['total_amount'] = $total_amount;
            $order['due_amount'] = $due_amount;
        }
        //Log::info(print_r( $user->orders[0], true));
        return view('welcome', compact('user'));
    }

    public function add()
    {
        return view('add');
    }

    public function create(Request $request)
    {
        $lastEntry = DB::table('orders')->last();

        $order = new Order();
        $order->order_id = $lastEntry->order_id + 1 ;
        $order->shipment_id = $request->shipment_id;
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
            $product_price = $order->quantity * $order->product_price;
            $additional_charge = $order->weight_charge + $order->delivery_charge;
            $total_amount = $product_price +  $additional_charge;
            $due_amount = $total_amount - $order->advance_pay;
            $total_income = $order->advance_pay + $order->cod_credit;
            $total_expense = $order->product_cost + $order->weight_cost + ($total_amount - $total_income);
            $net_income =  $total_amount - $total_expense;
            $business = [
                'pp' => $product_price,
                'ac' => $additional_charge,
                'ta' => $total_amount,
                'du' => $due_amount,
                't-exp' => $total_expense,
                't-inc' => $total_income,
                'n-inc' => $net_income
            ];
            return view('edit', compact('order', 'business'));
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
            $order->shipment_id = $request->shipment_id;
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
            $order->product_cost = $request->product_cost;
            $order->weight_cost = $request->weight_cost;
            $order->advance_pay = $request->advance_pay;
            $order->cod_credit = $request->cod_credit;
            $order->save();
            return redirect('/');
        }
    }
}
