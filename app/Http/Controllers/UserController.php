<?php
namespace App\Http\Controllers;
use App\User;
use App\Commission;
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
     $request->validate([
    'name' => 'required',
    'email' => 'required|unique:users',
    'name' => 'required',
    'profile_image' => 'required',
    'pancard_img' => 'required',
    'ad_front' => 'required',
    'ad_back' => 'required',
      ]); 

           $User=new User();
           $User->name=$request->input('name'); 
           $User->email=$request->input('email');  
           $User->joining_date=$request->input('joining_date');       
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




       $timestamp = strtotime($User->joining_date);

       $day = date('d', $timestamp);

       $joining_fee_am=$request->input('joining_fee');

       if ($day >= 1 && $day <=10)
       {
          $incetive=($joining_fee_am*4/100);
       }

        if ($day >= 10 && $day <=15)
       {
          $incetive=($joining_fee_am*2/100);
       }

        if ($day >= 15 && $day <=20)
       {
          $incetive=($joining_fee_am*1/100);
       }

        if ($day >= 20 && $day <=31)
       {
        $incetive=0;
       }




       dd($day);

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
