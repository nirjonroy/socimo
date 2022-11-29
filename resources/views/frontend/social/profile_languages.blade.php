@extends('master.frontend_master.master')

@section('title')
    Profile language
@endsection

@section('main-body')

<form action="{{route('frontend.profile.profileLanguageUpdate', Auth::user()->id)}}" method="post">
    @method('post')
    @csrf
    <div class="form-group">
        <label for="language_one">Language One</label>
        <input type="text" name="language_one" class="form-group" value="{{$profile_language->language_one}}">
    </div>
    <div class="form-group">
        <label for="language_two">Language Two</label>
        <input type="text" name="language_two" class="form-group" value="{{$profile_language->language_two}}">
    </div>
    <div class="form-group">
        <label for="language_three">Language Three</label>
        <input type="text" name="language_three" class="form-group" value="{{$profile_language->language_three}}">
    </div>
    <div class="form-group">
        <input type="submit" value="Submit" class="btn btn-primary">
    </div>
</form>



@endsection 