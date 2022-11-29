<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcommerceBusinessController;
use App\Http\Controllers\CartController;

// Frontend Route
Route::get('/', 'Frontend\user\LoginController@index')->name('login');
Route::get('sign-up', 'Frontend\user\LoginController@signup')->name('user.signup');
Route::get('home', 'Frontend\home\HomeController@index')->name('frontend.home')->middleware('user');
Route::get('home/wallet/{id}', 'Frontend\home\HomeController@wallet')->name('frontend.home.wallet')->middleware('user');
Route::get('home/dipossit/{id}', 'Frontend\home\HomeController@dipossit')->name('frontend.home.dipossit')->middleware('user');
Route::get('home/sendMoney/{id}', 'Frontend\home\HomeController@sendMoney')->name('frontend.home.sendmoney')->middleware('user');
Route::get('home/bank-dipossit/{id}', 'Frontend\home\HomeController@bank_dipossit')->name('frontend.home.bankdipossit')->middleware('user');
Route::post('home/bank-dipossitAdd/{id}', 'Frontend\home\HomeController@bank_dipossitadd')->name('frontend.wallet.bankdepossitadd')->middleware('user');
Route::post('home/sendmoneytouser/{id}', 'Frontend\home\HomeController@bank_sendmoneytouser')->name('frontend.wallet.sendmoneytouser')->middleware('user');
Route::get('home/videos', 'Frontend\home\VideoController@index')->name('frontend.video')->middleware('user');
Route::get('home/profile/{id}', 'Frontend\home\ProfileController@index')->name('frontend.profile')->middleware('user');
Route::get('home/profile/language/{id}', 'Frontend\home\ProfileController@profileLanguage')->name('frontend.profile.language')->middleware('user');
Route::post('home/profile/language_update/{id}', 'Frontend\home\ProfileController@profileLanguageUpdate')->name('frontend.profile.profileLanguageUpdate')->middleware('user');
Route::get('home/profile/social_links/{id}', 'Frontend\home\ProfileController@pSocialLinks')->name('frontend.profile.social_links');
Route::post('home/profile/language_update/{id}', 'Frontend\home\ProfileController@profileSocialLinkUpdate')->name('frontend.profile.socialLinksUpdate')->middleware('user');
Route::get('home/profile/religion/{id}', 'Frontend\home\ProfileController@pReligion')->name('frontend.profile.religion');
Route::post('home/profile/religion_update/{id}', 'Frontend\home\ProfileController@profileReligionUpdate')->name('frontend.profile.pReligion')->middleware('user');
Route::get('home/profile/phone/{id}', 'Frontend\home\ProfileController@profilePhone')->name('frontend.profile.pPhone')->middleware('user');
Route::post('home/profile/phoneUpdate/{id}', 'Frontend\home\ProfileController@profilePhoneUpdate')->name('frontend.profile.pPhoneUpdate')->middleware('user');
Route::get('home/profile/address/{id}', 'Frontend\home\ProfileController@profileAddress')->name('frontend.profile.pAddress')->middleware('user');
Route::post('home/profile/address/{id}', 'Frontend\home\ProfileController@profileAddressUpdate')->name('frontend.profile.pAddressUpdate')->middleware('user');
Route::get('home/profile/gender/{id}', 'Frontend\home\ProfileController@profileGender')->name('frontend.profile.pGender')->middleware('user');
Route::post('home/profile/genderUpdate/{id}', 'Frontend\home\ProfileController@profileGenderUpdate')->name('frontend.profile.pGenderUpdate')->middleware('user');
Route::get('home/profile/website/{id}', 'Frontend\home\ProfileController@profileWebsite')->name('frontend.profile.pWebsite')->middleware('user');
Route::post('home/profile/WebsiteUpdate/{id}', 'Frontend\home\ProfileController@profileWebsiteUpdate')->name('frontend.profile.pWebsiteUpdate')->middleware('user');
Route::get('home/profile/DOB/{id}', 'Frontend\home\ProfileController@profileDOB')->name('frontend.profile.pDOB')->middleware('user');
Route::post('home/profile/DOBUpdate/{id}', 'Frontend\home\ProfileController@profileDOBUpdate')->name('frontend.profile.pDOBUpdate')->middleware('user');
Route::get('home/profile/relationship_status/{id}', 'Frontend\home\ProfileController@relationship_status')->name('frontend.profile.relationship_status')->middleware('user');
Route::post('home/profile/relationship_statusUpdate/{id}', 'Frontend\home\ProfileController@profilerelationship_statusUpdate')->name('frontend.profile.prelationship_statusUpdate')->middleware('user');
Route::get('home/profile/Profession/{id}', 'Frontend\home\ProfileController@Profession')->name('frontend.profile.Profession')->middleware('user');
Route::post('home/profile/professionUpdate/{id}', 'Frontend\home\ProfileController@profileProfessionUpdate')->name('frontend.profile.pProfessionUpdate')->middleware('user');
Route::get('home/profile/university/{id}', 'Frontend\home\ProfileController@University')->name('frontend.profile.University')->middleware('user');
Route::post('home/profile/universityUpdate/{id}', 'Frontend\home\ProfileController@profileUniversityUpdate')->name('frontend.profile.pUniversityUpdate')->middleware('user');
Route::get('home/profile/college/{id}', 'Frontend\home\ProfileController@College')->name('frontend.profile.College')->middleware('user');
Route::post('home/profile/CollegeUpdate/{id}', 'Frontend\home\ProfileController@profileCollegeUpdate')->name('frontend.profile.pCollegeUpdate')->middleware('user');
Route::get('home/profile/School/{id}', 'Frontend\home\ProfileController@school')->name('frontend.profile.school')->middleware('user');
Route::post('home/profile/schoolUpdate/{id}', 'Frontend\home\ProfileController@profileschoolUpdate')->name('frontend.profile.pSchoolUpdate')->middleware('user');
Route::get('home/profile/nameEmail/{id}', 'Frontend\home\ProfileController@nameEmail')->name('frontend.profile.nameEmail')->middleware('user');
Route::post('home/profile/nameEmailUpdate/{id}', 'Frontend\home\ProfileController@nameEmailUpdate')->name('frontend.profile.pNameEmailUpdate')->middleware('user');
Route::get('home/profile/profilePhoto/{id}', 'Frontend\home\ProfileController@profilePhoto')->name('frontend.profile.profilePhoto')->middleware('user');
Route::post('home/profile/pProfilePhoto/{id}', 'Frontend\home\ProfileController@pProfilePhoto')->name('frontend.profile.pProfilePhoto')->middleware('user');
Route::post('home/boostInfo', 'Frontend\home\HomeController@BoostInfo')->name('frontend.profile.boostInfo')->middleware('user');
Route::get('home/boost/{id}', 'Frontend\home\HomeController@BoostPage')->name('frontend.home.Boost')->middleware('user');
Route::get('home/boostpayment/{id}', 'Frontend\home\HomeController@BoostPayment')->name('frontend.home.BoostPayment')->middleware('user');

