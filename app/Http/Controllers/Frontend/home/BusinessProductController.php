<?php

namespace App\Http\Controllers\Frontend\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\BusinessPage;
use App\vendorCategory;
use App\vendorProduct;
use App\productBrand;
use Illuminate\Support\Facades\Validator;
use App\Cart;
use App\Order;
use App\orderDetail;
use Auth;
use DB;
class BusinessProductController extends Controller
{
    public function index(Request $request, $id)
    {
        $BusinessDetails = BusinessPage::where('id', $id)->first();
        $vendorCategory = vendorCategory::where('business_id', $id)->get();
        $vendorBrand = productBrand::where('business_id', $id)->get();
        // dd($vendorCategory);
        return view('frontend.business.admin.product-add', compact('BusinessDetails', 'vendorCategory', 'vendorBrand'));
    }
    public function BusinessProductStore(Request $request)
    {
        $data = $request->validate([
            'business_id' => ['required'],
            'vendorCategoryId' => ['required'],
            
            'productName' => ['required'],
            'productDescription' => ['required'],
            'productImage' => [''],
            'productPrice' => ['required'],
           
            'Currency' => ['required'],
            'totalProduct' => ['required'],
            'productType' => ['required'],
            
        ]);  
        
        $image_name= time().'.'. $request->productImage->extension();
        $request->productImage->move(public_path('product_image'), $image_name);
        $path = "/product_image/".$image_name;

        $data = new vendorProduct();
        $data->business_id = $request->business_id;
        $data->productType = $request->productType;
        $data->vendorCategoryId = $request->vendorCategoryId;
        
        $data->productName = $request->productName;
        $data->productDescription = $request->productDescription;
        $data->Currency = $request->Currency;
        $data->productPrice = $request->productPrice;
        $data->discountPrice = $request->discountPrice;
        $data->productCode = mt_rand(10000000, 99999999);
        $data->totalProduct = $request->totalProduct;
        $data->productSize = $request->productSize;
        $data->ProductColor = $request->ProductColor;
        $data->productImage = $path;
        // dd($data);
        $data->save();
        return redirect()->back()->with('success', 'Product Added Successfully');
    }

    public function addCart(Request $request, $id)
    {   
        
        if(Auth::id()){
            
            $product = vendorProduct::find($id);
            $user = auth()->user();
            $cart = new cart();
            $cart->name=$user->name;
            $cart->phone=$user->phone;
            $cart->address=$user->address;
            $cart->userId=$user->id;
            $cart->quantity=$request->quantity;
            $cart->product_title=$product->productName;
            $cart->price=$product->productPrice;
            $cart->total_price=$product->productPrice * $request->quantity;
            $cart->image=$product->productImage;
            $cart->productCode=$product->productCode;
            $cart->business_id=$product->business_id;
            // $cart->business_id = $businessId->id;
            // dd($businessId);
            $cart->save();
            // dd($cart);
           return redirect()->back();
        }
        else{
                return redirect('/');
        }
    }

    public function showCart(Request $request, $id)
    {   
        $user = Auth()->user();
        $carts = Cart::where('phone', $user->phone)->get();
        
        $Businesspag = BusinessPage::where('id', $id)->first();
        $business_category = VendorCategory::where('business_id', $id)->get();
        // $Cart_price = Cart::where('phone', $user->phone)->sum('price') ;
        $total_value = Cart::where('phone', $user->phone)->sum(\DB::raw('price*quantity'));
        
        // dd($total_value);
        return view('frontend.business.admin.showCart', compact('Businesspag', 'business_category', 'carts', 'total_value'));
    }
    public function deleteCart(Request $request, $id)
    {
         Cart::where('id', $id)->delete();
         return redirect()->back();
    }
    // public function confirmOrder(Request $request)
    // {
    //     $user = Auth()->user();
    //     $name = $user->name;
    //     $phone = $user->phone;
    //     $address = $user->address;
    //     foreach($request->productname as $key => $anyname) {
    //         $order = new Order;
    //         $order->product_name = $request->productname[$anyname];
    //         $order->quantity = $request->quantity[$key];
    //         $order->price = $request->price[$key];
    //         $order->name = $name;
    //         $order->phone = $phone;
    //         $order->address = $address;

    //         $order->save();
            
            
    //     }
    //     return redirect()->back();
    // }

