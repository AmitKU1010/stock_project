<?php

namespace App\Http\Controllers;

use App\User;
use Hash;
use DB;
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
        $associates=DB::table('users')->where('role_id',2)->get();
        return view('admin.user')->with('associates',$associates);
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

      //images starts
      $realt = $request->file('profile_image');
      $filenamet = time().'.'.$realt->getClientOriginalExtension();
      $destinationPatht = public_path('/images/profile');
      $realt->move($destinationPatht, $filenamet);
      $User->profile_image=$filenamet;
      //images ends  


      //images starts
      $realo = $request->file('pancard_img');
      $filenameo = time().'.'.$realo->getClientOriginalExtension();
      $destinationPatho = public_path('/images/pan');
      $realo->move($destinationPatho, $filenameo);
      $User->pancard_img=$filenameo;
      //images ends    

        //images starts
      $realn = $request->file('ad_front');
      $filenamen = time().'.'.$realn->getClientOriginalExtension();
      $destinationPathn = public_path('/images/adhara_f');
      $realn->move($destinationPathn, $filenamen);
      $User->ad_front=$filenamen;
      //images ends  


        //images starts
      $reale = $request->file('ad_back');
      $filenamee = time().'.'.$reale->getClientOriginalExtension();
      $destinationPathe = public_path('/images/adhara_b');
      $reale->move($destinationPathe, $filenamee);
      $User->ad_back=$filenamee;
      //images ends  

      $User->save();
      return back()->with('success','User created successfully!');


    }

    public function view()
    {
        $users = User::where('id', '!=', auth()->id())->get();

        $users=DB::table('users')->join('roles','users.role_id','roles.id')
        ->where('users.id','!=',auth()->id())->get();
        return view('admin.user_view')->with('users',$users);
    }

    public function edit_profile($id)
    {
       $users = User::where('user_id',$id)->get();

      
      return view('admin.profile')->with('users',$users);
    }
 
       public function destroy($id)
    {
           $users=DB::table('users')->where('user_id',$id);
       $users->delete();
        return back()->with('success','Department created successfully!');


    }
 
}