Route::get('/search', 'Frontend\home\HomeController@search');
Route::get('/addfriend{id}/', 'Frontend\home\HomeController@addfriend');
Route::get('/deletefriend{id}/', 'Frontend\home\HomeController@deletefriend');
Route::get('/showfriendrequest', 'Frontend\home\HomeController@showfriendrequest');

Route::get('/confirm{id}/', 'Frontend\home\HomeController@confirm');
Route::get('/deletefriendrequest{id}/', 'Frontend\home\HomeController@deletefriendrequest');


Route::post('userPost', 'Frontend\home\ProfileController@userPost')->name('userPost.index')->middleware('user');
Route::get('like/{id}', 'Frontend\home\ProfileController@likePost')->name('userPostLike.index')->middleware('user');
Route::post('postComment/{id}', 'Frontend\home\ProfileController@postComment')->name('userPostComment.index')->middleware('user');
Route::post('sharetimeline/{id}', 'Frontend\home\ProfileController@sharetimeline')->name('sharetimeline.index')->middleware('user');
//Create Business Page By User 
Route::get('create/new/businessPage', 'Frontend\home\BusinessPageController@index')->name('BusinessPage.index')->middleware('user');
Route::post('submit/new/businessPage', 'Frontend\home\BusinessPageController@create')->name('BusinessPage.create')->middleware('user');
Route::get('home/businessPage/{id}', 'Frontend\home\BusinessPageController@page')->name('frontend.business.page')->middleware('user');
Route::get('home/businessPage/shop/{id}', 'Frontend\home\BusinessPageController@shop')->name('frontend.business.shop')->middleware('user');
Route::post('home/businessPage/shop/add-cart/{id}', 'Frontend\home\BusinessProductController@addCart')->name('frontend.business.addCart')->middleware('user');
Route::get('home/businessPage/shop/show-cart/{id}', 'Frontend\home\BusinessProductController@showCart')->name('frontend.business.showCart')->middleware('user');
Route::get('home/businessPage/shop/delete-cart/{id}', 'Frontend\home\BusinessProductController@deleteCart')->name('frontend.business.deleteCart')->middleware('user');
Route::get('home/businessPage/shop/delete-cart/{id}', 'Frontend\home\BusinessProductController@deleteCart')->name('frontend.business.deleteCart')->middleware('user');
Route::post('home/businessPage/shop/confirm-cart-orders', 'Frontend\home\BusinessProductController@confirmOrder')->name('confirm.orders.cart')->middleware('user');
Route::get('home/businessPage/shop/order-confirm/page/{id}', 'Frontend\home\BusinessProductController@confirmOrderpage')->name('confirm.orders.cart.message')->middleware('user');
Route::get('home/businessPage/shop/order-track/page/{id}', 'Frontend\home\BusinessProductController@userOrderTrack')->name('confirm.orders.cart.userOrderTrack')->middleware('user');
Route::post('home/businessPage/shop/order-track/search/{id}', 'Frontend\home\BusinessProductController@userOrderTrackSearch')->name('orderSearch.trackingNumber')->middleware('user');

