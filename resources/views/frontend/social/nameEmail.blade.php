@extends('master.frontend_master.master')

@section('title')
    Profile Name & Email Update
@endsection

@section('main-body')

<form action="{{route('frontend.profile.pNameEmailUpdate', Auth::user()->id)}}" method="POST">
    @method('POST')
    @csrf
    <div class="form-group">
        <label for="facebook"> Name</label>
        <input type="text" name="name" value="{{$nameEmail->name}}">
        
    </div>
    <div class="form-group">
        <label for="facebook">Nickname</label>
        <input type="text" name="nickName" value="{{$nameEmail->nickName}}">
        
    </div>
    
    <div class="form-group">
        <label for="facebook">Email</label>
        <input type="text" name="email" value="{{$nameEmail->email}}">
        
    </div>

    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-primary">
    </div>
</form>



@endsection