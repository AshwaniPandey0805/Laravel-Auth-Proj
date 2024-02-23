<?php

namespace App\Http\Controllers;

use App\Models\User;
// use Illuminate\Contracts\Session\Session;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
// use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Redis;
// use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Session;
use App\Models\Image;

class AuthManager extends Controller
{

    
    //    
    /**
     * Method login
     *
     * @return void
     */
    function login(){

        if(Auth::check()){
            return redirect(route('registerPage'))->with('success', 'Alreday Logined');
        }
        return view('login');
    }
    
    /**
     * Method register
     *
     * @return void
     */
    function register(){
        if(Auth::check()){
            return redirect(route('registerPage'))->with('success', 'Alreday Logined');
        }
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
            return redirect()->intended(route('registerPage'));
        }

        return redirect(route('login'))->with('error', 'Login detials are not valid');

    }
    
    /**
     * Method registerPost
     *
     * @param Request $request [explicite description]
     *
     * @return void
     */
    function registerPost(Request $request){
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'phoneNumber' => 'required',
            'imageUpload' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'profile' => 'required',

        ]);

        $data['first_name'] = $request->firstName;
        $data['last_name'] = $request->lastName;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $data['_role'] = $request->profile;
        // dd($data['_role']);


        $image = $request->file('imageUpload');
        $imageName = $image->getClientOriginalName();

        $image->storeAs('public/assets', $imageName);

        // Save the image path in the database
        $data['_image'] = 'storage/assets/' . $imageName;

        

        $password['password'] = $request->password;
        $password['cpassword'] = $request->cpassword;

        
        /**
         * validating user password
         */
        if($password['password'] !== $password['cpassword']){
            return redirect(route('register'))->with('error', 'Password not matched!');
        }else{
            $user = User::create($data); 
            if(!$user){
                return redirect(route('register'))->with('error', 'Resgister failed! Please try again');
            }
             
            return redirect('/login')->with('success', 'Registration Successfull ✌️');
        }

    }
    
    /**
     * Method logout
     *
     * @return void
     */
    function logout(){
        Auth::logout();
        Session::flush();
        

        return redirect(route('login'))->with('success', "Logout Successfully");
    }
}
