@extends('master.backend_master.dashboard')

@section('dashboard-body')
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-7">
            <table class="table"  style="margin-top:130px" border>
                <tr style="background:black; color:white; font-weight:bold">
                    <td>id</td>
                    <td>Business Name</td>
                    <td>Business Slider Image</td>
                    <td>Business Slider Title</td>
                    <td>Business Slider Content</td>
                    <td>Business Slider Discount</td>
                    
                </tr>
                @foreach($BusinessSliders as $BS)
                <tr>
                    
                    <td>{{$BS->id}}</td>
                    <td>{{$BS->BusinessName}}</td>
                    <td><img src="{{asset($BS->image)}}" alt=""> </td>
                    <td>{{$BS->title}}</td>
                    <td>{{$BS->discount}}</td>
                    <td>{{$BS->content}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>


@endsection