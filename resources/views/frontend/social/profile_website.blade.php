@extends('master.frontend_master.master')

@section('title')
    Profile Website Update
@endsection

@section('main-body')

<form action="{{route('frontend.profile.pWebsiteUpdate', Auth::user()->id)}}" method="POST">
    @method('POST')
    @csrf
    <div class="form-group">
        <label for="facebook">Website</label>
        <input type="text" name="website" value="{{$website->website}}">
        
    </div>
    

    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-primary">
    </div>
</form>



@endsection 