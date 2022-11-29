@extends('frontend.Business.admin.master_business')

@section('admin-body')

<div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Product List
                                    <small>Bigdeal Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Physical</li>
                                <li class="breadcrumb-item active">Product List</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row products-admin ratio_asos">
                    @foreach($products as $product)
                    <div class="col-xl-3 col-sm-6">
                        <div class="card product">
                            <div class="card-body" style="height:300px; width:300px">
                                <div class="product-box p-0">
                                    <div class="product-imgbox" style="width:120px; height:120px">
                                        <div class="product-front">
                                            <img src="{{asset($product->productImage)}}" class="img-fluid  " alt="product" width="100px" height="100px">
                                        </div>
                                        <div class="product-back">
                                            <img src="{{asset($product->productImage)}}" class="img-fluid  " alt="product" width="100px" height="100px">
                                        </div>
                                        
                                        
                                    </div>
                                    <div class="product-detail detail-inline p-0">
                                        <div class="detail-title">
                                            <div class="detail-left">
                                                <div class="rating-star">
                                                    <p>{{$product->productName}}</p>
                                                </div>
                                                
                                            </div>
                                            <div class="detail-right">
                                                <div class="check-price">
                                                    {{$product->Currency}} {{$product->productPrice}}
                                                </div>
                                                <div class="price">
                                                    <div class="price">
                                                        {{$product->Currency}} {{$product->discountPrice}}
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="product-icon icon-inline" style="margin-top:45px">
                                            <!-- <button class="btn btn-warning">Edit</button> -->
                                            
                                            <a href="{{url('business/product-view', ['id'=>$product->id, 'business_id'=>$BusinessDetails->id ])}}"  class="btn btn-success">View</a>
                                            <a href="{{url('business/product-delete', ['id'=>$product->id, 'business_id'=>$BusinessDetails->id ])}}" onClick="return confirm('Are You sure want to Delete?')" class="btn btn-danger">Delete</a>
                                          
                                        </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
      

                </div>
            </div>
            <!-- Container-fluid Ends-->

        </div>

@endsection