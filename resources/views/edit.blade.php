@extends('layouts.app')

@section('content')
<div class="container">
	<h1>Edit the Order</h1>
    <form method="POST" action="/order/{{ $order->id }}">
        <div class="form-group">
            <textarea name="description" class="form-control">{{$order->description }}</textarea>	
        </div>
        <div class="form-group">
            <button type="submit" name="update" class="btn btn-primary">Update order</button>
        </div>
    {{ csrf_field() }}
    </form>
</div>

@stop