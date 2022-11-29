<?php

namespace App\Http\Controllers\Frontend\home;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\addFriend;
use App\addBank;
use App\addDipossit;
use App\SendMoney;
use App\BusinessPage;
use App\boostInfo;
use App\UserPost;
use Auth;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        $posts = UserPost::join('add_friends', 'add_friends.acceptor', 'user_posts.userId')
                        
                ->select('user_posts.*', 'add_friends.acceptor')
                        
                        ->get();
        // dd($post);
        return view('frontend.social.home', compact('posts'));
    }

    public function search(Request $request)
    {
        $name = $request->get('search');
        $searchname = User::where('name', 'like', '%' .$name. '%')
                            ->where('id', '!=', Auth::user()->id )->get();
        return view('frontend.social.searchname', compact('searchname', 'name'));
    }
    public function addfriend(Request $request, $id)
    {
        $user_requested = Auth::User()->id;
        $acceptor = $id;
        $addfriend = new addFriend();
        $addfriend->user_requested = $user_requested;
        $addfriend->acceptor = $acceptor;
        $addfriend->save();
        return back()->with('adfr', 'you have sent friend request');

    }
    public function deletefriend($id)
    {
        $delete = DB::table('add_friends')->where('acceptor', $id)->delete();
        return back()->with('delfr', 'you havenot sent friend request');
    }

    public function showfriendrequest(Type $var = null)
    {
        $showfriend = DB::table('add_friends')
        ->leftjoin('users', 'users.id', 'add_friends.user_requested')
        ->where('acceptor', Auth::user()->id)
        ->where('status', null)
        ->get();
        return view('frontend.social.showfriend')->with('showfriend', $showfriend);
    }

    
    public function confirm(Request $request, $id)
    {
        $update = DB::table('add_friends')->where('user_requested', $id)
        ->update(['status'=> 1]);
        return back()->with('adfr', 'you have confirm friend request');

    }

    public function deletefriendrequest(Request $request, $id)
    {
        $delete = DB::table('add_friends')->where('acceptor', $id)->delete();
        return back()->with('delete', 'You have not accepct the friend request');
    }

    public function wallet(Request $request, $id)
    {
        $dipossit = addDipossit::where('userId', $id)->get();
        $totalAmount = addDipossit::where('status', 'Approved')
                        ->where('userId', $id)
                        ->sum('amount');
        $calAfterSendMoney = SendMoney::where('form_user_id', $id)
                             ->sum('amount');
        $calAfterRecivedMoney = SendMoney::where('to_user_id', $id)
                                ->sum('amount');                   
        $subtotal = $totalAmount + $calAfterRecivedMoney - $calAfterSendMoney;
                        // dd($subtotal);
        return view('frontend.social.wallet', compact('dipossit', 'totalAmount', 'subtotal', 'calAfterSendMoney', 'calAfterRecivedMoney'));
    }

    public function dipossit(Request $request, $id)
    {
        return view('frontend.social.dipossit-process');
    }

    public function bank_dipossit(Request $request, $id)
    {
        $userId = Auth::user()->id;
        $banks = addBank::all();
        return view('frontend.social.bankDepossit', compact('banks')); 
    }

    public function bank_dipossitadd(Request $request, $id)
    {
        // $request->validate([
        //     'userId' => 'required',
        //     'paymentMethod' => 'required',
        //     'amount' => 'required',
        //     'txId' => 'required',
        //     'txPhoto' => 'required|image|mimes:jpg, jpeg, png,|max:2048',
        // ]);
        
        $image_name= time().'.'. $request->txPhoto->extension();
        $request->txPhoto->move(public_path('wallet'), $image_name);
        $path = "/wallet/".'.'.$image_name;
        $addbankdipp = new addDipossit();
        $addbankdipp->txPhoto = $path;
        $addbankdipp->userId = $request->userId;
        $addbankdipp->paymentMethod = $request->paymentMethod;
        $addbankdipp->currency = $request->currency;
        $addbankdipp->amount = $request->amount;
        $addbankdipp->txId = $request->txId;
        $addbankdipp->save();
        // dd($addbankdipp);
        return redirect()->back();
    }


    public function sendMoney(Request $request, $id)
    {
        return view('frontend.social.sendMoney-process');
    }


    public function bank_sendmoneytouser(Request $request, $id)
    {
        

        $totalAmount = addDipossit::where('status', 'Approved')
                        ->where('userId', $id)
                        ->sum('amount');
        $calAfterSendMoney = SendMoney::where('form_user_id', $id)
                             ->sum('amount');
        $calAfterRecivedMoney = SendMoney::where('to_user_id', $id)
                                ->sum('amount');                   
        $subtotal = $totalAmount + $calAfterRecivedMoney - $calAfterSendMoney;
         if($subtotal > 1000){
        
        $sendmoney = new SendMoney();
        $sendmoney->form_user_id = $request->form_user_id;
        $sendmoney->to_user_id = $request->to_user_id;
        $sendmoney->from_phone = $request->from_phone;
        $sendmoney->from_email = $request->from_email;
        $sendmoney->to_phone = $request->to_phone;
        $sendmoney->to_email = $request->to_email;
        $sendmoney->amount = $request->amount;
        // dd($sendmoney);
        if($sendmoney->form_user_id === $sendmoney->to_user_id){
            return "sorry select difrrent user";
        }
        else{

        
        $sendmoney->save();
        return redirect()->back();
    }
        
         }   
         else {
            return "sorry, your account balance is less then 1000";
         }
        
    }

    public function BoostPage(Request $request, $id)
    {
        $BusinessPages = BusinessPage::where('status', 1 && 'id', $id)->get();
        return view('frontend.social.BoostProcess', compact('BusinessPages'));
    }

    public function BoostInfo(Request $request)
    {
        $request->validate([
            'businessPageId' => ['required'], 
            'country' => ['required'], 
            'for' => ['required'], 

        ]);
        $user_id = Auth::user()->id;
        $BoostInfo = new boostInfo();
        $BoostInfo->userId = $request->userId;
        $BoostInfo->businessPageId = $request->businessPageId;
        $BoostInfo->country = $request->country;
        $BoostInfo->for = $request->for;
        $BoostInfo->save();
        
        return redirect()->to('home/boostpayment/'. $user_id);

    }

    public function BoostPayment(Request $request)
    {
        $usr = Auth::user()->id;
        // $BoostInfo = boosInfo::where('');
        return view('frontend.social.BoostPayment', compact('usr'));
    }

}