        public function confirmOrder(Request $request)
        {
            $order = $request->validate([
                'txId' => 'required|min:10',
                
                
            ]); 
            // if($order->fails()){
            //     return response()->json([
            //         'error'=>true,
            //         'message'=> $validator->errors(),
            //     ]);
            // }

            $product_name = $request->product_name;
            $price = $request->price;
            $quantity = $request->quantity;
            $user = Auth()->user();
            $name = $user->name;
            $phone = $user->phone;
            $address = $user->address;
            $userId = $user->id;
            $txId	= $request->txId;
            $businessId = $request->businessId;
            $shippingAddress = $request->shippingAddress;
            $productCode = $request->productCode;
            $orderNumber = mt_rand(10000000, 99999999);
            $total_qty = Cart::where('phone', $user->phone)->sum('quantity');
            $total_price = Cart::where('phone', $user->phone)->sum('total_price');
            foreach($request->product_name as $key => $product_name){

                $order = new Order;
                $order->product_name = $product_name;
                $order->price = $price[$key];
                $order->quantity = $quantity[$key];
                $order->total_price = $quantity[$key] * $price[$key];
                $order->name = $name;
                $order->phone = $phone;
                $order->address = $address;
                $order->userId = $userId;
                $order->txId = $txId;
                $order->businessId = $businessId;
                $order->shippingAddress = $shippingAddress;
                $order->productCode = $productCode;
                $order->orderNumber = $orderNumber;

                $order->save();
                
                

            }
            $orderDetail = new orderDetail();
            $orderDetail->businessId = $businessId;
            $orderDetail->orderNumber = $orderNumber;
            $orderDetail->userId = $userId;
            $orderDetail->totalQuantity = $total_qty;
            $orderDetail->totalprice = $total_price;
            $orderDetail->status = 'pending';
            $orderDetail->txId = $txId;
            $orderDetail->shippingDetail = $shippingAddress;
            $orderDetail->save();

            Cart::where('phone', $phone)->delete();
            return redirect()->back()->with('success', 'Your order is now pending' );

        }

        


        public function confirmOrderpage(Request $request, $id)
        {
            $user = Auth::user()->id;
            $Businesspag = BusinessPage::where('id', $id)->first();
            $business_category = VendorCategory::where('business_id', $id)->get();
            $total_order = Order::where('userId', $user)->where('orderNumber', $user)->first();
            // $totalOrderId = Order::where()
            dd($total_order);

            return view('frontend.business.userOrder', compact('Businesspag', 'business_category'));
        }
        public function userOrderTrack(Request $request, $id)
        {
            
            
            
            $Businesspag = BusinessPage::where('id', $id)->first();
            $business_category = VendorCategory::where('business_id', $id)->get();
            return view('frontend.business.userOrderTrack', compact('Businesspag', 'business_category'));
        }
        public function userOrderTrackSearch(Request $request, $id)
        {
            $Businesspag = BusinessPage::where('id', $id)->first();
            $business_category = VendorCategory::where('business_id', $id)->get();
            $name = $request->get('search');
            $searchname = Order::where('orderNumber','like', '%' .$name. '%')
                                ->orwhere('phone','like', '%' .$name. '%')
                                ->get();
            return view('frontend.business.userOrderTrackpage', compact( 'searchname', 'name', 'Businesspag', 'business_category'));
        }


        public function SelsOrder(Request $request, $id)
        {
            $Orders = OrderDetail::join('users', 'users.id', 'order_details.userId')
            ->select('order_details.*', 'users.name as uname', 'users.phone as uphone', 'users.email as uemail','users.address as uaddress')
            ->where('businessId', $id )->get();
            $BusinessDetails = BusinessPage::where('id', $id)->first();
            // dd($Orders);
        return view('frontend.business.admin.orders', compact('BusinessDetails', 'Orders'));
        }
        public function SelsOrderDetail (Request $request, $order_id, $businessId)
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
          return view('frontend.business.admin.orderDetail', compact('BusinessDetails', 'orderDetails', 'total_value', 'userDetail'));
            
        }
        public function processing(Request $request, $order_id, $businessId)
        {
            OrderDetail::where('orderNumber', $order_id)
                        ->update(['status'=>'Processing']);
                        return redirect()->back();
        }
        public function Shipped(Request $request, $order_id, $businessId)
        {
            OrderDetail::where('orderNumber', $order_id)
                        ->update(['status'=>'Shipped']);
                        return redirect()->back();
        }
        public function Deliverd(Request $request, $order_id, $businessId)
        {
            OrderDetail::where('orderNumber', $order_id)
                        ->update(['status'=>'Deliverd']);
                        return redirect()->back();
        }

        public function ProductList(Request $request, $id){
            $BusinessDetails = BusinessPage::where('id', $id)->first();
            $products = vendorProduct::where('business_id', $id)->latest()->get();
                return view('frontend.Business.admin.productList', compact('products', 'BusinessDetails'));
        }

        public function ProductDelete(Request $request, $id, $business_id)
        {
            
           vendorProduct::where(['business_id'=>$business_id, 'id' => $id ])->delete();
            
            return redirect()->back();
        }
        public function Productview(Request $request, $id, $business_id)
        {
            $BusinessDetails = BusinessPage::where('id', $business_id)->first();
            $products = vendorProduct::where(['business_id'=>$business_id, 'id' => $id ])->first();
            return view('frontend.Business.admin.productDetail', compact('BusinessDetails', 'products'));
        }
}
