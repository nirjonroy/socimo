@extends('master.backend_master.dashboard')

@section('dashboard-body')
<div class="container" style="margin-top:100px;">
    <div class="row">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Shop Name</th>
                    <th scope="col">Client Name</th>
                    <th scope="col">Order Number</th>
                    <th scope="col">Total Quantity</th>
                    <th scope="col">Total Price</th>
                    <th scope="col">Status</th>
                    <th scope="col">TX Id</th>
                    <th scope="col">Shipping Address</th>
                    <th scope="col">Order date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($BusineesOrders as $bo)
                <tr>
                    <td>{{$bo->id}}</td>
                    <td>{{$bo->bname}}</td>
                    <td>{{$bo->ouname}}</td>
                    <td>{{$bo->orderNumber}}</td>
                    <td>{{$bo->totalQuantity}}</td>
                    <td>{{$bo->totalprice}}</td>
                    <td>{{$bo->status}}</td>
                    <td>{{$bo->txId}}</td>
                    <td>{{$bo->shippingDetail}}</td>
                    <td>{{$bo->created_at}}</td>
                    <td>
                        <a href="{{url('ordersbyBusines/orderDetail', ['order_id' => $bo->orderNumber, 'businessId'=>$bo->id])}}" class="btn btn-warning">View Order</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-felx justify-content-center">
            {{$BusineesOrders->links()}}
    </div>
</div>

@endsection