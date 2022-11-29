@extends('frontend.Business.page')
@section('business_home')

<!--section start-->
<section class="cart-section section-big-py-space bg-light">
    <div class="custom-container">
        <div class="row">
            <div class="col-sm-12">
                <table class="table cart-table table-responsive-xs">
                    <thead>
                    <tr class="table-head">
                        <th scope="col">image</th>
                        <th scope="col">product name</th>
                        <th scope="col">price</th>
                        <th scope="col">quantity</th>
                        <th scope="col">action</th>
                        <th scope="col">total</th>
                    </tr>
                    </thead>
                    <form action="{{route('confirm.orders.cart')}}" method="POST">
                    @METHOD('POST')    
                    @CSRF
                    
                    
                    @foreach($carts as $cart)
                    <tr>
                       
                        <td><input type="hidden" name="businessId" value="{{$cart->business_id}}"></td>
                        <td><input type="hidden" name="productCode" value="{{$cart->productCode}}"></td>
                        <td><img src="{{asset($cart->image)}}" width="100px" height="100px" alt=""></td>
                        <td>
                            {{$cart->product_title}}
                            <input type="hidden" name="product_name[]" value="{{$cart->product_title}}">
                        </td>
                        <td>
                            {{$cart->price}}
                            <input type="hidden" name="price[]" value="{{$cart->price}}">
                        </td>
                        <td>
                            {{$cart->quantity}}
                            <input type="hidden" name="quantity[]" value="{{$cart->quantity}}">
                        </td>
                        <td>
                        <a href="{{url('home/businessPage/shop/delete-cart', $cart->id)}}" class="icon"><i class="ti-close"></i></a>
                        </td>
                        <td>
                        <h2 class="td-color"> {{$cart->price* $cart->quantity}} </h2></td>
                        </td>
                    </tr>
                    @endforeach
                    
                </table>
                <table class="table cart-table table-responsive-md">
                    <tfoot>
                    <tr>
                        <td>total price :</td>
                        <td>
                            <h2>{{$total_value}}</h2></td>
                    </tr>
                    <tr>
                        <td>Shipping Address :</td>
                        <td>
                            
                        <textarea name="shippingAddress" id="" cols="30" rows="10" required></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>Payment with Bkash +8801713429001 (personal)</td>
                        
                        <td>
                            <input type="text" name="txId" placeholder="transaction ID" class="form-control" required>
                            <span class="text-danger">@error('txId') {{$message}} @enderror</span>
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="row cart-buttons">
            <div class="col-12">
                
            <input type="submit" class="btn btn-normal ml-3" value="Check Out"></div>
                
        </div>

    @if(Session::has('success'))
    <div class="alert alert-success">{{Session::get('success')}}</div>
    @endif
    @if(Session::has('fail'))
    <div class="alert alert-danger">{{Session::get('fail')}}</div>
    @endif
        </form>    
    </div>
</section>
<!--section end-->

@endsection