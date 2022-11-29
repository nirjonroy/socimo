@extends('master.frontend_master.master')

@section('title')
    Profile Name & Email Update
@endsection

@section('main-body')

<form action="{{route('frontend.profile.pProfilePhoto', Auth::user()->id)}}" method="POST" enctype="multipart/form-data" >
    @method('POST')
    @csrf
    <div class="form-group">
        <label for="facebook"> Select Profile Picture </label>
        <input type="file" name="profilePhoto" value="{{$profilePhoto->profilePhoto}}">
        
    </div>
    

    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-primary">
    </div>
</form>



@endsection