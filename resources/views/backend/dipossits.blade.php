@extends('master.backend_master.dashboard')

@section('dashboard-body')
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-7">
            
            <table class="table"  style="margin-top:130px" border>
            <tr>
                <td  colspan="11"><h3>Dipossit Request</h3></td>
                
            </tr>    
            <tr style="background:black; color:white; font-weight:bold">
                    <td>id</td>
                    <td>User Name</td>
                    <td>User Phone</td>
                    <td>User Email </td>
                    <td>Payment Method </td>
                    <td>Currency</td>
                    <td>Amount</td>
                    <td>Transaction Id</td>
                    <td>Proven Photo</td>
                    <td>Status</td>
                    <td>Action</td>
                    
                </tr>
                @foreach($Depossits as $Depossit)
               <tr>
                    <td>{{$Depossit->id}}</td>
                    <td>{{$Depossit->usname}}</td>
                    <td>{{$Depossit->usphone}}</td>
                    <td>{{$Depossit->usemail}}</td>
                    <td>{{$Depossit->bankName}}</td>
                    <td>{{$Depossit->currency}}</td>
                    <td>{{$Depossit->amount}}</td>
                    <td>{{$Depossit->txId}}</td>
                    <td><a href="{{asset($Depossit->txPhoto)}}"> <img src="{{asset($Depossit->txPhoto)}}" alt="" width="100px" height="100px"></a></td>
                    <td>{{$Depossit->status}}</td>
                    <td>
                        <a href="{{url('approved-depossit', $Depossit->id)}}" class="btn btn-Success">Approved</a>
                        <a href="{{url('reject-depossit', $Depossit->id)}}" class="btn btn-Danger">Reject</a>
                </td>
               </tr>
               @endforeach
            </table>
        </div>
    </div>
</div>


@endsection