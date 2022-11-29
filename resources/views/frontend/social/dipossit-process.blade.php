@extends('master.frontend_master.master')

@section('title')
    Select dipossit 
@endsection

@section('main-body')

<div class="container">
    <div class="row">
        
        <div class="col-md-12 col-sm-6">
            <div class="panel panel-default">
                <div class="panel-body"><h2>Select Payment Process</h2></div> 
            </div>
            

            <div class="panel panel-default" style="background: #d38955; color:white; width: 100%; height: 128px;text-align: center; padding:25px; margin-bottom:25px;">
                <div class="panel-body"><h3>Cash</h3></div> 
            </div>   
            <a href="{{url('home/bank-dipossit/'. Auth::user()->id)}}">
            <div class="panel panel-default" style="background: #917bbd; color: white; width: 100%; height: 128px;text-align: center; padding:25px; margin-bottom:25px;">
                <div class="panel-body"><h3>Manual Bank Transfar </h3></div> 
            </div>
            </a>
            

        </div>

        
        
    </div>
</div>



@endsection