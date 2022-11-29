@extends('frontend.Business.admin.master_business')

@section('admin-body')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h2>Manage Orders</h2>

<table border="2" class="table" style="margin-top:188px;">
    <tr>
        
        <td colspan="3"><h2 style="text-align:center">All Category</h2></td>
    </tr>
    <tr style="background:black; color:white; font-weight:bolder">
        <td>Category Name</td>
        <td>Category Image</td>
        <td>Action</td>
    </tr>
    @foreach($Categories as $category)
    <tr>
        <td>{{$category->categoryName}}</td>
        <td>
            <img src="{{asset($category->image)}}" alt="" width="50px" height="50px">
        </td>
        
        <td>
           <a href="{{url('Business/Category-delete', ['id' => $category->id, 'business_id'=>$BusinessDetails->id])}}" onClick="return confirm('Are You Sure Want to delete this')" class="btn btn-danger">Delete</a>
           
        </td>
    </tr>
    @endforeach
</table>
        </div>
    </div>
</div>
@endsection