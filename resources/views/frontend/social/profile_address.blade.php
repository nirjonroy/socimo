@extends('master.frontend_master.master')

@section('title')
    Profile Address
@endsection

@section('main-body')

<form action="{{route('frontend.profile.pAddressUpdate', Auth::user()->id)}}" method="POST">
    @method('POST')
    @csrf
    <div class="form-group">
        <label for="facebook">Address</label>
        <textarea name="address" id="address" cols="30" rows="10" value="">{{$address->address}}</textarea>
        
    </div>
    

    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-primary">
    </div>
</form>



@endsection 