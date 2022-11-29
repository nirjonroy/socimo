<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Product </title>
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
        <h1>Create New Product</h1>
    </div>
  </div>
      <form action="{{route('vandor.BusinessProductStore')}}" method="post" enctype="multipart/form-data">
      @if(Session::has('success'))
    <div class="alert alert-success">{{Session::get('success')}}</div>
    @endif
    @if(Session::has('fail'))
    <div class="alert alert-danger">{{Session::get('fail')}}</div>
    @endif
      @csrf  
      @method('POST')
      <div class="col-md-6">
        <input type="hidden" name="business_id" value="{{$BusinessDetails->id}}">
        <select name="productType" id="">
            <option value="Digital">Digital</option>
            <option value="Physical">Physical</option>
            
        </select>
        <span class="text-danger">@error('productType') {{$message}} @enderror</span>
        <select name="vendorCategoryId" id="">
        <option value="">Select Category</option>
            @foreach($vendorCategory as $v_cat)
            
            <option value="{{$v_cat->id}}">{{$v_cat->categoryName}}</option>
            @endforeach
        </select>
        <select name="vendorBrandId" id="">
        <option value="">Select Brand</option>
            @foreach($vendorBrand as $v_brand)
            
            <option value="{{$v_brand->id}}">{{$v_brand->BrandName}}</option>
            @endforeach
        </select>
        
        <input type="file" name="productImage" placeholder="Business Image" class="form-control">
        <input type="text" name="productName" placeholder="Product Business" class="form-control">
        <span class="text-danger">@error('productName') {{$message}} @enderror</span>
        <textarea name="productDescription" id="" cols="100" rows="10"></textarea>
        @error('productDescription') {{$message}} @enderror
        <input type="text" name="productPrice" placeholder="Product Price" class="form-control">
        @error('productPrice') {{$message}} @enderror
        <input type="text" name="discountPrice" placeholder="Discounted Price" class="form-control">
        @error('discountPrice') {{$message}} @enderror
        <select name="Currency" id="">
            <option value="$">US Doller</option>
            <option value="BDT">Bangladeshi Taka</option>
            <option value="RS">Indian Rupee</option>
            <option value="RS">Pakistani Rupee</option>
            <option value="Euro">Euro</option>
        </select>
        <input type="text" name="productCode" placeholder="Product Code" class="form-control">
        @error('productCode') {{$message}} @enderror
        <input type="text" name="productSize" placeholder="Product Size" class="form-control">
        @error('productSize') {{$message}} @enderror
        <input type="text" name="ProductColor" placeholder="Product Color" class="form-control">
        @error('ProductColor') {{$message}} @enderror
        <input type="text" name="totalProduct" placeholder="Total Product" class="form-control">
        @error('totalProduct') {{$message}} @enderror
        
        <br><br>
        
        <input type="submit" value="save" class="btn btn-success">
        </div>
      </form>  
</body>
</html> 