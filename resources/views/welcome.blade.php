@extends('layouts.app')
<!-- laravel's default navbar behavior -->

<!-- body content -->
@section('content')
<div class="container">
    <div class="card">
        @if (Auth::check())
            <div class="card-header">Orders List</div>
            <div class="card-body">
                <a href="/order" class="btn btn-primary">Add new Order</a>
                <table class="table mt-4">
                    <thead><tr>
                        <th >Order No</th>
                        <th >Name</th>
                        <th >Amount</th>
                        <th >Due</th>
                        <th ></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($user->orders as $order)
                    <tr>
                        <td>
                            {{$order->order_id}}
                        </td>
                        <td>
                            {{$order->name}}
                        </td>
                        <td>
                            BDT {{$order->total_amount}}
                        </td>
                        <td>
                            BDT {{$order->due_amount}}
                        </td>
                        <td>
                            
                            <form action="/order/{{$order->id}}">
                                <button type="submit" name="edit" class="btn btn-primary">Edit</button>
                                <button type="submit" name="delete" formmethod="POST" class="btn btn-danger">Delete</button>
                                {{ csrf_field() }}
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                </table>
            </div>
        @else
            <div class="card-body">
                <h3>You need to log in. <a href="/login">Click here to login</a></h3>
            </div>
        @endif
    </div>                         
</div>

@endsection