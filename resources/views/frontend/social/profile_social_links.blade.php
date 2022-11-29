@extends('master.frontend_master.master')

@section('title')
    Profile language
@endsection

@section('main-body')

<form action="{{route('frontend.profile.socialLinksUpdate', Auth::user()->id)}}" method="POST">
    @method('POST')
    @csrf
    <div class="form-group">
        <label for="facebook">Facebook</label>
        <input type="text" name="facebook" class="form-group" value="{{$Social_links->facebook}}">
    </div>
    <div class="form-group">
        <label for="twitter">Twitter </label>
        <input type="text" name="twitter" class="form-group" value="{{$Social_links->twitter}}">
    </div>
    <div class="form-group">
        <label for="linkedin">Linkedin</label>
        <input type="text" name="linkedin" class="form-group" value="{{$Social_links->linkedin}}">
    </div>
    <div class="form-group">
        <label for="instragram">Instragram</label>
        <input type="text" name="instragram" class="form-group" value="{{$Social_links->instragram}}">
    </div>
    <div class="form-group">
        <label for="youtube">youtube</label>
        <input type="text" name="youtube" class="form-group" value="{{$Social_links->youtube}}">
    </div>
    <div class="form-group">
        <label for="whatsApp">whatsApp</label>
        <input type="text" name="whatsApp" class="form-group" value="{{$Social_links->whatsApp}}">
    </div>

    <div class="form-group">
        <input type="submit" value="Submit" class="btn btn-primary">
    </div>
</form>



@endsection 