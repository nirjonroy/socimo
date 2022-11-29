@extends('master.backend_master.dashboard')

@section('dashboard-body')
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-7">
            
            <table class="table"  style="margin-top:130px" border>
            <tr>
                <td  colspan="3"><h3>Bank Details</h3></td>
                <td colspan="3">
                    <a class="btn btn-success" href="{{url('deshboard/add-account')}}">
                        Add Account
                    </a>
                </td>
            </tr>    
            <tr style="background:black; color:white; font-weight:bold">
                    <td>id</td>
                    <td>Bank Name</td>
                    <td>Account Holder Name</td>
                    <td>Sort Code</td>
                    <td>Account Number</td>
                    <td>IBAN</td>
                    <td>Country</td>
                    <td>Refference</td>
                    <td>Account Balance</td>
                    
                </tr>
                @foreach($banks as $bank)
               <tr>
                    <td>{{$bank->id}}</td>
                    <td>{{$bank->bankName}}</td>
                    <td>{{$bank->accountHolder}}</td>
                    <td>{{$bank->sortCode}}</td>
                    <td>{{$bank->accountNumber}}</td>
                    <td>{{$bank->IBAN}}</td>
                    <td>{{$bank->country}}</td>
                    <td>{{$bank->refference}}</td>
                    <td>{{$bank->accountBalance}}</td>
               </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>


@endsection