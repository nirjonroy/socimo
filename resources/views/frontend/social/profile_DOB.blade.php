@extends('master.frontend_master.master')

@section('title')
    Profile DOB Update
@endsection

@section('main-body')

<form action="{{route('frontend.profile.pDOBUpdate', Auth::user()->id)}}" method="POST">
    @method('POST')
    @csrf
    <div class="form-group">
        <label for="facebook">DOB</label>
        <input type="date" name="DOB" value="{{$DOB->DOB}}">
        
    </div>
    

    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-primary">
    </div>
</form>



@endsection 