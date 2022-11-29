@extends('master.frontend_master.master')

@section('title')
    Profile Profession Update
@endsection

@section('main-body')

<form action="{{route('frontend.profile.pProfessionUpdate', Auth::user()->id)}}" method="POST">
    @method('POST')
    @csrf
    <div class="form-group">
        <label for="facebook">Company Name</label>
        <input type="text" name="occupation" value="{{$profession->occupation}}">
        
    </div>
    <div class="form-group">
        <label for="facebook">Position</label>
        <input type="text" name="position" value="{{$profession->position}}">
        
    </div>
    <div class="form-group">
        <label for="facebook">Start Date</label>
        <input type="date" name="occupation_start" value="{{$profession->occupation_start}}">
        
    </div>
    <div class="form-group">
        <label for="facebook">End Date</label>
        <input type="date" name="occuption_end" value="{{$profession->occuption_end}}">
        
    </div>

    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-primary">
    </div>
</form>



@endsection