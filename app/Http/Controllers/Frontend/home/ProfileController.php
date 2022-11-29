<?php

namespace App\Http\Controllers\Frontend\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\UserPost;
use Auth;
use App\BusinessPage;
use App\Reaction;
use App\postComment;
use App\postShare;
class ProfileController extends Controller
{
    public function index($id)
    {                      
        $all_pro = User::find($id);
        $user_post = UserPost::where('userId', $id)->latest()->get();
        $busnessPages = BusinessPage::where('user_Id', $id)->where('status', 1)->get();
        $ReactionCount = Reaction::all();
        // dd($ReactionCount);
        // dd($busnessPage);
        // dd($user_post);
        return view('frontend.social.profile', compact('all_pro', 'user_post', 'busnessPages'));
    }
    public function profileLanguage($id)
    {
        $profile_language = User::where('id', $id)->first();
        // dd($profile_language);
        return view('frontend.social.profile_languages', compact('profile_language'));
        
    }
    public function profileLanguageUpdate(Request $request, $id)
    {
        $language = User::find($id);
        $language->language_one = request('language_one');
        $language->language_two = request('language_two');
        $language->language_three = request('language_three');
        $language->save();
        dd($language);
        return redirect::to('frontend.social.profile');
    }
    public function pSocialLinks($id)
    {
        # code...
        $Social_links = User::where('id', $id)->first();
        
        return view('frontend.social.profile_social_links', compact('Social_links'));
    }

    public function profileSocialLinkUpdate(Request $request, $id)
    {
        $social_links = User::find($id);
        $social_links->facebook = request('facebook');
        $social_links->twitter = request('twitter');
        $social_links->instragram = request('instragram');
        $social_links->youtube = request('youtube');
        $social_links->whatsApp = request('whatsApp');
        $social_links->linkedin = request('linkedin');
        $social_links->save();
        // dd($language);
        return redirect::to('frontend.social.profile');
    }

    public function pReligion($id)
    {
        $Religion = User::where('id', $id)->first();
        return view('frontend.social.profile_religion', compact('Religion'));
    }

    public function profileReligionUpdate(Request $request, $id)
    {
        $religion = User::find($id);
        $religion->religion = request('religion');
        $religion->save();
        return redirect::to('frontend.social.profile');
    }
    public function profilePhone($id)
    {
        $phone = User::where('id', $id)->first();
        return view('frontend.social.profile_phone', compact('phone'));
    }
    public function profilePhoneUpdate(Request $request, $id)
    {
        $phone = User::find($id);
        $phone->phone = request('phone');
        $phone->save();
        return Redirect::back();
    }

    public function profileAddress($id)
    {
        $address = User::where('id', $id)->first();
        return view('frontend.social.profile_address', compact('address'));
    }
    public function profileAddressUpdate(Request $request, $id)
    {
        $address = User::find($id);
        $address->address = request('address');
        $address->save();
        return Redirect::back();
    }
    public function profileGender($id)
    {
        $gender = User::where('id', $id)->first();
        // return "ok";
        return view('frontend.social.profile_gender', compact('gender'));
    }
    public function profileGenderUpdate(Request $request, $id)
    {
        $gender = User::find($id);
        $gender->gender = request('gender');
        $gender->save();
        return Redirect::back();
    }
    public function profileWebsite($id)
    {
        $website = User::where('id', $id)->first();
        return view('frontend.social.profile_website', compact('website'));
    }
    public function profileWebsiteUpdate(Request $request, $id)
    {
        $website = User::find($id);
        $website->website = request('website');
        $website->save();
        return Redirect::back();
    }

    public function profileDOB($id)
    {
        $DOB = User::where('id', $id)->first();
        return view('frontend.social.profile_DOB', compact('DOB'));
    }

    public function profileDOBUpdate(Request $request, $id)
    {
        $DOB = User::find($id);
        $DOB->DOB = request('DOB');
        $DOB->save();
        return Redirect::back();
    }

    public function relationship_status ($id)
    {
        $relationship_status  = User::where('id', $id)->first();
        return view('frontend.social.relationship_status', compact('relationship_status'));
    }

