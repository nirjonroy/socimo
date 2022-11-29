@extends('frontend.Business.page')
@section('business_home')
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-9">
            <h2 style="color:white; background:black; text-align:center; height:50px; font-size:30px; padding:5px; font-weight:bolder;">Order Status</h2>
            @foreach($searchname as $ordersearch)
             <h2>Status :{{$ordersearch->status}} <br>  </h2>
             <h2>Order number : {{$ordersearch->orderNumber}} <br></h2>
             <h2>Shipping Address :{{$ordersearch->address}} <br></h2>
             <h2>Price : {{$ordersearch->price * $ordersearch->quantity}}</h2>   
             <h2>Order Date : {{$ordersearch->created_at}}</h2>   
                

            @endforeach
        </div>
    </div>
</div>
@endsection