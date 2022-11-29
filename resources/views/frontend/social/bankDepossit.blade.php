@extends('master.frontend_master.master')
@section('title')
    select bank and pay 
@endsection
@section('main-body')

    <div class="container">
        <div class="row">
            <div class="com-md-6">
                <h2>Bank Details</h2>
                @foreach($banks as $bank)
                <div class="jumbotron">
                <p>Bank Name : {{$bank->bankName}}</p>
                    <p>Account Number : {{$bank->accountNumber}}</p>
                    <p>Sort Code : {{$bank->sortCode}}</p>
                    <p>IBAN : {{$bank->country}}</p>
                </div>
                
                @endforeach
            </div>
            <div class="com-md-6" style="margin-left:10%"> 
            <form action="{{route('frontend.wallet.bankdepossitadd', Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
                @method('POST')
                @csrf
                <input type="hidden" value="{{Auth::user()->id}}" name="userId">
                <div class="form-group">
                    <label for=""> Select Bank </label>
                    <select name="paymentMethod" id="">
                        @foreach($banks as $bankd)
                        <option value="{{$bankd->id}}" class="form-control">{{$bankd->bankName}}</option>
                        @endforeach
                    </select>
                    </div>
                    <div class="form-group">
                    <label for=""> Select Currency </label>
                    <select name="currency" id="">
                        
                        <option value="Us Doller" class="form-control">Us Doller</option>
                        <option value="euro" class="form-control">Euro</option>
                        <option value="BDT" class="form-control">Bangladeshi Taka</option>
                        <option value="Indian Rupee" class="form-control">Indian Rupee</option>
                        <option value="Pakistani Rupee" class="form-control">Pakistani Rupee</option>
                        
                    </select>
                    </div>    
                    <div class="form-group">
                        <label for="facebook">Amount</label>
                        <input type="number" name="amount" value="">
                    </div>
                    
                    <div class="form-group">
                        <label for="facebook">Transction Id</label>
                        <input type="text" name="txId" value="">
                    </div>
                    <div class="form-group">
                        <label for="facebook">Transction Screenshoot</label>
                        <input type="file" name="txPhoto" value="">
                    </div>
                
                

                <div class="form-group">
                    <input type="submit" value="Update" class="btn btn-primary" onClick="conFirm()">
                </div>
            </form>
            </div>
        </div>
    </div>

    <script>
        function conFirm(){
            confirm("please Check Everything");
        }
    </script>
@endsection