    public function profilerelationship_statusUpdate(Request $request, $id)
    {
        $relationship_status = User::find($id);
        $relationship_status->relationship_status = request('relationship_status');
        $relationship_status->save();
        return Redirect::back();
    }
    public function Profession($id)
    {
        $profession = User::find($id);
        return view('frontend.social.profession', compact('profession'));
    }
    public function profileProfessionUpdate(Request $request, $id)
    {
        $profession = User::find($id);
        $profession->occupation = request('occupation');
        $profession->position = request('position');
        $profession->occupation_start = request('occupation_start');
        $profession->occuption_end = request('occuption_end');
        $profession->save();
        return Redirect::back();
    }
    public function University($id)
    {
        $university = User::find($id);
        // dd($university);
        return view('frontend.social.university', compact('university'));
    }
    public function profileUniversityUpdate(Request $request, $id)
    {
        $university = User::find($id);
        $university->university = request('university');
        $university->university_start = request('university_start');
        $university->university_end = request('university_end');
        
        $university->save();
        return Redirect::back();
    }

    public function College($id)
    {
        $college = User::find($id);
        // dd($university);
        return view('frontend.social.college', compact('college'));
    }
    public function profileCollegeUpdate(Request $request, $id)
    {
        $college = User::find($id);
        $college->college = request('college');
        $college->college_start = request('college_start');
        $college->college_end = request('college_end');
        
        $college->save();
        return Redirect::back();
    }

    public function Colschoollege($id)
    {
        $school = User::find($id);
        // dd($university);
        return view('frontend.social.school', compact('school'));
    }
    public function profileschoolUpdate(Request $request, $id)
    {
        $school = User::find($id);
        $school->school = request('school');
        $school->school_start = request('school_start');
        $school->school_end = request('school_end');
        
        $college->save();
        return Redirect::back();
    }
    public function nameEmail($id)
    {
        $nameEmail = User::find($id);
        return view('frontend.social.nameEmail', compact('nameEmail'));
    }
    public function nameEmailUpdate(Request $request, $id)
    {
        $nameEmail = User::find($id);
        $nameEmail->name = request('name');
        $nameEmail->nickName = request('nickName');
        $nameEmail->email = request('email');
        
        
        $nameEmail->save();
        return Redirect::back();
    }
    public function profilePhoto($id)
    {
        

        $profilePhoto = User::find($id);
        return view('frontend.social.profilePhoto', compact('profilePhoto'));
    }

    public function pProfilePhoto(Request $request, $id)
    {
        
        $image_name= time().'.'. $request->profilePhoto->extension();
        $request->profilePhoto->move(public_path('user'), $image_name);
        $path = "/user/".'.'.$image_name;
        $user = User::find($id);
        $user->profilePhoto = $path;
        $user->save();
        return redirect('frontend.social.profile');
        // dd($image_name);
    }

    public function userPost(Request $request)
    {
        $caption = $request->caption;
        $userId = Auth::user()->id;
        $image = $request->file('image');
        if($request->hasFile('image')){
            foreach($image as $item){
            $filename = $item->getClientOriginalName();
            
            $item->move(public_path('image_upload'), $filename);
            $files[]=$filename;
            }
            $images = implode($files);
        }
        $post = new userPost();
        $post->caption = $caption;
        $post->userId = $userId;
        $post->image = $images;
        $post->save();
        // dd($post);
        return redirect()->back();

    }
    public function likePost($id)
    {
      $postId = $id;
      $userId = Auth::user()->id;
      $reaction = new Reaction();
      $reaction->postId = $postId;
      $reaction->userId = $userId;
      $reaction->like = 1;
      $reaction->save();
      return back();
    }
    public function postComment(Request $request, $id)
    {
        $postId = $id;
        $userId = Auth::user()->id;
        $postComment = new postComment;
        $postComment->postId = $postId;
        $postComment->userId = $userId;
        $postComment->comment = $request->comment;
        $postComment->save();
        return back();
    }

    public function sharetimeline(Request $request, $id)
    {
        $postId = $id;
        $userId = Auth::user()->id;
        $postShare = new postShare;
        $postShare->postId = $postId;
        $postShare->userId = $userId;
        $postShare->timeLineShare = 1;
        $postShare->caption = $request->caption;
        $postShare->save();

        return back();
    }
}