@extends('frontend.Business.page')
@section('business_home')

@foreach($productCat as $pcat)
    {{$pcat->vendorCategoryId}}
@endforeach

echo print_r($productCat);
@endsection