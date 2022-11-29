@extends('master.frontend_master.master')

@section('title')
    Profile College Update
@endsection

@section('main-body')

<form action="{{route('frontend.profile.pCollegeUpdate', Auth::user()->id)}}" method="POST">
    @method('POST')
    @csrf
    <div class="form-group">
        <label for="facebook">College Name</label>
        <input type="text" name="college" value="{{$college->college}}">
        
    </div>
    <div class="form-group">
        <label for="facebook">College start</label>
        <input type="date" name="college_start" value="{{$college->school_start}}">
        
    </div>
    <div class="form-group">
        <label for="facebook">End Date</label>
        <input type="date" name="college_start" value="{{$college->school_end}}">
        
    </div>
    

    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-primary">
    </div>
</form>



@endsection