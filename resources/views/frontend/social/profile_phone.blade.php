@extends('master.frontend_master.master')

@section('title')
    Profile language
@endsection

@section('main-body')

<form action="{{route('frontend.profile.pPhoneUpdate', Auth::user()->id)}}" method="POST">
    @method('POST')
    @csrf
    <div class="form-group">
        <label for="language_one">Phone</label>
        <input type="text" name="phone" class="form-group" value="{{$phone->phone}}">
    </div>
    <div class="form-group">
        <input type="submit" value="Submit" class="btn btn-primary">
    </div>
</form>


@endsection 