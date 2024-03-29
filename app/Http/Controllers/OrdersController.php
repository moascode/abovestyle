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
        if($user->orders->count()){
            $user->orders = $user->orders->reverse();

            foreach ($user->orders as $order) {
                $product_price = $order->quantity * $order->product_price;
                $additional_charge = $order->weight_charge + $order->delivery_charge;
                $total_amount = $product_price +  $additional_charge;
                $due_amount = $total_amount - $order->advance_pay;
                $order['total_amount'] = $total_amount;
                $order['due_amount'] = $due_amount;
            }
            //Log::info(print_r( $user->orders, true));
        }

        return view('orders.list-order', compact('user'));
        
    }

    public function add()
    {
        $intent = Auth::user()->createSetupIntent();
        return view('orders.add-order', compact('intent'));
    }

    public function create(Request $request)
    {
        $user = $request->user();
        $paymentMethod = $request->input('payment_method');

        try {
            $user->createOrGetStripeCustomer();
            $user->updateDefaultPaymentMethod($paymentMethod);
            $user->charge($request->total_amount * 100, $paymentMethod);   
        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }

        $lastEntry = 1001;//DB::table('orders')->last();

        $order = new Order();
        $order->order_id = $lastEntry + 1 ;
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

        //return redirect('/dashboard');
        //return redirect()->route('product.index')->with('success', 'Your payment is confirmed. Thank you for shopping!');
        return back()->with('message', 'Order purchased successfully!');
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
            return view('orders.edit-order', compact('order', 'business'));
        }
        else
        {
            return redirect('/login');
        }
    }

    public function update(Request $request, Order $order)
    {
        if(isset($_POST['delete']))
        {
            $order->delete();
            return redirect('/dashboard');
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
            return redirect('/dashboard');
        }
    }
}
