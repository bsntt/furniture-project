<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    //
    public function  showLoginForm()
    {
        return view('auth.login');
    }

  public function login( Request $request)
    {
       //validate
       $request-> validate([
        'email' =>'required',
        'password' => 'required'
       ]);
       $credentials = $request->only('email', 'password');
       if(Auth::attempt($credentials)){
          return redirect()->route('home'); 
       }
       return redirect('login')->with("error", "Login details are not valid");
    }


    // signup
    public function showSignupForm()
    {
        return view('auth.signup');
    }

   
       public function signup(Request $request){
          $request-> validate([
         'name' => 'required',
         'email' =>'required |unique:users',
         'gender' =>'required',
         'phone' => 'required',
          'password' => 'required|confirmed|min:8',
       ]);
       $data['name'] = $request ->name;
        $data['email'] = $request ->email;
         $data['phone'] = $request ->phone;
          $data['gender'] = $request ->gender;
         $data['password'] = Hash::make($request ->password) ;
         $user= User::create($data);
         if(!$user){
              return redirect('register')->with("error", "Registration fail try again");
         }
         return redirect('login')->with("success", "Registration success , Login to access");
    }

    function logout(){
        Session::flush();
        Auth::logout();
        return redirect('login');
    }
     

    

}