// Business Page Admin
Route::get('home/businessPage/{id}/admin', 'Frontend\home\BusinessPageController@businessAdmin')->name('frontend.business.admin')->middleware('user');
Route::post('business/admin/login/{id}', 'Frontend\home\BusinessPageController@businessAdminLogin')->name('businessPage.Login');
Route::get('business/dashboard/{id}', 'Frontend\home\BusinessPageController@dashboard')->name('business.dashboard')->middleware('BusinessAdmin');
Route::post('Business/logout', 'Frontend\home\BusinessPageController@BusiLogout')->name('businessPage.logout');
Route::get('Business/Admin/{id}', 'Frontend\home\BusinessPageController@vendorAdminProfile')->name('vendorAdmin.profile');
Route::get('Business/Category-list/{id}', 'Frontend\home\BusinessPageController@BusinessCategoryList')->name('vandor.BusinessCategoryList');
Route::get('Business/Category-delete/{id}/{business_id}', 'Frontend\home\BusinessPageController@BusinessCategoryDelete')->name('vandor.BusinessCategoryDelete');
Route::get('Business/Category/{id}', 'Frontend\home\BusinessPageController@BusinessCategory')->name('vandor.BusinessCategory');
Route::post('Business/Category/store', 'Frontend\home\BusinessPageController@BusinessCategoryStore')->name('vandor.BusinessCategoryStore');
Route::get('Business/product-list/{id}', 'Frontend\home\BusinessProductController@ProductList')->name('vendor.productList');
Route::get('business/product-delete/{business_id}/{id}', 'Frontend\home\BusinessProductController@ProductDelete')->name('vendor.productDelete');
Route::get('business/product-view/{business_id}/{id}', 'Frontend\home\BusinessProductController@Productview')->name('vendor.productView');
Route::get('Business/product-add/{id}', 'Frontend\home\BusinessProductController@index')->name('vendor.product');
Route::post('Business/product/store', 'Frontend\home\BusinessProductController@BusinessProductStore')->name('vandor.BusinessProductStore');
Route::get('Business/sels/order/{id}', 'Frontend\home\BusinessProductController@SelsOrder')->name('vendor.BusinessSaleOrder');
Route::get('Business/sels/orderDetail/{order_id}/{businessId}', 'Frontend\home\BusinessProductController@SelsOrderDetail')->name('vendor.BusinessSaleOrderDetail');
Route::get('Business/sels/processing/{order_id}/{businessId}', 'Frontend\home\BusinessProductController@processing')->name('vendor.BusinessSaleProcessOrder');
Route::get('Business/sels/shipped/{order_id}/{businessId}', 'Frontend\home\BusinessProductController@Shipped')->name('vendor.BusinessSaleShippedOrder');
Route::get('Business/sels/Deliverd/{order_id}/{businessId}', 'Frontend\home\BusinessProductController@Deliverd')->name('vendor.BusinessSaleDeliverdOrder');
Route::get('business/productByCategory/{id}/{business_id}', 'Frontend\home\BusinessPageController@ProductByCategory')->name('vendor.BusinessproductByCategory');
Route::get('Business/brand-add/{id}', 'Frontend\home\BusinessPageController@BusinessBrand')->name('vandor.BusinessBrand');
Route::post('Business/Brand/store', 'Frontend\home\BusinessPageController@BusinessBrandStore')->name('vandor.BusinessBrandStore');
Route::get('Business/brand-list/{id}', 'Frontend\home\BusinessPageController@BusinessBrandList')->name('vandor.BusinessBrandList');
Route::get('Business/slider-add/{id}', 'Frontend\home\BusinessPageController@BusinessSlideradd')->name('vandor.BusinessSliderList');
Route::post('Business/Slider/store', 'Frontend\home\BusinessPageController@BusinessSliderStore')->name('vandor.BusinessSliderStore');
Route::get('Business/slider-list/{id}', 'Frontend\home\BusinessPageController@BusinessSliderList')->name('vandor.BusinessSliderList');
Route::get('Business/theme-seeting/{id}', 'Frontend\home\BusinessPageController@BusinessThemeSeeting')->name('vandor.BusinessThemeSeeting');
Route::post('Business/theme-setting-store/{id}', 'Frontend\home\BusinessPageController@BusinessThemeSeetingStore')->name('vandor.BusinessThemeSeetingStore');
// Route::get('home/videos', 'Frontend\home\BookController@index')->name('frontend.book');

