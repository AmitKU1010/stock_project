<?php

namespace App\Http\Controllers;
use App\User;
use Hash;


use Illuminate\Http\Request;


class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.user');
    }

      public function store(Request $request)
    {
        // $All_request=$request->all();
        // $pass=Hash::make($request->input('password'));
        // $All_request=new User($All_request);
        // $All_request->save();



        $User=new User();

           $User->name=$request->input('name'); 
           $User->email=$request->input('email');       
           $User->password=Hash::make($request->input('password'));       
           $User->role_id=$request->input('memeber_type');       
           $User->sponser_id=$request->input('sponser_id');       
           $User->user_id=$request->input('user_id');       
           $User->gender=$request->input('gender');       
           $User->pan_no=$request->input('pan_no');       
           $User->phone_no=$request->input('phone_no');       
           $User->address=$request->input('address');       
           $User->state=$request->input('state');       
           $User->city=$request->input('city');       
           $User->nominee_name=$request->input('nominee_name');       
           $User->nominee_age=$request->input('nominee_age');      
           $User->bank_name =$request->input('bank_name');     
           $User->branch=$request->input('branch');       
           $User->account_number=$request->input('account_number');       
           $User->ifcs_code =$request->input('ifcs_code');      
           $User->joining_fee =$request->input('joining_fee');      
           $User->investment  =$request->input('investment');   
           $User->pancard_img =$request->input('pancard_img');      
           $User->ad_front =$request->input('ad_front');     
           $User->ad_back =$request->input('ad_back');    
           $User->save();

        return back()->with('success','User created successfully!');


    }

    public function view()
    {
        $users = User::all();
        return view('admin.user_view')->with('users',$users);
    }
 
}
