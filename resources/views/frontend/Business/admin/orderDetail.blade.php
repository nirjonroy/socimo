@extends('frontend.Business.admin.master_business')

@section('admin-body')
<div id="hello">
<div class="container" style="margin-top:188px">
<h2>Order Details</h2>
<div class="row">
    <div class="col-md-4">Name: {{$userDetail->uname}}</div>
    <div class="col-md-4">Order Number :{{$userDetail->orderNumber}}</div>
    <div class="col-md-4">Phone: {{$userDetail->uphone}}</div>
</div>
<div class="row">
    <div class="col-md-4">Shipping Address: {{$userDetail->shippingDetail}}</div>
    <div class="col-md-4">User address :{{$userDetail->uaddress}}</div>
    <div class="col-md-4">User Phone: {{$userDetail->uemail}}</div>
</div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        
<table border="2" class="table" style="margin-top:50px;">
    
    <tr>
        <td>Product Name</td>
        <td>Product Code</td>
        <td>Quantity</td>
        <td>Price</td>
        <td>Total</td>
        
    </tr>
    @foreach($orderDetails as $od)
    <tr>
        <td>{{$od->product_name}}</td>
        <td>{{$od->productCode}}</td>
        <td>{{$od->quantity}}</td>
        <td>{{$od->price}}</td>
        <td>{{$od->price * $od->quantity}}</td>
       
        
    </tr>
    @endforeach
    <tr>    
        <td colspan="4">Subtotal</td>
        <td >{{$total_value->totalprice}}</td>
    </tr>
</table>
        </div>
    </div>
    
</div>
</div>
<form >
    <input type="button" value="Print" class="btn btn-success" onclick="codespeedy()" style="margin-left:40%">
</form>
<script>
    function codespeedy(){
        var print_div = document.getElementById("hello");
        var print_area = window.open();
        print_area.document.write(print_div.innerHTML);
        print_area.document.close();
        print_area.focus();
        print_area.print();
        print_area.close();
    }
</script>



@endsection