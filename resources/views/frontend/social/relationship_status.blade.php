@extends('master.frontend_master.master')

@section('title')
    Profile Relationship Status Update
@endsection

@section('main-body')

<form action="{{route('frontend.profile.prelationship_statusUpdate', Auth::user()->id)}}" method="POST">
    @method('POST')
    @csrf
    <div class="form-group">
        <label for="facebook">Relationship Status</label>
        <input type="text" name="relationship_status" value="{{$relationship_status->relationship_status}}">
        
    </div>
    

    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-primary">
    </div>
</form>



@endsection