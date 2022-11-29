@extends('master.frontend_master.master')

@section('title')
    Profile language
@endsection

@section('main-body')

<form action="{{route('frontend.profile.pReligion', Auth::user()->id)}}" method="POST">
    @method('POST')
    @csrf
    <div class="form-group">
        <label for="language_one">Religion</label>
        <input type="text" name="religion" class="form-group" value="{{$Religion->religion}}">
    </div>
    <div class="form-group">
        <input type="submit" value="Submit" class="btn btn-primary">
    </div>
</form>


@endsection 