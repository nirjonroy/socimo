@extends('master.frontend_master.master')

@section('title')
    Start Boosting
@endsection

@section('main-body')

<div class="container">
    <div class="row">   
        <div class="col-md-4">
            <p style="color:red">
                You Can Payment with your Wallet, Bkash
            </p>
            <hr>
            <p>Payment By Wallet>Send Money>select purpus>boostingPayment</p>
            <p>Payment By Bkash>Send Money then send use your transaction id</p>
        </div>
        <div class="col-md-8">
            <h3>Make Payment </h3>
            <form action="">
                <label for="">Transaction Id</label>
                <input type="text" class="form-controll"><br>
                <label for="">Screen shoot</label>
                <input type="file" class="form-controll"><br>
                <label for="">Payment Method</label>
                <input type="text" class="form-controll"><br>
                <input type="submit" class="btn-btn-success">
            </form>
            <p style="color:white; background:black; font-weight:bolder">N:B: It may takes 24 hours time to procced</p>
        </div>
    </div>
</div>


@endsection