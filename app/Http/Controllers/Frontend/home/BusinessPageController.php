<?php

namespace App\Http\Controllers\Frontend\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use App\BusinessPage;
use App\vendorCategory;
use App\vendorProduct;
use App\productBrand;
use App\businessSlider;
use App\BusinessSetting;
use Hash;
use DB;
use App\Cart;
class BusinessPageController extends Controller
{
    
    

    public function index()
    {
        
        return view('frontend.business.index');
    }
    public function create(Request $request)
    {   
        $data = Validator::make($request->all(),[
            'BusinessName'=>'required|string|unique:business_pages',
            'BusinessSubtitle'=>'required|string',
            'language'=>'required|string',
            'businessCategory'=>'required|string',
            'description'=>'required',
            'licence_id'=>'required|string',
            'userPhoto'=>'required|image|mimes:jpeg, png,jpg|max:820px|dimensions:max_height = 500, max_width = 400',
            'businessPhoto'=>'required|image|mimes:jpeg, png,jpg|max:820px|dimensions:max_height = 500, max_width = 400',
            'licenceType'=>'required|string',
            'trade_licence'=>'required|string',
            'password'=>'required|min:6',
            'email'=>'required|email|unique:business_pages',
            
        ]);
        if($data->fails()){
            return response()->json([
                    'error'=> true,
                    'msg' => $data->errors(),
            ]);
        }
        else {
            $user_id = Auth::user()->id;
            $BusinessName = $request->BusinessName;
            $BusinessSubtitle = $request->BusinessSubtitle;
            $language = $request->language;
            $businessCategory = $request->businessCategory;
            $businessSubCategory = $request->businessSubCategory;
            $description = $request->description;
            $licence_id = $request->licence_id;
            $licenceType = $request->licenceType;
            $trade_licence = $request->trade_licence;
            $password = Hash::make($request->password);
            
            $userPhoto= time().'.'. $request->userPhoto->extension();
            $request->userPhoto->move(public_path('busineesUser'), $userPhoto);
            $pathuser = "/busineesUser/".$userPhoto;

            $businessPhoto= time().'.'. $request->businessPhoto->extension();
            $request->businessPhoto->move(public_path('busineesLogo'), $businessPhoto);
            $path = "/busineesLogo/".$businessPhoto;

            $post = new BusinessPage();
            $post->BusinessName = $BusinessName;
            $post->user_id = $user_id;
            $post->BusinessSubtitle = $BusinessSubtitle;
            $post->userPhoto = $pathuser;
            $post->businessPhoto = $path;
            $post->language = $language;
            $post->businessCategory = $businessCategory;
            $post->businessSubCategory = $businessSubCategory;
            $post->description = $description;
            $post->licence_id = $licence_id;
            $post->licenceType = $licenceType;
            $post->trade_licence = $trade_licence;
            $post->password = $password;
            // dd($post);
            $post->save();
            return view('frontend.Business.main');

        }
        

    }
    public function BusinessSlideradd(Request $request, $id)
    {
        $BusinessDetails = BusinessPage::where('id', $id)->first();
        return view('frontend.Business.admin.addSlider', compact('BusinessDetails'));
    }

    public function BusinessSliderStore(Request $request)
    {
        $image_name= time().'.'. $request->image->extension();
        $request->image->move(public_path('slider_image'), $image_name);
        $path = "/slider_image/".$image_name;

        $slider = new businessSlider();
        $slider->business_id = $request->business_id;
        $slider->content = $request->content;
        $slider->discount = $request->discount;
        $slider->title = $request->title;
        
        
        $slider->image = $path;

        $slider->save();
        return redirect()->back();

    }

    public function BusinessSliderList(Request $request, $id)
    {
        $BusinessDetails = BusinessPage::where('id', $id)->first();
        $Sliders = businessSlider::where('business_id', $id)->get();
        return view('frontend.business.admin.vendorSliderList', compact('Sliders', 'BusinessDetails'));
    }
    public function page($id)
    {
        $Businesspag = BusinessPage::where('id', $id)->first();
        $business_category = VendorCategory::where('business_id', $id)->get();
        $business_brand = productBrand::where('business_id', $id)->get();
        $Sliders = businessSlider::where('business_id', $id)->get();
        // dd($business_category);
        $user = Auth()->user();
        $count = Cart::where('phone', $user->phone)->count();
        return view('frontend.business.main', compact('Businesspag', 'business_category', 'count', 'business_brand', 'Sliders'));

    }
    public function shop(Request $request, $id)
    {
        $Businesspag = BusinessPage::where('id', $id)->first();
        $business_category = VendorCategory::where('business_id', $id)->get();
        $products = vendorProduct::where('business_id', $id)->paginate(15);
        // return "ok";
        return view('frontend.business.shope', compact('Businesspag', 'business_category', 'products'));
    }
    public function businessAdmin($id)
    {
        $business_id = BusinessPage::where('id', $id)->first();
        // dd($business_id);
        return view('frontend.business.admin_login', compact('business_id'));
    }
    
    // public function businessAdminLogin(Request $request, $id)
    // {
    //     $request->validate([
    //         'email'=>'required',
    //         'password'=>'required',
    //     ]);
    //     $credentials = $request->only('email', 'password');
    //     // dd($credentials);
    //     if(Auth::attempt($credentials)){

    //         return redirect()->to('business/dashboard/'. $id);
    //     }
    //     return "sorry";
       
    // }


    public function businessAdminLogin(Request $request, $id)
    {
        $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);  
        $user = BusinessPage::where('email', '=', $request->email)->first();
        if($user){
                if(Hash::check($request->password, $user->password)){
                        $request->session()->put('id', $user->id);
                        return redirect()->to('business/dashboard/'. $id);
                }
                else{
                    return back()->with('fail', 'This email is not registered');
                }
        }

        else{
            return"fail, This email is not registered";
        }

    }


    public function dashboard(Request $request, $id)
    {
        $business_id = $id;
        $BusinessDetails = BusinessPage::where('id', $id)
                            ->first();
                            $totalProduct = DB::table('vendor_products')
                                            ->where('business_id', $BusinessDetails->id)->count();
                                            // dd($totalProduct);
        // dd($BusinessDetails);
        // return $business_id;
        return view('frontend.business.admin.index', compact('BusinessDetails', 'totalProduct'));
    }
    public function BusiLogout(Request $request)
    {
        Auth::logout();
        return redirect('home/profile/{id}');
    }

    public function vendorAdminProfile(Request $request, $id)
    {
        $BusinessPage = BusinessPage::where('id', $id)->first();
        return view('frontend.business.admin.adminProfile', compact('BusinessPage'));
    }
    public function BusinessCategoryList(Request $request, $id)
    {   
        $BusinessDetails = BusinessPage::where('id', $id)->first();
        $Categories = VendorCategory::where('business_id', $id)->get();
        return view('frontend.business.admin.vendorCategoryList', compact('Categories', 'BusinessDetails'));
    }
    public function BusinessCategoryDelete(Request $request, $id, $business_id)
    {
        VendorCategory::where(['id' => $id, 'business_id'=>$business_id])->delete();
        return redirect()->back();
    }
    public function BusinessCategory(Request $request, $id)
    {
        $BusinessDetails = BusinessPage::where('id', $id)->first();
        // dd($BusinessCategory);
        return view('frontend.business.admin.category', compact('BusinessDetails'));
    }
    public function BusinessCategoryStore(Request $request)
    {
        $image_name= time().'.'. $request->image->extension();
        $request->image->move(public_path('category_image'), $image_name);
        $path = "/category_image/".$image_name;

        $Category = new VendorCategory();
        $Category->business_id = $request->business_id;
        $Category->categoryName = $request->categoryName;
        
        
        $Category->image = $path;

        $Category->save();
        return redirect()->back();

    }
    
    public function BusinessProduct(){
        
    }

    public function ProductByCategory(Request $request, $id, $business_id)
    {
        $productCat = VendorCategory::join('vendor_products', 'vendor_products.vendorCategoryId', 'vendor_categories.id')
                    ->where('vendor_categories.business_id', $business_id)
                    ->select('vendor_products.*', 'vendor_categories.categoryName')->get();
                    // dd($productCat);
        $Businesspag = BusinessPage::where('id', $business_id)->first();
        $business_category = VendorCategory::where('business_id', $business_id)->get();
                    return view('frontend.business.catByProduct', compact('productCat', 'Businesspag', 'business_category'));                   
    }

    public function BusinessBrand(Request $request, $id)
    {
        $BusinessDetails = BusinessPage::where('id', $id)->first();
        // dd($BusinessCategory);
        return view('frontend.business.admin.brandAdd', compact('BusinessDetails'));
    }

    public function BusinessBrandStore(Request $request)
    {
        $image_name= time().'.'. $request->image->extension();
        $request->image->move(public_path('brand_image'), $image_name);
        $path = "/brand_image/".$image_name;

        $brand = new productBrand();
        $brand->business_id = $request->business_id;
        $brand->brandName = $request->brandName;
        
        
        $brand->image = $path;

        $brand->save();
        return redirect()->back();

    }

    public function BusinessBrandList(Request $request, $id)
    {   
        $BusinessDetails = BusinessPage::where('id', $id)->first();
        $Brands = productBrand::where('business_id', $id)->get();
        return view('frontend.business.admin.vendorBrandList', compact('Brands', 'BusinessDetails'));
    }

    public function BusinessThemeSeeting(Request $request, $id)
    {
        $BusinessDetails = BusinessPage::where('id', $id)->first();
        $ThemeAsset = BusinessSetting::where('business_id', $id)->get();
        
        return view('frontend.business.admin.themeAsset', compact('ThemeAsset', 'BusinessDetails'));
    }
    public function BusinessThemeSeetingStore(Request $request, $id)
    {
        $ThemeSettingStore = new BusinessSetting();
        $ThemeSettingStore->business_id = $request->business_id;
        $ThemeSettingStore->headerBackground = $request->headerBackground;
        $ThemeSettingStore->sliderBackground = $request->sliderBackground;
        $ThemeSettingStore->categoryBackground = $request->categoryBackground;
        $ThemeSettingStore->categorycolor = $request->categorycolor;
        $ThemeSettingStore->brandBackground = $request->brandBackground;
        $ThemeSettingStore->brandcolor = $request->brandcolor;
        $ThemeSettingStore->footerBackground = $request->footerBackground;
        $ThemeSettingStore->footercolor = $request->footercolor;
        // dd($ThemeSettingStore);
        $ThemeSettingStore->save();
        return redirect()->back();
    }
    
}
