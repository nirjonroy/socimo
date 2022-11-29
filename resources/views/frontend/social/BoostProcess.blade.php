@extends('master.frontend_master.master')

@section('title')
    Start Boosting
@endsection

@section('main-body')

<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-9">
            <form action="{{route('frontend.profile.boostInfo')}}" method="POST">  
                @method('POST')
                @csrf
                <input type="hidden" value="{{Auth::user()->id}}" name="userId">
                <div class="form-group">
                    <label for=""> Select Your Business Page <span style="color:red">*</span> </label>
                    <select name="businessPageId" id="">
                        @foreach($BusinessPages as $Bpg)
                        <option value="{{$Bpg->id}}" class="form-control">{{$Bpg->BusinessName}}</option>
                        @endforeach
                    </select>
                    </div>
                    <div class="form-group">
                    <label for=""> Select Country </label>
                    <select name="country" id="">
                        
                        <option value="Bangladesh" class="form-control">Bangladesh</option>
                        <option value="India" class="form-control">India</option>
                        <option value="Pakistan" class="form-control">Pakistan</option>
                        <option value="England" class="form-control">England</option>
                    </select>
                    </div>  

                    <div class="form-group">
                        <label for="facebook">For <span style="color:red">(*per day $1)</span></label>
                        <select name="for" id="">
                        
                        <option value="2" class="form-control"> 2 Days</option>
                        <option value="5" class="form-control">5 Days</option>
                        <option value="7" class="form-control">7 Days</option>
                        <option value="15" class="form-control">15 Days</option>
                    </select>
                    </div>
                    
                   
                
                

                <div class="form-group">
                    <input type="submit" value="Submit" class="btn btn-primary" onClick="conFirm()">
                </div>
            </form>
        </div>
    </div>
</div>

@endsection