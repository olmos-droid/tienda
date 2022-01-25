@extends('layouts.master')
@section('title', 'Cart shop')
@section('content')




@if ({{session()->has('cart')}})
<div class="row">
    <div class="col-sm-6 col-sm-6 col-sm-offset-3 col-sm-offset-3">
        <ul class="list-group">
            @foreach ($movies as $movie)
            <li class="list-group-item">
                <span class="badge">{{$product['qty']}}</span>
                <strong>{{$product['item']['title']}}</strong>
                <span class="label label-success">{{$product['price']}}</span>
                <div class="btn-group">
                    <button type="button" class="btn btn-primary btn-xd dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                    <ul class="dropdpwn-menu">
                        <li><a href="">Reduce by 1</a></li>
                        <li><a href="">Reducea ll</a></li>
                    </ul>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
        <strong>Total: {{$totalPrice}}</strong>
    </div>
</div>
<div class="row">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
        <button type="button" class="btn btn-success">Checkout</button>
    </div>
</div>
<div class="row">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
        <h2>No items in cart</h2>
    </div>
</div>
@else

@endif
@endsection