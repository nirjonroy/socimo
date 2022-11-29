<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Category</title>
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
  <div class="panel panel-default">
    <div class="panel-heading">
        <h1>Create New Category</h1>
    </div>
  </div>
      <form action="{{route('vandor.BusinessCategoryStore')}}" method="post" enctype="multipart/form-data">
      @csrf  
      @method('POST')
      <div class="col-md-6">
        <input type="hidden" name="business_id" value="{{$BusinessDetails->id}}">
        <input type="text" name="categoryName" placeholder="Business Category" class="form-control">
        <input type="file" name="image" placeholder="Business Image" class="form-control">
        <input type="submit" value="save" class="btn btn-success">
        </div>
      </form>  
</body>
</html> 