@extends('frontend.Business.admin.master_business')

@section('admin-body')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h2>Manage Orders</h2>

<table border="2" class="table" style="margin-top:188px;">
    <tr>
        <td colspan="3"></td>
        <td colspan="8"><h2 style="text-align:center">Manage Orders</h2></td>
    </tr>
    <tr style="background:black; color:white; font-weight:bolder">
        <td>Customer Name</td>
        <td>Customer Phone</td>
        <td>Customer Email</td>
        <td>Customer Address</td>
        <td>Customer Shipping Address</td>
        <td>Order Number</td>
        <td>Product Quantity</td>
        <td>Product Price</td>
        <td>Transaction Id</td>
        <td>Status</td>
        <td>Date</td>
        <td>Action</td>
    </tr>
    @foreach($Orders as $order)
    <tr>
        <td>{{$order->uname}}</td>
        <td>{{$order->uphone}}</td>
        <td>{{$order->uemail}}</td>
        <td>{{$order->uaddress}}</td>
        <td>{{$order->shippingDetail}}</td>
        <td>{{$order->orderNumber}}</td>
        <td>{{$order->totalQuantity}}</td>
        <td>{{$order->totalprice}}</td>
        <td>{{$order->txId}}</td>
        <td>{{$order->status}}</td>
        <td>{{$order->created_at}}</td>
        <td>
            <a href="{{url('Business/sels/orderDetail', ['order_id' => $order->orderNumber, 'businessId'=>$BusinessDetails->id])}}" class="btn btn-warning">View Order </a>
           @if($order->status == 'Pending')
            <a href="{{url('Business/sels/processing', ['order_id' => $order->orderNumber, 'businessId'=>$BusinessDetails->id])}}" class="btn btn-success">Processing Order </a>
           @elseif($order->status == 'Processing')
           <a href="{{url('Business/sels/shipped', ['order_id' => $order->orderNumber, 'businessId'=>$BusinessDetails->id])}}" class="btn btn-success">Shipped Order </a>
           @elseif($order->status == 'Shipped')
           <a href="{{url('Business/sels/Deliverd', ['order_id' => $order->orderNumber, 'businessId'=>$BusinessDetails->id])}}" class="btn btn-success">Order Deliverd</a>
           @else
           <button class="btn btn-primary" disabled="disabled" style="background:green;">Order Complated</button>
           @endif
        </td>
    </tr>
    @endforeach
</table>
        </div>
    </div>
</div>
@endsection