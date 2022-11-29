<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    public function redirectTo(){

       

        switch(Auth::user()->role){
            case 1:
                $this->redirectTo = '/dashboard';
                return $this->redirectTo;
                break; 
            
            case 2:
                    $this->redirectTo = 'home';
                    return $this->redirectTo;
                    break;     
            default:
                $this->redirectTo ='/';
                return $this->redirectTo;
                break;        
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'nickName' => ['string'],
            'address' => ['string', 'max:255'],
            'gender' => ['required','string', 'max:255'],
            'profilePhoto' => ['string', 'max:255'],
            'coverPhoto' => ['string', 'max:255'],
            'occupation' => ['string', 'max:255'],
            'school' => ['string', 'max:255'],
            'college' => ['string', 'max:255'],
            'university' => ['string', 'max:255'],
            'website' => ['string', 'max:255'],
            'facebook' => ['string', 'max:255'],
            'twitter' => ['string', 'max:255'],
            'twitter' => ['string', 'max:255'],
            'instragram' => ['string', 'max:255'],
            'youtube' => ['string', 'max:255'],
            'whatsApp' => ['string', 'max:255'],
            'linkedin' => ['string', 'max:255'],
            'DOB' => ['string', 'max:255'],
            'religion' => ['string', 'max:255'],
            'relationship_status' => ['string', 'max:255'],
            'relationship_status' => ['string', 'max:255'],
            'role' => ['string', 'max:255'],
            'status_id' => ['string', 'max:255'],
            'profilePhoto' => ['required|image|mimes:jpeg, png,|max:2048']


        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'nickName' => $data['nickName'],
    //         'phone' => $data['phone'],
    //         'address' => $data['address'],
    //         'gender' => $data['gender'],
    //         'profilePhoto' => $data['profilePhoto'],
    //         'coverPhoto' => $data['coverPhoto'],
    //         'occupation' => $data['occupation'],
    //         'school' => $data['school'],
    //         'college' => $data['college'],
    //         'university' => $data['university'],
    //         'website' => $data['website'],
    //         'facebook' => $data['facebook'],
    //         'twitter' => $data['twitter'],
    //         'youtube' => $data['youtube'],
    //         'whatsApp' => $data['whatsApp'],
    //         'DOB' => $data['DOB'],
    //         'religion' => $data['religion'],
    //         'relationship_status' => $data['relationship_status'],
    //         'relationship_status' => $data['relationship_status'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }

    public function register(Request $request)
    {
        $user = new User();
        $user->name = $request->name; 
        $user->email = $request->email; 
        $user->phone = $request->phone; 
        $user->address = $request->address; 
        $user->gender = $request->gender; 
        $user->DOB = $request->DOB; 
        $user->password = Hash::make($request->password);
        $user->verification_code = sha1(time());
        
        $user->save();
        $user->time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $user);
        if($user != null){
            //send email
            // MailController::sendSignupEmail($user->name, $user->email, $user->verification_code);
           \MailController::sendSignupEmail($user->name, $user->email, $user->verification_code);
            return redirect()->back()
            ->with(session()->flash('alert-success', 'Your account has been created. Please check email for verification link.'))
            ->with('profilePhoto', $user);
        }
        //show error message
        return redirect()->back()-with(session()->flash('alert-denger', 'something went wrong'));
    }

    public function verifyUser(Request $request){
        $verification_code = \Illuminate\Support\Facades\Request::get('code');
        $user = User::where(['verification_code' => $verification_code])->first();
        if($user != null){
            $user->is_verified = 1;
            $user->save();
            return redirect()->route('login')->with(session()->flash('alert-success', 'Your account is verified. Please login!'));
        }
            
        return redirect()->route('login')->with(session()->flash('alert-danger', 'Invalid verification code!'));
    }
}
