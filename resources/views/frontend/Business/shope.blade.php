@extends('frontend.Business.page')
@section('business_home')

<!-- breadcrumb start -->
<div class="breadcrumb-main ">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-contain">
                    <div>
                        <h2> Welcome Shop</h2>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->


<!-- section start -->
<section class="section-big-pt-space ratio_asos bg-light">
    <div class="collection-wrapper">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-3 collection-filter category-page-side">
                    <!-- side-bar colleps block stat -->
                    <div class="collection-filter-block creative-card creative-inner category-side">
                        <!-- brand filter start -->
                        <div class="collection-mobile-back"><span class="filter-back"><i class="fa fa-angle-left" aria-hidden="true"></i> back</span></div>
                        <div class="collection-collapse-block open">
                            <h3 class="collapse-block-title mt-0">brand</h3>
                            <div class="collection-collapse-block-content">
                                <div class="collection-brand-filter">
                                    <div class="custom-control custom-checkbox collection-filter-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="zara">
                                        <label class="custom-control-label" for="zara">zara</label>
                                    </div>
                                    <div class="custom-control custom-checkbox collection-filter-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="vera-moda">
                                        <label class="custom-control-label" for="vera-moda">vera-moda</label>
                                    </div>
                                    <div class="custom-control custom-checkbox collection-filter-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="forever-21">
                                        <label class="custom-control-label" for="forever-21">forever-21</label>
                                    </div>
                                    <div class="custom-control custom-checkbox collection-filter-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="roadster">
                                        <label class="custom-control-label" for="roadster">roadster</label>
                                    </div>
                                    <div class="custom-control custom-checkbox collection-filter-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="only">
                                        <label class="custom-control-label" for="only">only</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- color filter start here -->
                        <div class="collection-collapse-block open">
                            <h3 class="collapse-block-title">colors</h3>
                            <div class="collection-collapse-block-content">
                                <div class="color-selector">
                                    <ul>
                                        <li class="color-1 active"></li>
                                        <li class="color-2"></li>
                                        <li class="color-3"></li>
                                        <li class="color-4"></li>
                                        <li class="color-5"></li>
                                        <li class="color-6"></li>
                                        <li class="color-7"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- price filter start here -->
                        <div class="collection-collapse-block border-0 open">
                            <h3 class="collapse-block-title">price</h3>
                            <div class="collection-collapse-block-content">
                                <div class="collection-brand-filter">
                                    <div class="custom-control custom-checkbox collection-filter-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="hundred">
                                        <label class="custom-control-label" for="hundred">$10 - $100</label>
                                    </div>
                                    <div class="custom-control custom-checkbox collection-filter-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="twohundred">
                                        <label class="custom-control-label" for="twohundred">$100 - $200</label>
                                    </div>
                                    <div class="custom-control custom-checkbox collection-filter-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="threehundred">
                                        <label class="custom-control-label" for="threehundred">$200 - $300</label>
                                    </div>
                                    <div class="custom-control custom-checkbox collection-filter-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="fourhundred">
                                        <label class="custom-control-label" for="fourhundred">$300 - $400</label>
                                    </div>
                                    <div class="custom-control custom-checkbox collection-filter-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="fourhundredabove">
                                        <label class="custom-control-label" for="fourhundredabove">$400 above</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- silde-bar colleps block end here -->
                    <!-- side-bar single product slider start -->
                    <div class="theme-card creative-card creative-inner">
                        <h5 class="title-border">new product</h5>
                        <div class="offer-slider slide-1">
                            <div>
                                <div class="media">
                                    <a href=""><img class="img-fluid " src="../assets/images/product-sidebar/001.jpg" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div><a href="product-page(no-sidebar).html"><h6>Slim Fit Cotton Shirt</h6></a>
                                        <h4>$500.00</h4></div>
                                </div>
                                <div class="media">
                                    <a href=""><img class="img-fluid " src="../assets/images/product-sidebar/002.jpg" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div><a href="product-page(no-sidebar).html"><h6>Slim Fit Cotton Shirt</h6></a>
                                        <h4>$500.00</h4></div>
                                </div>
                                <div class="media ">
                                    <a href=""><img class="img-fluid " src="../assets/images/product-sidebar/003.jpg" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div><a href="product-page(no-sidebar).html"><h6>Slim Fit Cotton Shirt</h6></a>
                                        <h4>$500.00</h4></div>
                                </div>
                            </div>
                            <div>
                                <div class="media">
                                    <a href=""><img class="img-fluid " src="../assets/images/product-sidebar/003.jpg" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div><a href="product-page(no-sidebar).html"><h6>Slim Fit Cotton Shirt</h6></a>
                                        <h4>$500.00</h4></div>
                                </div>
                                <div class="media">
                                    <a href=""><img class="img-fluid " src="../assets/images/product-sidebar/001.jpg" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div><a href="product-page(no-sidebar).html"><h6>Slim Fit Cotton Shirt</h6></a>
                                        <h4>$500.00</h4></div>
                                </div>
                                <div class="media">
                                    <a href=""><img class="img-fluid " src="../assets/images/product-sidebar/002.jpg" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div><a href="product-page(no-sidebar).html"><h6>Slim Fit Cotton Shirt</h6></a>
                                        <h4>$500.00</h4></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- side-bar single product slider end -->
                    <!-- side-bar banner start here -->
                    <div class="collection-sidebar-banner">
                        <a href="#"><img src="../assets/images/category/side-banner.png" class="img-fluid " alt=""></a>
                    </div>
                    <!-- side-bar banner end here -->
                    <div class="theme-card creative-card creative-inner">
                        <h5 class="title-border"></h5>
                        <div class="offer-slider slide-1">
                            <div>
                                <div class="media">
                                    <a href=""><img class="img-fluid " src="../assets/images/product-sidebar/001.jpg" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div><a href="product-page(no-sidebar).html"><h6>Slim Fit Cotton Shirt</h6></a>
                                        <h4>$500.00</h4></div>
                                </div>
                            </div>
                            <div>
                                <div class="media">
                                    <a href=""><img class="img-fluid " src="../assets/images/product-sidebar/003.jpg" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div><a href="product-page(no-sidebar).html"><h6>Slim Fit Cotton Shirt</h6></a>
                                        <h4>$500.00</h4></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collection-content col">
                    <div class="page-main-content">
                        <div class="row">
                            <div class="col-sm-12">
                               
                                <div class="collection-product-wrapper">
                                    <div class="product-top-filter">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="filter-main-btn"><span class="filter-btn  "><i class="fa fa-filter" aria-hidden="true"></i> Filter</span></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="product-filter-content">
                                                    <div class="search-count">
                                                        <h5>Showing Products 1-24 of 10 Result</h5></div>
                                                    <div class="collection-view">
                                                        <ul>
                                                            <li><i class="fa fa-th grid-layout-view"></i></li>
                                                            <li><i class="fa fa-list-ul list-layout-view"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="collection-grid-view">
                                                        <ul>
                                                            <li><img src="../assets/images/category/icon/2.png" alt="" class="product-2-layout-view"></li>
                                                            <li><img src="../assets/images/category/icon/3.png" alt="" class="product-3-layout-view"></li>
                                                            <li><img src="../assets/images/category/icon/4.png" alt="" class="product-4-layout-view"></li>
                                                            <li><img src="../assets/images/category/icon/6.png" alt="" class="product-6-layout-view"></li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-page-per-view">
                                                        <select>
                                                            <option value="High to low">24 Products Par Page</option>
                                                            <option value="Low to High">50 Products Par Page</option>
                                                            <option value="Low to High">100 Products Par Page</option>
                                                        </select>
                                                    </div>
                                                    <div class="product-page-filter">
                                                        <select>
                                                            <option value="High to low">Sorting items</option>
                                                            <option value="Low to High">50 Products</option>
                                                            <option value="Low to High">100 Products</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrapper-grid">
                                        <div class="row">
                                           @foreach($products as $product)
                                            <div class="col-xl-3 col-md-4 col-6  col-grid-box">
                                                <div class="product">
                                                    <div class="product-box">
                                                        <div class="product-imgbox">
                                                            <div class="product-front">
                                                                <img src="{{asset($product->productImage)}}" class="img-fluid  " alt="product">
                                                            </div>
                                                            <div class="product-back">
                                                                <img src="{{asset($product->productImage)}}" class="img-fluid  " alt="product">
                                                            </div>
                                                        </div>
                                                        <div class="product-detail detail-center ">
                                                            <div class="detail-title">
                                                                <div class="detail-left">
                                                                    <div class="rating-star">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <p>{{($product->productDescription)}}</p>
                                                                    <a href="">
                                                                        <h6 class="price-title">
                                                                        {{($product->productName)}}
                                                                        </h6>
                                                                    </a>
                                                                </div>
                                                                <div class="detail-right">
                                                                    <div class="check-price">
                                                                    {{($product->Currency)}} 
                                                                    {{($product->productPrice)}} 
                                                                    </div>
                                                                    <div class="price">
                                                                        <div class="price">
                                                                        {{($product->Currency)}} 
                                                                    {{($product->discountPrice)}} 
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="addToCart">
                                                                <form action="{{url('home/businessPage/shop/add-cart', $product->id)}}" method="post">
                                                                    @method('POST')
                                                                    @csrf
                                                                <input type="number" name="quantity" min="1" class="form-controll" value="1">
                                                                <input type="submit" class="btn btn-primary" value="Add To Cart">            
                                                                </form>
                                                                
                                                            </div>
                                                            <!-- <div class="icon-detail">
                                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                                    <i class="ti-bag" ></i>
                                                                </button>
                                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                                </a>
                                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                                    <i class="ti-search" aria-hidden="true"></i>
                                                                </a>
                                                                <a href="compare.html" title="Compare">
                                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                                </a>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    

                                            @endforeach

                                            





                                           
                                        </div>
                                    </div>
                                    <div class="product-pagination">
                                        <div class="theme-paggination-block">
                                            <div class="row">
                                                <div class="col-xl-6 col-md-6 col-sm-12">
                                                    <nav aria-label="Page navigation">
                                                        <ul class="pagination">
                                                            <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-chevron-left" aria-hidden="true"></i></span> <span class="sr-only">Previous</span></a></li>
                                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true"><i class="fa fa-chevron-right" aria-hidden="true"></i></span> <span class="sr-only">Next</span></a></li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                                <div class="col-xl-6 col-md-6 col-sm-12">
                                                    <div class="product-search-count-bottom">
                                                        <h5>Showing Products 1-24 of 10 Result</h5></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section End -->

@endsection