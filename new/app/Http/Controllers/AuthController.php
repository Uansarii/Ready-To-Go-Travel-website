<?php

namespace App\Http\Controllers;

use Redirect;
use Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\trips;
use Illuminate\Support\Facades\DB;
class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function adminlogin(){
        return view('auth.adminlogin');
    }

    public function admin_dashboard(Request $request){

        $credentials=$request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

      //  $bool = Auth::user()->admin;

      $trips = DB::select('select * from usertrips');


        if(Auth::attempt($request->only('email','password'))){
            if (Auth::user()->admin==true){
                return view('admindashboard',['trips'=>$trips]);
            }
            
        }
        return Redirect::back()->withErrors($credentials);
        
        
    }


    public function login(Request $request){
        $credentials=$request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($request->only('email','password'))){
            return redirect('welcome');
        }
        return Redirect::back()->withErrors($credentials);

    }
    public function register_view()
    {
        return view('auth.register');
    }


   

   

    public function register(Request $request){
        $request -> validate([
            'name'=> 'required',
            'email'=> 'required|unique:users|email',
            'password'=> 'required|',
        ]);


        User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> \Hash::make($request->password),
            'admin'=> false
        ]);

        if(\Auth::attempt($request->only('email','password'))){
            return redirect('login');
        }

        return redirect('register')->withError('Ese to nai chalega');
    }

   

    public function confirm(){

        return view('confirm');
    }

    public function welcome(){
      
        return view('welcome');
        
    }

    public function adminreviews(){
        $reviews = DB::select("select * from reviews");
        return view('adminreviews',['reviews'=>$reviews]);

    }

    public function admindash(){

        $trips = DB::select('select * from usertrips');

        return view('admindashboard',['trips'=>$trips]);
        
    }
    
    public function logout(){
        \Session::flush();
        \Auth::logout();
        return redirect('');
    }


}
