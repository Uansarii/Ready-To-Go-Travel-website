<?php

namespace App\Http\Controllers;


use Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\trips;
use App\Models\reviews;
use Illuminate\Support\Facades\DB;
use TheSeer\Tokenizer\Exception;
class NavigationController extends Controller
{
    public function package()
    {
        if(Auth::check()){
            $pkg = DB::select('select * from packages');
            $profile = DB::select('select * from team');
            return view('packages',['package'=>$pkg,'pro'=>$profile]);
        }else{
            return redirect('login')->withError('Ese to nai chalega');
        }    
    }

    public function bookings(Request $request)
    {
        
        if(Auth::check()){
            return view('bookings',['place'=>$request->place,'price'=>$request->price,'d_date'=>$request->d_date,'r_date'=>$request->r_date,'is_customized'=>$request->is_customized]);
        }else{
            return redirect('login')->withError('Ese to nai chalega');
        }
        
    }


    public function customized_bookings(Request $request){
      //  $user = $request->d_date;
        if(Auth::check()){
            return view('bookings',['place'=>$request->dest,'price'=>$request->price,'d_date'=>$request->d_date,'r_date'=>$request->r_date,'is_customized'=>$request->is_customized]);
        }else{
            return redirect('login')->withError('Ese to nai chalega');
        }
    }
    public function bookings_post(Request $request)
    {
        

    

        $validator = \Validator::make($request->all(), [
            'cnic' => 'digits_between:13,13',
            'phoneno' => 'digits_between:11,11'
        ]);
    
        if ($validator->fails()) {
            return redirect(route('bookings',['place'=>$request->place,'d_date'=>$request->d_date,'r_date'=>$request->r_date, 'price'=>$request->price,'is_customized'=>$request->is_customized]))->withInput()->withErrors($validator);
        } 

        
        trips::create([
            'firstname'=> $request->firstname,
            'lastname'=> $request->lastname,
            'cnic'=>$request->cnic,
            'phoneno'=>$request->phoneno,
            'email'=> $request->email,
            'age'=>  $request->age,
            'adults'=> $request->adults,
            'children'=>$request->children,
            'dest'=>$request->place,
            'price'=>$request->price,
            'd_date'=>$request->d_date,
            'r_date'=>$request->r_date,
            'is_customized'=>$request->is_customized
        ]);

        $details = [
            'title' => 'Thank you for the booking!',
            'body' => 'Hello '.$request->firstname.'. You have booked a trip for 
            '.$request->place.' departing on '.$request->d_date.' on a budget of '.$request->price.' PKR'
        ];
       
        \Mail::to($request->email)->send(new \App\Mail\Emails($details));
      
            return view('confirm',['location'=>$request->place,'price'=>$request->price]);
       
        
        
        
    }

    public function contact()
    {
        if(Auth::check()){
            
            return view('contact');
        }else{
            return redirect('login')->withError('Ese to nai chalega');
        }
        
    }

    public function contact_post(Request $request)
    {

        $details = [
            'title' => 'A new customer!',
            'body' => "Hello Shehryar Saqib. You have been contacted by ".$request->name." with a message: ".$request->message,

        ];
        \Mail::to('shehryarsaqib9@gmail.com')->send(new \App\Mail\Emails($details));
        return redirect('welcome');


    }

    public function reservations()
    {
        
        if(Auth::check()){
            $reservations = DB::select("select * from usertrips JOIN assets ON usertrips.dest=assets.dest WHERE email='".Auth::user()->email."'");
    
          return view('reservations',['reservations'=>$reservations]);
        }else{
            return redirect('login')->withError('Ese to nai chalega');
        }
        
    }

    public function destroy(Request $request) 
       {
        $user = trips::where('id', $request->id)->firstorfail()->delete();
        return redirect('reservations');
       }

       public function destroy_review(Request $request) 
       {
        $destroy = reviews::where('id', $request->id)->firstorfail()->delete();
        return redirect('adminreviews');
       }


    public function terms(){
        if (Auth::check()){
            return view('terms');
        } else {
            return view('auth.login');   
        }
    }

    public function explore(){
            return view('explore');
    }

    public function explore_forms(Request $request){
       
        $details = [
            'title' => 'Thank you!',
            'body' => "Hello ".$request->firstname." ".$request->lastname.". You have subscribed to our newsletter, you will be updated with every notification."
        ];
       
        \Mail::to($request->email)->send(new \App\Mail\Emails($details));
        return redirect('welcome');
      
}


    public function faq(){
        if (Auth::check()){
            $reviews = DB::select("select * from reviews");
            return view('faq',['reviews'=>$reviews]);
        } else {
            return view('auth.login');   
        }
    }

    public function advertisement(){
        if (Auth::check()){
            return view('advertisement');
        } else {
            return view('auth.login');   
        }
    }

    public function faq_post(Request $request){
        
        reviews::create([
            'name'=> Auth::user()->name,
            'description'=> $request->description,
            'date'=>date('Y-m-d H:i:s'),
        ]);

        return redirect('faq');
         
        
    }


    public function home(){

        return view('home');
    }

    public function customized(){

        return view('customized');
    }

    public function about(){
        if(Auth::check()){
            return view('about');   
        }else{
            return view('auth.login');
        }
    }
    
}

