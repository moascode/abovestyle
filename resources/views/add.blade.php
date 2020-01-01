<!-- //laravel's default navbar behavior -->
@extends('layouts.app')

<!-- //body content -->
@section('content')
<div class="container">
    <h2>Add New Order</h2>    
    <form method="POST" action="/order">
        <div class="form-group">
            <textarea name="description" class="form-control"></textarea>  
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add Order</button>
        </div>
    {{ csrf_field() }}
    </form>
</div>

@endsection