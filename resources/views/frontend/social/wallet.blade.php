@extends('master.frontend_master.master')

@section('title')
    Wallet
@endsection

@section('main-body')

<div class="container">
    <div class="row">
        
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-body"><h2>Wallet</h2></div> 
            </div>

            <div class="panel panel-default" style="background: lightgreen; color:white; width: 100%; height: 128px;text-align: center; padding:25px; margin-bottom:25px;">
                <div class="panel-body"><h3>Your Credit : {{$subtotal}}</h3></div> 
            </div>
            <a href="{{url('home/sendMoney/'. Auth::user()->id)}}">
              <div class="panel panel-default" style="background: #d38955; color:white; width: 100%; height: 128px;text-align: center; padding:25px; margin-bottom:25px;">
                <div class="panel-body"><h3>Send Money</h3></div> 
            </div>  
            </a>
               
            <a href="{{url('home/dipossit/'. Auth::user()->id)}}">
            <div class="panel panel-default" style="background: #917bbd; color: white; width: 100%; height: 128px;text-align: center; padding:25px; margin-bottom:25px;">
                <div class="panel-body"><h3>Top Up / Deposit </h3></div> 
            </div>
            </a>
            

        </div>

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-body"><h2>Payments</h2></div> 
            </div>

            <table class="table">
                <tr>
                    <td>id</td>
                    <td>Parpus</td>
                    <td>Amount</td>
                    <td>Status</td>
                    <td>Submission Date</td>
                    <td>Action Date</td>
                </tr>
                @foreach($dipossit as $dip)
                <tr>
                    <td>{{$dip->id}}</td>
                    <td>{{$dip->parpus}}</td>
                    <td>{{$dip->amount}}</td>
                    <td>{{$dip->status}}</td>
                    <td>{{$dip->created_at}}</td>
                    <td>{{$dip->updated_at}}</td>
                </tr>
                @endforeach
            </table>
        </div>
        
    </div>
</div>

@endsection