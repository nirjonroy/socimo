@extends('master.backend_master.dashboard')

@section('dashboard-body')
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-7">
            
            <table class="table"  style="margin-top:130px" border>
            <tr>
                <td  colspan="6"><h3>User Post Details</h3></td>
            </tr>    
            <tr style="background:black; color:white; font-weight:bold">
                    <td>id</td>
                    <td>User Name</td>
                    <td>Image</td>
                    <td>Caption</td>
                    <td>Cretated Date</td>
                    <td>Update Date</td>
                    
                </tr>
                @foreach($UserPost as $UP)
                <tr>
                    
                    <td>{{$UP->id}}</td>
                    <td>{{$UP->name}}</td>
                    @foreach(explode('|', $UP->image)  as $images)
                    <td>
                        <a href="../public/image_upload/{{($images)}}">
                            <img src="../public/image_upload/{{($images)}}" alt="">
                        </a> 
                    </td>
                    @endforeach
                    <td>{{$UP->caption}}</td>
                    <td>{{$UP->created_at}}</td>
                    <td>{{$UP->updated_at}}</td>
                    
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>


@endsection