@extends('master.frontend_master.master')

@section('title')
    Send Money
@endsection

@section('main-body')

    <div class="container">
        <div class="panel panel-default">
            <div class="panel-body">
                <h3>Send Money</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <form action="{{route('frontend.wallet.sendmoneytouser', Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
                @method('POST')
                @csrf
                <input type="hidden" value="{{Auth::user()->id}}" name="form_user_id">
                <input type="hidden" value="{{Auth::user()->phone}}" name="from_phone">
                <input type="hidden" value="{{Auth::user()->email}}" name="from_email">
                    
                    
                    <div class="form-group">
                        <label for="facebook"> Reciver Account Identification Number</label>
                        <input type="text" name="to_user_id" value="">
                    </div>
                    <div class="form-group">
                        <label for="facebook">Reciver Mobile</label>
                        <input type="text" name="to_phone" value="">
                    </div>
                    <div class="form-group">
                        <label for="facebook">Reciver Email </label>
                        <input type="text" name="to_email" value="">
                    </div>
                    <div class="form-group">
                        <label for="facebook">Amount</label>
                        <input type="number" name="amount" value="">
                    </div>
                <div class="form-group">
                    <input type="submit" value="Update" class="btn btn-primary" onClick="conFirm()">
                </div>
            </form>
            </div>
        </div>
    </div>

@endsection

