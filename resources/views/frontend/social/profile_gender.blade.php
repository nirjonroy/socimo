@extends('master.frontend_master.master')

@section('title')
    Profile Gender
@endsection

@section('main-body')

<form action="{{route('frontend.profile.pGenderUpdate', Auth::user()->id)}}" method="POST">
    @method('POST')
    @csrf
    <div class="form-group">
        <label for="facebook">Gender</label>
        <input type="text" name="gender" value="{{$gender->gender}}">
        
    </div>
    

    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-primary">
    </div>
</form>



@endsection 