@extends('frontend.Business.admin.master_business')

@section('admin-body')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h2>Sliders</h2>

<table border="2" class="table" style="margin-top:188px;">
    <tr>
        
        <td colspan="5"><h2 style="text-align:center">All Sliders</h2></td>
    </tr>
    <tr style="background:black; color:white; font-weight:bolder">
        <td>Slider Title</td>
        <td>Category Image</td>
        <td>Content one</td>
        <td>Content two</td>
        <td>Action</td>
    </tr>
    @foreach($Sliders as $slider)
    <tr>
        <td>{{$slider->title}}</td>
        <td>
            <img src="{{asset($slider->image)}}" alt="" width="50px" height="50px">
        </td>
        <td>{{$slider->content}}</td>
        <td>{{$slider->discount}}</td>
        <td>
           <a href="{{url('Business/slider-delete', ['id' => $slider->id, 'business_id'=>$BusinessDetails->id])}}" onClick="return confirm('Are You Sure Want to delete this')" class="btn btn-danger">Delete</a>
           
        </td>
    </tr>
    @endforeach
</table>
        </div>
    </div>
</div>
@endsection