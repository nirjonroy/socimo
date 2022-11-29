@extends('master.frontend_master.master')

@section('title')
Friend Request  
@endsection

@section('main-body')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-4">

            @if(session()->has('adfr'))
                <p class="alert-success alert">
                    {{session()->get('adfr')}}
                </p>
            @endif

            @if(session()->has('delfr'))
                <p class="alert-success alert">
                    {{session()->get('delfr')}}
                </p>
            @endif
            <div class="panel-default panel">
                <div class="panel-body">
                    <div class="panel panel-heading" style="text-align:center; font-size: 20px; background:purple; ">
                        
                        <h1 style="color:white">Link Request</h1>
                    </div>
                    <div class="wall" style="background:#dba3a3; color:white; padding:10px">
                  

                    @foreach($showfriend as $sn)
                    
                    <?php 
                        $check = DB::table('add_friends')->where('status', 1)->get();
                            if($check == true){
                                
                          
                    ?>


                    @if($sn == null)
                        <h1 style="color:white; background:blue">No data</h1>
                    @endif
                      
                     <img src="{{asset($sn->profilePhoto)}}" alt="" width="100px" height="100px">
                        <h3 style="color:white">{{$sn->name}}</h3>
                        <p style="color:black">{{$sn->occupation}}</p>
                        <a href="{{url('confirm'.$sn->id.'/')}}"><span class="btn btn-primary">Confirm</span></a>
                        <a href="{{url('deletefriendrequest'.$sn->id.'/')}}"><span class="btn btn-danger">Delete </span></a>
                        <br><br>
                         
                        <?php 
                            }
                        ?>
                   

                        @endforeach
                          
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection