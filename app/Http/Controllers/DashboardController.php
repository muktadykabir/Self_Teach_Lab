<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\User;
use App\Models\UserProfile;

class DashboardController extends Controller
{
    public function dashboard(Request $request)
    {
         $users = UserProfile::all();
        return view('dashboard',compact('users'));
    }
    public function profilepost(Request $request)
    {   
        $users= User:: find($request);
        $users->first_name=$request->first_name;
        $users->last_name=$request->last_name;
        $users->email=$request->email;
        // $users->update();
        return redirect('editprofile')->with('status','Profile updated Successfully');
 
    }
    public function profiledelete( $id)
    {   
        $data->User::Find($id);
        $data->delete();

         return redirect()->back()->with('status','Profile deleted Successfully');
    }
    // public function profilepost(Request $request)
    // {   

    //     Profile::update([
        
    //     $request->name = $request->input('name'),
    //     $request->email = $request->input('email'),
        
    //     ]);
    //      return redirect()->back()->with('status','Profile Updated Successfully');
    // }

    
    public function editprofile()
    {   
        $users = UserProfile::all();
        return view('UserProfile.updateprofile',compact('users'));
    }


    public function deleteprofile()
     { 
           $users = UserProfile::all();
        return view('dashboard.deleteprofile',compact('users'));
    }


    public function invoice()
   {   
       $users = UserProfile::all();
        return view('dashboard.invoice',compact('users'));
    }


    public function billingInfo()
  {  
       $users = UserProfile::all();
        return view('dashboard.billing-info',compact('users'));
    }

    
    public function security()
     {   
         $users = UserProfile::all();
         $profiles = User::all();
        return view('dashboard.security',compact('users','profiles'));
    }
    
    public function payment()
    { 
          $users = UserProfile::all();
        return view('dashboard.payment',compact('users'));
    }
    public function account()
    { 
          $users = UserProfile::all();
        return view('dashboard.linkedaccount',compact('users'));
    }
    
}
