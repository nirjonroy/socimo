@extends('master.frontend_master.master')

@section('title')
    Profile School Update
@endsection

@section('main-body')

<form action="{{route('frontend.profile.pSchoolUpdate', Auth::user()->id)}}" method="POST">
    @method('POST')
    @csrf
    <div class="form-group">
        <label for="facebook">School Name</label>
        <input type="text" name="school" value="{{$school->school}}">
        
    </div>
    <div class="form-group">
        <label for="facebook">College start</label>
        <input type="date" name="school_start" value="{{$school->school_start}}">
        
    </div>
    <div class="form-group">
        <label for="facebook">End Date</label>
        <input type="date" name="school_start" value="{{$school->school_end}}">
        
    </div>
    

    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-primary">
    </div>
</form>



@endsection