// Route::get('/', [EcommerceBusinessController::class, 'index'])->name('home');
// Route:: get('/videos', [EcommerceBusinessController::class, 'showVideos'])->name('videos');
Route:: get('/courses', [EcommerceBusinessController::class, 'courses'])->name('courses');
Route:: get('/books', [EcommerceBusinessController::class, 'books'])->name('books');
Route:: get('/Market', [EcommerceBusinessController::class, 'blogs'])->name('blogs');
Route:: get('/groups', [EcommerceBusinessController::class, 'groups'])->name('groups');
Route:: get('/cart-products' , [CartController::class, 'showCart'])->name('cart-product');



// Backend Route



Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

    

Route::get('dashboard', 'Backend\DashboardController@index')->name('dashboard')->middleware('admin');
Route::get('dashboard/analytics', 'Backend\AnalyticsController@index')->name('dashboard.analytics')->middleware('admin');
Route::get('dashboard/profile', 'Backend\ProfileController@index')->name('dashboard.profile')->middleware('admin');
Route::get('dashboard/reviews', 'Backend\ReviewController@index')->name('dashboard.reviews')->middleware('admin');
Route::get('dashboard/Event', 'Backend\EventController@index')->name('dashboard.events')->middleware('admin');
Route::get('dashboard/product', 'Backend\ProductController@index')->name('dashboard.products')->middleware('admin');
Route::get('dashboard/blog', 'Backend\BlogController@index')->name('dashboard.blog')->middleware('admin');
Route::get('dashboard/message', 'Backend\MessageController@index')->name('dashboard.message')->middleware('admin');
Route::get('dashboard/team', 'Backend\TeamController@index')->name('dashboard.team')->middleware('admin');
Route::get('dashboard/log_register', 'Backend\LoginController@index')->name('dashboard.login_register')->middleware('admin');
Route::get('deshboard/users', 'Backend\UserController@index')->name('dashboard.user')->middleware('admin');
Route::get('deshboard/bank-accounts', 'Backend\UserController@bankAccount')->name('dashboard.bank.account')->middleware('admin');
Route::get('deshboard/add-account', 'Backend\UserController@addAccount')->name('dashboard.addbank.account')->middleware('admin');
Route::get('deshboard/user-vendor-depossit-request', 'Backend\UserController@userVendorDipossit')->name('dashboard.userDepossit.account')->middleware('admin');
Route::get('approved-depossit/{id}', 'Backend\UserController@approvedDipposit')->name('dashboard.approveDepossit')->middleware('admin');
Route::get('reject-depossit/{id}', 'Backend\UserController@rejectDipposit')->name('dashboard.rejectDepossit')->middleware('admin');
Route::post('adda-Account', 'Backend\UserController@addaAccount')->name('dashboard.adda.account')->middleware('admin');
Route::get('ordersbyBusiness', 'Backend\UserController@OrderByBusiness')->name('dashboard.Order.Business')->middleware('admin');
Route::get('ordersbyBusines/orderDetail/{order_id}/{businessId}', 'Backend\UserController@BusinessOrderDetail')->name('vendor.BusinessOrderDetail');

Route::get('view/users/{id}', 'Backend\UserController@userProfileView')->name('backend.user.userProfileView')->middleware('admin');
Route::get('view/userPost', 'Backend\UserController@userPost')->name('dashboard.userPost.report')->middleware('admin');
Route::get('view/userFriend', 'Backend\UserController@userFriend')->name('dashboard.userFriend.report')->middleware('admin');
Route::get('view/userBusiness', 'Backend\BusinessController@index')->name('dashboard.userBusiness.report')->middleware('admin');
Route::get('view/userBusinessSliders', 'Backend\BusinessController@sliders')->name('dashboard.userBusiness.sliders')->middleware('admin');
Route::get('view/userBusinessPost', 'Backend\BusinessController@userPost')->name('dashboard.userBusiness.Post')->middleware('admin');
Route::get('active/vendor/{id}', 'Backend\BusinessController@activeVendor')->name('backend.vendor.active')->middleware('admin');
Route::get('deactive/vendor/{id}', 'Backend\BusinessController@deactiveVendor')->name('backend.vendor.deactive')->middleware('admin');
Route::get('view/vendor/{id}', 'Backend\BusinessController@viewVendor')->name('backend.vendor.view')->middleware('admin');
Route::get('view/trash/{id}', 'Backend\BusinessController@trashVendor')->name('backend.vendor.trash')->middleware('admin');
// 