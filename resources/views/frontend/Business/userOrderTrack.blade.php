@extends('frontend.Business.page')
@section('business_home')

<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-9">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3>Track Your Product With product Tracking Number</h3>
                    </div>
                </div>
            </div>
            <form action="{{route('orderSearch.trackingNumber', $Businesspag->id)}}" method="POST">
            @method('post')
            @csrf
            <div class="input-group">
                <div class="form-outline">
                    <input type="text" id="search-input" name="search" class="form-control" placeholder="Order Tracking Number" required>
                    <input type="submit" class="btn btn-warning" value="search">
                </div>
            </div>
            </form>

            
            
        </div>
    </div>
</div>



@endsection