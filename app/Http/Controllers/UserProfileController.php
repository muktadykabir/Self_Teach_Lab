<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserProfile;
use App\Models\User;

class UserProfileController extends Controller
{
    public function adduser()
    {   
        $users = UserProfile::all();
        $profiles = User::all();
        return view('Userprofile.updateprofile',compact('users','profiles'));
    }
    public function profile(){
        $users=UserProfile::all();
        $profiles=User::all();
        return view('UserProfile.profile',compact('users','profiles'));
    }

    public function storeUserData(Request $request)
    {   
        $first_name =$request->first_name;
        $last_name =$request->last_name;
        $number =$request->number;
        $dateofbirth =$request->dateofbirth;
        $address1 =$request->address1;
        $address2 =$request->address2;
        $state =$request->state;
        $country =$request->country;
        $profileimage =$request->file('file');
        $profileimageName = time().'.'.$profileimage->extension();
        $profileimage->move(public_path('images'),$profileimageName);
        
        $user = new UserProfile();
        $user->first_name =$first_name;
        $user->last_name =$last_name;
        $user->number =$number;
        $user->dateofbirth =$dateofbirth;
        $user->address1 =$address1;
        $user->address2 =$address2;
        $user->state =$state;
        $user->country =$country;
       
        $user->profileimage = $profileimageName;
        $user->save();
        return back()->with('status','Profile Update Successfully!');


    }

    public function profileEdit($id)
    {
        $users =UserProfile::find($id);
        $users =UserProfile::all();
        $profiles =User::all();
        return view('UserProfile.editprofile',compact('users','profiles'));
    }
    public function updatedUser(Request $request){
        $first_name =$request->first_name;
        $last_name =$request->last_name;
        $number =$request->number;
        $dateofbirth =$request->dateofbirth;
        $address1 =$request->address1;
        $address2 =$request->address2;
        $state =$request->state;
        $country =$request->country;
        $profileimage =$request->file('file');
        $profileimageName = time().'.'.$profileimage->extension();
        $profileimage->move(public_path('images'),$profileimageName);

        $user = UserProfile::find($request->id);
        $user->first_name = $first_name;
        $user->last_name = $last_name;
        $user->number = $number;
        $user->dateofbirth = $dateofbirth;
        $user->address1 = $address1;
        $user->address2 = $address2;
        $user->state = $state;
        $user->country = $country;
        $user->profileimage = $profileimageName;
        $user->save();
        return back()->with('user_updated','User Profile Updated Successfully!');

    }

        public function deleteprofile()
     { 
           $users = UserProfile::all();
        return view('UserProfile.deleteprofile',compact('users'));
    }


    public function invoice()
   {   
       $users = UserProfile::all();
        return view('UserProfile.invoice',compact('users'));
    }


    public function billingInfo()
  {  
       $users = UserProfile::all();
        return view('UserProfile.billing-info',compact('users'));
    }

    
    public function security()
     {   
         $users = UserProfile::all();
         $profiles = User::all();
        return view('UserProfile.security',compact('users','profiles'));
    }
    
    public function payment()
    { 
          $users = UserProfile::all();
        return view('UserProfile.payment',compact('users'));
    }
    public function account()
    { 
          $users = UserProfile::all();
        return view('UserProfile.linkedaccount',compact('users'));
    }


}
