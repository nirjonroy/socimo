<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\BusinessPage;
use DB;
class BusinessAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request,  Closure $next)
    {
        // if(!Auth::check()){
        //     return redirect()->route('frontend.business.admin');
        // }

        // if(Auth::check() && Auth::BusinessPage()->status == 0){
        //     return $next($request);
        // }

        // if(Auth::check() && Auth::BusinessPage()->status == 1){
        //     return redirect()->route('business.dashboard');
        // }
            // $businessPage = BusinessPage::all();
            $businessPage = DB::table('business_pages')->where('status', 1)->get();


        if($businessPage){
            return $next($request);
        }
        else{
            return redirect()->route('frontend.home');
        }
    }
}
