<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theme Asset</title>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{asset('business_assets/css/font-awesome.css')}}">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('business_assets/css/flag-icon.css')}}">

    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('business_assets/css/icofont.css')}}">

    <!-- Prism css-->
    <link rel="stylesheet" type="text/css" href="{{asset('business_assets/css/prism.css')}}">

    <!-- Chartist css -->
    <link rel="stylesheet" type="text/css" href="{{asset('business_assets/css/chartist.css')}}">

    <!-- vector map css -->
    <link rel="stylesheet" type="text/css" href="{{asset('business_assets/css/vector-map.css')}}">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('business_assets/css/bootstrap.css')}}">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('business_assets/css/admin.css')}}">
</head>
<body>
    <div class="row">
        <div class="col-md-3">
           <h2>Theme Settings</h2> 
        </div>
        <div class="col-md-8">
        <form action="{{url('Business/theme-setting-store', $BusinessDetails->id)}}" method="post" enctype="multipart/form-data">
      @if(Session::has('success'))
    <div class="alert alert-success">{{Session::get('success')}}</div>
    @endif
    @if(Session::has('fail'))
    <div class="alert alert-danger">{{Session::get('fail')}}</div>
    @endif
      @csrf  
      @method('POST')
      <div class="col-md-6">
        <input type="text" name="business_id" value="{{$BusinessDetails->id}}">

        <input type="color" name="headerBackground"  class="form-control">
        <input type="color" name="sliderBackground"  class="form-control">
        <input type="color" name="categoryBackground"  class="form-control">
        <input type="color" name="categorycolor"  class="form-control">
        <input type="color" name="brandBackground"  class="form-control">
        <input type="color" name="brandcolor"  class="form-control">
        <input type="color" name="footerBackground"  class="form-control">
        <input type="color" name="footerBackground"  class="form-control">
        <input type="color" name="footercolor"  class="form-control">
        
        
        <input type="submit" value="save" class="btn btn-success">
        </div>
      </form> 
        </div>
    </div>
    
</body>
</html>