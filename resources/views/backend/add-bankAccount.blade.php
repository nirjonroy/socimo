@extends('master.backend_master.dashboard')

@section('dashboard-body')

    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-7" style="margin-top:200px">
                <form action="{{url('adda-Account')}}" method="POST" class="form-controll">
                    @csrf 
                    @method('post')
                    <label for="">Bank Name</label>
                    <input type="text" name="bankName" class="form-controll"><br>
                    <label for="">Account Holder</label>
                    <input type="text" name="accountHolder" class="form-controll"><br>
                    <label for="">Sort Code</label>
                    <input type="text" name="sortCode" class="form-controll"><br>
                    <label for="">IBAN</label>
                    <input type="text" name="IBAN" class="form-controll"><br>
                    <label for="">Account Number</label>
                    <input type="text" name="accountNumber" class="form-controll"><br>
                    <label for="">Country</label>
                    <input type="text" name="country" class="form-controll"><br>
                    <label for="">Refference</label>
                    <input type="text" name="refference" class="form-controll"><br>
                    <label for="">Account Balance</label>
                    <input type="text" name="accountBalance" class="form-controll">
                    <input type="submit">
                </form>

                

            </div>
        </div>
    </div>

@endsection