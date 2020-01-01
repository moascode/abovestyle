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
        $order->description = $request->description;
        $order->user_id = Auth::id();
        $order->save();
        return redirect('/');
    }

    public function edit(Order $order)
    {
        if(Auth::check() && Auth::user()->id == $order->user_id)
        {
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
            $order->description = $request->description;
            $order->save();
            return redirect('/');
        }
    }
}
