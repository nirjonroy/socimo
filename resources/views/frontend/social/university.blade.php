@extends('master.frontend_master.master')

@section('title')
    Profile University Update
@endsection

@section('main-body')

<form action="{{route('frontend.profile.pUniversityUpdate', Auth::user()->id)}}" method="POST">
    @method('POST')
    @csrf
    <div class="form-group">
        <label for="facebook">University Name</label>
        <input type="text" name="university" value="{{$university->university}}">
        
    </div>
    <div class="form-group">
        <label for="facebook">university start</label>
        <input type="date" name="university_start" value="{{$university->university_start}}">
        
    </div>
    <div class="form-group">
        <label for="facebook">End Date</label>
        <input type="date" name="university_start" value="{{$university->university_end}}">
        
    </div>
    

    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-primary">
    </div>
</form>



@endsection