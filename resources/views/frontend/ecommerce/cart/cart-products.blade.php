@extends('master.frontend_master.master')
@section('title')
    Cart Products
@endsection
@section('main-body')
    <section>
        <div class="gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="page-contents" class="row merged20">
                            <div class="col-lg-12">
                                <div class="main-wraper">
                                    <h4 class="main-title">Product Cart</h4>
                                    <div class="cart-table">
                                        <table class="table table-responsive-md">
                                            <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th>Qty</th>
                                                <th>Subtotal</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="edit-cart"><i class="">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></i></div>
                                                    <figure><img src="images/resources/cart1.jpg" alt=""></figure>
                                                    <div class="item-meta">
                                                        <h6>Holly Bible Book</h6>
                                                        <span>by: Gray David</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>29.99</span>
                                                </td>
                                                <td>
                                                    <span>1</span>
                                                </td>
                                                <td>
                                                    <span>29.99</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="edit-cart"><i class="">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></i></div>
                                                    <figure><img src="images/resources/cart2.jpg" alt=""></figure>
                                                    <div class="item-meta">
                                                        <h6>Basic Vu.js Online Course</h6>
                                                        <span>by: Gray David</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>29.99</span>
                                                </td>
                                                <td>
                                                    <span>1</span>
                                                </td>
                                                <td>
                                                    <span>29.99</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="edit-cart"><i class="">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></i></div>
                                                    <figure><img src="images/resources/cart3.jpg" alt=""></figure>
                                                    <div class="item-meta">
                                                        <h6>Advanced Css3 Pure Book</h6>
                                                        <span>by: Gray David</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>29.99</span>
                                                </td>
                                                <td>
                                                    <span>1</span>
                                                </td>
                                                <td>
                                                    <span>29.99</span>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <div class="cart-update">
                                            <a href="#" title="">Continue Shopping</a>
                                            <a href="#" title="">Update Shopping cart</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="cart-box">
                                            <span>Doscount Code</span>
                                            <form method="post" class="c-form">
                                                <input type="text" placeholder="Enter Your Coupon Code">
                                                <button class="button primary circle" type="submit">Apply</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="cart-box">
                                            <span>Estimate Shipping and Tax</span>
                                            <form method="post" class="c-form">
                                                <input type="text" placeholder="Country">
                                                <button class="button primary circle" type="submit">Get A Quote</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="cart-box">
                                            <span>Your Order Total</span>
                                            <ul>
                                                <li><span>Sub Total :</span> <i>29.99</i></li>
                                                <li><span>Discount :</span> <i>2.00</i></li>
                                                <li><span>Shipping :</span> <i>8.00</i></li>
                                                <li><span>Grand Total :</span> <i>35.99</i></li>
                                            </ul>
                                            <a class="main-btn" href="#" title="">Proceed To Checkout</a>
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
@endsection
