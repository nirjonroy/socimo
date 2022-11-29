@extends('master.frontend_master.master')

@section('title')
    search 
@endsection

@section('main-body')


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

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
                   @if($searchname->count()>0)
                    @foreach($searchname as $sn)

                    <?php 
                        $check = DB::table('add_friends')
                        ->where('user_requested', Auth::User()->id)
                        ->where('acceptor', $sn->id)
                        ->where('status', 1)->first();
                    //    echo print_r($check);
                    //     echo $check;
                         

                  ?>

                

                    @if($sn == null)
                        <h1 style="color:white; background:blue">No data</h1>
                    @endif
                      
                     <img src="{{asset($sn->profilePhoto)}}" alt="" width="100px" height="100px">
                        <h3 style="color:white">{{$sn->name}}</h3>
                        <p style="color:black">{{$sn->occupation}}</p>
                       <?php if($check == false){  
                            ?>

                    
                        <a href="{{url('addfriend'.$sn->id.'/')}}"><span class="btn btn-primary">Link </span></a>
                        <a href="{{url('deletefriend'.$sn->id.'/')}}"><span class="btn btn-danger">Delete Link</span></a>

                        <?php
                            }
                            else{ ?>
                                <h2>Already Sent Request</h2>
                            <?php } 
                        ?>
                    <br><br>
                   
                        @endforeach
                        @else
                        <h2>No Request</h2>
                        @endif
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection