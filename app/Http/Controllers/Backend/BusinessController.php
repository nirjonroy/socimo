<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\BusinessPage;
use App\businessSlider;
use App\UserPost;
use DB;
class BusinessController extends Controller
{
    public function index()
    {
        $allBusinessPages = BusinessPage::join('users', 'users.id', 'business_pages.user_id')
                                         ->join('order_details', 'order_details.businessId', 'business_pages.id')
                                        ->select('business_pages.id', 
                                        'business_pages.BusinessName',
                                        'business_pages.BusinessSubtitle',
                                        'business_pages.userPhoto',
                                        'business_pages.userPhoto',
                                        'business_pages.businessPhoto',
                                        'business_pages.email',
                                        'business_pages.phone',
                                        'business_pages.licence_id',
                                        'business_pages.licenceType',
                                        'business_pages.licenceType',
                                        'business_pages.trade_licence',
                                        'business_pages.language',
                                        'business_pages.businessCategory',
                                        'business_pages.business_type',
                                        'business_pages.businessSubCategory',
                                        'business_pages.description',
                                        'business_pages.tarms_condition',
                                        'business_pages.status',
                                        'users.name as userName', 
                                        'users.id as userId', 
                                        DB::raw('SUM(order_details.totalprice) as total_price'),
                                        DB::raw('SUM(order_details.totalprice* 6 / 100) as total_comission'))
            
                                        ->groupby('business_pages.id', 
                                        'business_pages.BusinessName',
                                        'business_pages.BusinessSubtitle',
                                        'business_pages.userPhoto',
                                        'business_pages.userPhoto',
                                        'business_pages.businessPhoto',
                                        'business_pages.email',
                                        'business_pages.phone',
                                        'business_pages.licence_id',
                                        'business_pages.licenceType',
                                        'business_pages.licenceType',
                                        'business_pages.trade_licence',
                                        'business_pages.language',
                                        'business_pages.businessCategory',
                                        'business_pages.business_type',
                                        'business_pages.businessSubCategory',
                                        'business_pages.description',
                                        'business_pages.tarms_condition',
                                        'business_pages.status',
                                        'users.name', 
                                        'users.id')
                                        ->get();
                                        // dd($allBusinessPages);
        return view('backend.businessman', compact('allBusinessPages'));
    }
    public function activeVendor(Request $request, $id)
    {
        BusinessPage::where('id', $id)
                    ->update(['status' => 1]);
                    return redirect()->back();

    }

    public function deactiveVendor(Request $request, $id)
    {
        BusinessPage::where('id', $id)
                    ->update(['status' => 0]);
                    return redirect()->back();

    }

    public function viewVendor(Request $request, $id)
    {
        $viewVendor = BusinessPage::where('id',$id)->first();

                    dd($viewVendor);
                    return view('backend.viewBusinessman');
    }
    public function trashVendor($id)
    {
        BusinessPage::where('id', $id)->delete();
        // dd($deleteVendor);
        return redirect()->back();
    }

    public function sliders()
    {
        $BusinessSliders = businessSlider::join('business_pages', 'business_pages.id', 'business_sliders.business_id')
                                            ->select('business_pages.BusinessName', 'business_sliders.*')
                                            ->get();
        return view('backend.viewBusinessSlider', compact('BusinessSliders'));
    }

    public function userPost()
    {
        $UserPost = UserPost::join('users', 'users.id', 'user_posts.userId')
                                    ->select('users.name', 'user_posts.*')
                                    ->get();

        // dd($UserPost);
        return view('backend.viewUserPost', compact('UserPost'));
    }
}
