@extends('master.frontend_master.master')

@section('title')
Create Business Page
@endsection

@section('main-body')
<div class="panel">
	<h1>Create New business</h1>
</div>
<form action="{{route('BusinessPage.create')}}" method="POST" enctype="multipart/form-data">
	@CSRF
	<div class="col-md-2"></div>
	
	<div class="col-md-8">
		<input type="text" name="BusinessName" class="form-control" placeholder="Business Name">
		<input type="text" name="BusinessSubtitle" class="form-control" placeholder="Business Subtitle">
		<input type="file" name="userPhoto" class="form-control" placeholder="User Photo">
		<input type="file" name="businessPhoto" class="form-control" placeholder="Business Logo">
		<input type="text" name="language" class="form-control" placeholder="Language">
		<input type="text" name="licenceType" class="form-control" placeholder="Licence Type">
		<input type="text" name="licence_id" class="form-control" placeholder="Licence Number">
		<input type="text" name="trade_licence" class="form-control" placeholder="Trade Licence">
		<input type="text" name="businessCategory" class="form-control" placeholder="Business Category">
		<input type="text" name="email" class="form-control" placeholder="Email For this Business">
		<input type="text" name="businessSubCategory" class="form-control" placeholder="Business Sub Category">
		<textarea name="description" id="" cols="130" rows="10" placeholder="Add Business Description" class="form-control"></textarea>
		<input type="password" name="password" class="form-control" placeholder="password">
		<input type="submit" class="btn btn-success btn-lg float-center">
	</div>
	<div class="col-md-2"></div>
	
</form>

@endsection