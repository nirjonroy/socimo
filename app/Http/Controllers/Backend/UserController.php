<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\addBank;
use App\addDipossit;
use App\Order;
use App\OrderDetail;
use App\businessPage;
use DB;
class UserController extends Controller
{
    public function index()
    {
        $all_users = User::where('role',  '=',  2)->get();
        return view('backend.users', compact('all_users'));
    }

    public function userProfileView($id)
    {
        $user = User::where('id', $id)->first();
        // dd($user);
        return view('backend.user_view', compact('user'));
    }
    public function userPost()
    {
        $userposts = DB::table('user_posts')
        ->join('users', 'users.id', 'user_posts.userid')
        ->select('user_posts.*', 'users.name as uname', 'users.profilePhoto as upphoto')
        ->get();
        // dd($userposts);
        return view('backend.userPost', compact('userposts'));
    }

    public function userFriend()
    {
        $userFriend = DB::table('users')
        ->join('add_friends', 'add_friends.acceptor', 'users.id')
        ->join('users as us', 'us.id', 'add_friends.user_requested')
        ->where('add_friends.status', 1)
        ->select('users.name', 'us.id', 'add_friends.user_requested')
        ->get();
        dd($userFriend);
        return "ok";
        
    }

    public function bankAccount(Request $request)
    {
        $banks = addBank::all();
        return view('backend.bank-account', compact('banks'));
    }

    public function addAccount()
    {
        return view('backend.add-bankAccount');
    }

    public function addaAccount(Request $request)
    {
        $addAccount = new addBank();
        $addAccount->accountHolder = $request->accountHolder;
        $addAccount->sortCode = $request->sortCode;
        $addAccount->accountNumber = $request->accountNumber;
        $addAccount->IBAN = $request->IBAN;
        $addAccount->country = $request->country;
        $addAccount->refference = $request->refference;
        $addAccount->accountBalance = $request->accountBalance;
        $addAccount->bankName = $request->bankName;
        $addAccount->save();
        return redirect()->back();

    }

    public function userVendorDipossit(Request $request)
    {
        $Depossits = addDipossit::join('users', 'users.id', 'add_dipossits.userId')
                                  ->join('add_banks', 'add_banks.id', 'add_dipossits.paymentMethod')
                                  ->select('add_dipossits.*', 'users.name as usname', 'users.phone as usphone', 'users.email as usemail', 'add_banks.bankName')
                                  ->get();
                                //   dd($Depossits);
        return view('backend.dipossits', compact('Depossits'));
    }
    public function approvedDipposit(Request $request, $id)
    {
        addDipossit::where('id', $id)
        ->update(['status'=>'Approved']);
        return redirect()->back();
    }

    public function rejectDipposit(Request $request, $id)
    {
        addDipossit::where('id', $id)
        ->update(['status'=>'Reject']);
        return redirect()->back();
    }

    public function OrderByBusiness(Request $request)
    {
        $BusineesOrders = OrderDetail::join('business_pages', 'business_pages.id', 'order_details.businessId')
                            ->join('users', 'users.id', 'order_details.userId')
                            ->select('order_details.*', 'business_pages.BusinessName as bname', 'users.name as ouname')
                            
                            ->paginate(6);
            
        

                    return view('backend.businessOrders', compact('BusineesOrders'));
        
    }

    public function BusinessOrderDetail( $order_id, $businessId)
    {
        $BusinessDetails = BusinessPage::where('id', $businessId)->first();
            $orderDetails = Order::join('users', 'users.id', 'orders.userId')
           ->select('orders.*', 'users.name as uname', 'users.phone as uphone', 'users.email as uemail','users.address as uaddress')
                        ->where('orderNumber', $order_id)
                       
                        ->get();
            $total_value = OrderDetail::where('orderNumber', $order_id)->first();
            $userDetail =  $Orders = OrderDetail::join('users', 'users.id', 'order_details.userId')
            ->select('order_details.*', 'users.name as uname', 'users.phone as uphone', 'users.email as uemail','users.address as uaddress')
            ->where('orderNumber', $order_id )->first();
                            // dd($userDetail);
          return view('backend.businessOrderDetail', compact('BusinessDetails', 'orderDetails', 'total_value', 'userDetail'));
    }
    
}
