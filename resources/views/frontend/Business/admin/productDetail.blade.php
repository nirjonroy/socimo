@extends('frontend.Business.admin.master_business')

@section('admin-body')
<div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Product Detail
                                    
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Physical</li>
                                <li class="breadcrumb-item active">Product Detail</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="card">
                    <div class="row product-page-main card-body">
                        <div class="col-xl-4">
                            <div class="product-slider owl-carousel owl-theme" id="sync1">
                                <div class="item"><img src="{{asset($products->productImage)}}" alt="" class="blur-up lazyloaded" style="width:300px; height:300px;"></div>
                               
                            </div>
                            <!-- <div class="owl-carousel owl-theme" id="sync2">
                                <div class="item"><img src="{{asset($products->productImage)}}" alt="" class="blur-up lazyloaded"></div>
                                
                            </div> -->
                        </div>
                        <div class="col-xl-8">
                            <div class="product-page-details product-right mb-0">
                                <h2>{{$products->productName}}</h2>
                                
                                <hr>
                                <hr>
                                <h6 class="product-title">Product Type</h6>
                                <p>{{$products->productType}}</p>
                                <h6 class="product-title">product details</h6>
                                <p>{{$products->productDescription}}</p>
                                <div class="product-price digits mt-2">
                                    <h3>{{$products->Currency}}{{$products->discountPrice}} <br>{{$products->Currency}}{{$products->productPrice}}</h3>
                                </div>
                                <hr>
                                <h6 class="product-title">Product Category</h6>
                                <p>{{$products->vendorCategoryId}}</p>
                                <hr>
                                <h6 class="product-title">Product Color</h6>
                                <p>{{$products->productColor}}</p>
                                
                                <hr>
                                <h6 class="product-title">Product Size</h6>
                                <p>{{$products->productSize}}</p>
                                <hr>
                                <h6 class="product-title">Product Code</h6>
                                <p>{{$products->productCode}}</p>
                                <div class="add-product-form">
                                    <h6 class="product-title">Total Quantity</h6>
                                    <fieldset class="qty-box mt-2 ml-0">
                                        <div class="input-group">
                                            {{$products->totalProduct}}
                                        </div>
                                    </fieldset>
                                </div>
                                <hr>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

        </div>
@endsection