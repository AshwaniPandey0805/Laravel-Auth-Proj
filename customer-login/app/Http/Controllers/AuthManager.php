<?php

namespace App\Http\Controllers;

use App\Models\RegisterProfile;
use App\Models\Role;
// use App\Models\User;
// use Illuminate\Contracts\Session\Session;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Session;


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
            // $users = User::all(); // Retrieve all users from the database
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
            'profile' => 'required'

        ]);

        $data['first_name'] = $request->firstName;
        $data['last_name'] = $request->lastName;
        $data['email_id'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $data['phone_number'] = $request->phoneNumber;
        $data['role_id_fk'] = $request->profile;
        // dd($data['_role']);


        // $image = $request->file('imageUpload');
        // $imageName = $image->getClientOriginalName();

        // $image->storeAs('public/assets', $imageName);

        // Save the image path in the database
        // $data['_image'] = 'storage/assets/' . $imageName;

        

        $password['password'] = $request->password;
        $password['cpassword'] = $request->cpassword;

        // $data['role_name'];
        // dd($data);
        if($data['role_id_fk'] === "1"){
            $role['role_name'] = 'Admin';
        }

        // dd($role['role_name']);

        
        /**
         * validating user password
         * 
         */
        if($password['password'] !== $password['cpassword']){
            return redirect(route('register'))->with('error', 'Password not matched!');
        }else{
            $role = Role::create($role);
            $user = RegisterProfile::create($data); 
            
            if(!$user){
                return redirect(route('register'))->with('error', 'Resgister failed! Please try again');
            }
             
            return redirect('/login')->with('success', 'Registration Successfull ✌️');
        }

    }

    // public function index()
    // {
    //     $users = User::all(); // Retrieve all users from the database
    //     return view('users.index', ['users' => $users]); // Pass the users data to the Blade view
    // }

    
    
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
