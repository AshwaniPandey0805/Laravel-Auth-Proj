<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
// use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Redis;
// use Laravel\Sanctum\HasApiTokens;

class AuthManager extends Controller
{

    
    //    
    /**
     * Method login
     *
     * @return void
     */
    function login(){
        return view('login');
    }
    
    /**
     * Method register
     *
     * @return void
     */
    function register(){
        return view('register');
    }
    
    /**
     * Method loginPost
     *
     * @param Request $request [explicite description]
     *
     * @return void
     */
    function loginPost(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            return redirect()->intended(route('home'));
        }

        return redirect(route('login'))->with('error', 'Login detials are not valid');

    }

    function registerPost(Request $request){
        $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            // 'cpassword' => 'required'
        ]);

        $data['name'] = $request->username;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        // $data['cpassword'] = Hash::make($request->cpassword);

        // if($data['pasword'] === $data['cpassword']){
        //     $user = User::created($data);
        // }else{
        //     return redirect(route('register'))->with('error', 'Password not matched!');
        // }

        $user = User::create($data);

        if(!$user){
            return redirect(route('register'))->with('error', 'Resgister failed! Please try again');
        }

        return redirect(route('login'))->with('success', 'Registration Successfull ✌️');
    }

    function logout(){
        Session::flush();
        Auth::logout();

        return redirect(route('login'))->with('success', "Logout Successfully");
    }
}
