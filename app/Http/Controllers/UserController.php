<?php
namespace App\Http\Controllers;
use App\User;
use App\Commision;
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
        $associates=DB::table('users')->where('is_associate',2)->get();
        return view('admin.user')->with('associates',$associates);
    }
  
      public function store(Request $request)
    {
    //  $request->validate([
    // 'name' => 'required',
    // 'email' => 'required|unique:users',
    // 'name' => 'required',
    // 'profile_image' => 'required',
    // 'pancard_img' => 'required',
    // 'ad_front' => 'required',
    // 'ad_back' => 'required',
    //   ]); 
  
           $User=new User();
           $User->name=$request->input('name'); 
           $User->email=$request->input('email');  
           $User->joining_date=$request->input('joining_date');       
           $User->password=Hash::make($request->input('password'));       
           $User->is_associate=$request->input('is_associate');       
           $User->is_client=$request->input('is_client');       
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

      // //images starts
      // $realt = $request->file('profile_image');
      // $filenamet = time().'.'.$realt->getClientOriginalExtension();
      // $destinationPatht = public_path('/images/profile');
      // $realt->move($destinationPatht, $filenamet);
      // $User->profile_image=$filenamet;
      // //images ends  


      // //images starts
      // $realo = $request->file('pancard_img');
      // $filenameo = time().'.'.$realo->getClientOriginalExtension();
      // $destinationPatho = public_path('/images/pan');
      // $realo->move($destinationPatho, $filenameo);
      // $User->pancard_img=$filenameo;
      // //images ends     

      // //images starts
      // $realn = $request->file('ad_front');
      // $filenamen = time().'.'.$realn->getClientOriginalExtension();
      // $destinationPathn = public_path('/images/adhara_f');
      // $realn->move($destinationPathn, $filenamen);
      // $User->ad_front=$filenamen;
      // //images ends  

      
      // //images starts
      // $reale = $request->file('ad_back');
      // $filenamee = time().'.'.$reale->getClientOriginalExtension();
      // $destinationPathe = public_path('/images/adhara_b');
      // $reale->move($destinationPathe, $filenamee);
      // $User->ad_back=$filenamee;
      // //images ends  

  


       $timestamp = strtotime($User->joining_date);

       $jd=$request->input('joining_date'); 

        // $next_month = date('Y-m-d', strtotime('+1 month', strtotime($jd)));

       $day = date('d', $timestamp);

       $month = date('m', $timestamp);

       // $year = date('yy', $timestamp);

       // for next month year
       $final = date("Y-m-d", strtotime("+1 month", $timestamp));
       $nxdfgfdtm = strtotime($final);
       $year = date('yy', $nxdfgfdtm);
       // for next month year
       

       $nxtm = strtotime("next month");




       $next_month=date("m", $nxtm);









       $investment_amount=$request->input('investment');

       $sponser_id=$request->input('sponser_id');

       $role_id=$request->input('memeber_type');

       $is_associate=$request->input('is_associate');

       $is_client=$request->input('is_client');


 


       if($sponser_id=='ADMIN')
       {

        // If he is a associate
       if($is_associate==2 && $is_client==3)
       {

            if ($day >= 1 && $day <=10)
       {
          $incetive=($investment_amount*4/100);

          $incentive_5th_client=($incetive*2.5/100);

          $incentive_10th_assoc=($incetive*1.5/100);
       }

        if ($day >= 10 && $day <=15)
       {
          $incetive=($investment_amount*2/100);

          $incentive_5th_client=($incetive*2.5/100);

          $incentive_10th_assoc=($incetive*1.5/100);

       }

        if ($day >= 15 && $day <=20)
       {
          $incetive=($investment_amount*1/100);

          $incentive_5th_client=($incetive*2.5/100);

          $incentive_10th_assoc=($incetive*1.5/100);

       }

        if ($day >= 20 && $day <=31)
       {
        $incetive=0;
       }


       // for clinet
       if($incetive !=0)
       {
       $Commission= new Commision();
       $Commission->user_id = $request->input('user_id');
       $Commission->member_name = $request->input('name');
       $Commission->for_day = 5;
       $Commission->for_month = $next_month;
       $Commission->for_year = $year;
       $Commission->for_date = $request->input('joining_date');
       $Commission->incentive = $incentive_5th_client;
       $Commission->incentive_type = 1;
       $Commission->for_whom ='SELF CLIENT BONOUS';
       $Commission->invest_money =$request->input('investment');
       $Commission->insertion_timing ='FIRST';
       $Commission->save();

       // for clinet
 
       // for assoco
       if($Commission)
       {
       $Commission= new Commision();
       $Commission->user_id = $request->input('user_id');
       $Commission->member_name = $request->input('name');
       $Commission->for_day = 10;
       $Commission->for_month = $next_month;
       $Commission->for_year = $year;
       $Commission->for_date = $request->input('joining_date');
       $Commission->incentive = $incentive_10th_assoc;
       $Commission->incentive_type = 2;
       $Commission->for_whom ='SELF ASSOCIATE BONOUS';
       $Commission->invest_money =$request->input('investment');
       $Commission->insertion_timing ='FIRST';

       $Commission->save();
       }
       // for assoco


       }
        
       }


      //for client only(admin)
       if($is_client==3 && $is_associate==0)
       {


            if ($day >= 1 && $day <=10)
       {
          $incetive=($investment_amount*4/100);

          $incentive_5th_client=($incetive*2.5/100);

       }

        if ($day >= 10 && $day <=15)
       {
          $incetive=($investment_amount*2/100);

          $incentive_5th_client=($incetive*2.5/100);

       }

        if ($day >= 15 && $day <=20)
       {
          $incetive=($investment_amount*1/100);

          $incentive_5th_client=($incetive*2.5/100);

       }

        if ($day >= 20 && $day <=31)
       {
        $incetive=0;
       }


       // for clinet
       if($incetive !=0)
       {
       $Commission= new Commision();
       $Commission->user_id = $request->input('user_id');
       $Commission->member_name = $request->input('name');
       $Commission->for_day = 5;
       $Commission->for_month = $next_month;
       $Commission->for_year = $year;
       $Commission->for_date = $request->input('joining_date');
       $Commission->incentive = $incentive_5th_client;
       $Commission->incentive_type = 1;
       $Commission->for_whom ='SELF CLIENT BONOUS';
       $Commission->invest_money =$request->input('investment');
       $Commission->insertion_timing ='FIRST';

       $Commission->save();
       // for clinet
       }
         
       }

       }
 



       // else part starts (when the sponser id is not admin)

       else
       {

       $sponser_has_sponser=DB::table('users')
       ->where('user_id',$sponser_id)
       ->value('sponser_id');


       if($sponser_has_sponser!='' or $sponser_has_sponser='')
       {

        // If he is a associate
       if($is_associate==2 && $is_client==3)
       {

            if ($day >= 1 && $day <=10)
       {
          $incetive=($investment_amount*4/100);

          $incentive_5th_client=($incetive*2.5/100);

          $incentive_10th_assoc=($incetive*1.5/100);

          $incentive_10th_sponser_assoc=($incetive*0.5/100);

          $incentive_10th_sponser_assoc_has_assoc=($incetive*0.25/100);

       }

        if ($day >= 10 && $day <=15)
       {
          $incetive=($investment_amount*2/100);

          $incentive_5th_client=($incetive*2.5/100);

          $incentive_10th_assoc=($incetive*1.5/100);

          $incentive_10th_sponser_assoc=($incetive*0.5/100);

          $incentive_10th_sponser_assoc_has_assoc=($incetive*0.25/100);

       }

        if ($day >= 15 && $day <=20)
       {
          $incetive=($investment_amount*1/100);

          $incentive_5th_client=($incetive*2.5/100);

          $incentive_10th_assoc=($incetive*1.5/100);

          $incentive_10th_sponser_assoc=($incetive*0.5/100);

          $incentive_10th_sponser_assoc_has_assoc=($incetive*0.25/100);

       }

        if ($day >= 20 && $day <=31)
       {
        $incetive=0;
       }






       // for clinet
       if($incetive !=0)
       {
       $Commission= new Commision();
       $Commission->user_id = $request->input('user_id');
       $Commission->member_name = $request->input('name');
       $Commission->for_day = 5;
       $Commission->for_month = $next_month;
       $Commission->for_year = $year;
       $Commission->for_date = $request->input('joining_date');
       $Commission->incentive = $incentive_5th_client;
       $Commission->incentive_type = 1;
       $Commission->for_whom ='SELF CLIENT BONOUS';
       $Commission->invest_money =$request->input('investment');
       $Commission->insertion_timing ='FIRST';

       $Commission->save();

       // for clinet



       if($Commission)
       {
       // for assoco

       $Commission= new Commision();
       $Commission->user_id = $request->input('user_id');
       $Commission->member_name = $request->input('name');
       $Commission->for_day = 10;
       $Commission->for_month = $next_month;
       $Commission->for_year = $year;
       $Commission->for_date = $request->input('joining_date');
       $Commission->incentive = $incentive_10th_assoc;
       $Commission->incentive_type = 2;

       $Commission->for_whom ='SELF ASSOCIATE BONOUS';
       $Commission->invest_money =$request->input('investment');
       $Commission->insertion_timing ='FIRST';

       $Commission->save();
       // for assoco

       if($Commission)
       {
       // for sponer assoc
       $Commission= new Commision();
       $Commission->user_id = $request->input('sponser_id');
       $Commission->member_name = $request->input('name');
       $Commission->for_day = 10;
       $Commission->for_month = $next_month;
       $Commission->for_year = $year;
       $Commission->for_date = $request->input('joining_date');
       $Commission->incentive = $incentive_10th_sponser_assoc;
       $Commission->incentive_type = 3;
       $Commission->for_whom =$request->input('user_id');
       $Commission->invest_money =$request->input('investment');
       $Commission->insertion_timing ='FIRST';

       $Commission->save();
          // for sponer assoc
       if($sponser_has_sponser!='')
       {
       if($Commission)
       {
       // for sponer assoc has assoc
       $Commission= new Commision();
       $Commission->user_id = $sponser_has_sponser;
       $Commission->member_name = $request->input('name');
       $Commission->for_day = 10;
       $Commission->for_month = $next_month;
       $Commission->for_year = $year;
       $Commission->for_date = $request->input('joining_date');
       $Commission->incentive = $incentive_10th_sponser_assoc_has_assoc;
       $Commission->incentive_type = 4;
       $Commission->for_whom =$request->input('user_id');
       $Commission->invest_money =$request->input('investment');
       $Commission->insertion_timing ='FIRST';

       $Commission->save();
       // for sponer assoc has assoc
     }
   }
   }
 }
}
}

    // If he is a client
       if($is_associate==0 && $is_client==3)
       {
            if ($day >= 1 && $day <=10)
       {

          $incetive=($investment_amount*4/100);

          $incentive_5th_client=($incetive*2.5/100);

          $incentive_10th_sponser_assoc=($incetive*1.5/100);

          $incentive_10th_sponser_assoc_has_assoc=($incetive*0.5/100);

       }

        if ($day >= 10 && $day <=15)
       {
          $incetive=($investment_amount*2/100);

          $incentive_5th_client=($incetive*2.5/100);

          $incentive_10th_sponser_assoc=($incetive*1.5/100);

          $incentive_10th_sponser_assoc_has_assoc=($incetive*0.5/100);

       }

        if ($day >= 15 && $day <=20)
       {
          $incetive=($investment_amount*1/100);

          $incentive_5th_client=($incetive*2.5/100);

          $incentive_10th_sponser_assoc=($incetive*1.5/100);

          $incentive_10th_sponser_assoc_has_assoc=($incetive*0.5/100);

       }

        if ($day >= 20 && $day <=31)
       {
        $incetive=0;
       }

       // for clinet
       if($incetive !=0)
       {
       $Commission= new Commision();
       $Commission->user_id = $request->input('user_id');
       $Commission->member_name = $request->input('name');
       $Commission->for_day = 5;
       $Commission->for_month = $next_month;
       $Commission->for_year = $year;
       $Commission->for_date = $request->input('joining_date');
       $Commission->incentive = $incentive_5th_client;
       $Commission->incentive_type = 1;
       $Commission->for_whom ='SELF CLIENT BONOUS';
       $Commission->invest_money =$request->input('investment');
       $Commission->insertion_timing ='FIRST';

       $Commission->save();

       // for clinet

       if($Commission)
       {
       // for sponer assoc
       $Commission= new Commision();
       $Commission->user_id = $request->input('sponser_id');
       $Commission->member_name = $request->input('name');
       $Commission->for_day = 10;
       $Commission->for_month = $next_month;
       $Commission->for_year = $year;
       $Commission->for_date = $request->input('joining_date');
       $Commission->incentive = $incentive_10th_sponser_assoc;
       $Commission->incentive_type = 5;
       $Commission->for_whom =$request->input('user_id');
       $Commission->invest_money =$request->input('investment');
       $Commission->insertion_timing ='FIRST';

       $Commission->save();
          // for sponer assoc
       if($sponser_has_sponser!='')
       {
       if($Commission)
       {
       // for sponer assoc has assoc
       $Commission= new Commision();
       $Commission->user_id = $sponser_has_sponser;
       $Commission->member_name = $request->input('name');
       $Commission->for_day = 10;
       $Commission->for_month = $next_month;
       $Commission->for_year = $year;
       $Commission->for_date = $request->input('joining_date');
       $Commission->incentive = $incentive_10th_sponser_assoc_has_assoc;
       $Commission->incentive_type = 6;
       $Commission->for_whom =$request->input('user_id');
       $Commission->invest_money =$request->input('investment');
       $Commission->insertion_timing ='FIRST';

       $Commission->save();
       // for sponer assoc has assoc
     }
   }
   }
}
}
}
}

      $User->save();
      return back()->with('success','User created successfully!');


    }

    public function view()
    {
        // $users = User::where('id', '!=', auth()->id())->get();

        $users = DB::table('users')->where([
    ['id', '!=',  auth()->id()],
    ['is_associate', '=', 2],])
        ->get();
        return view('admin.user_view')->with('users',$users);
    }

     public function client_list()
    {

        $users = DB::table('users')->where([
    ['id', '!=',  auth()->id()],
    ['is_client', '=', 3],])
        ->get();
        return view('admin.client_view')->with('users',$users);
    }

    public function edit_profile($id)
    {
      $users = User::where('user_id',$id)->get();
      return view('admin.profile')->with('users',$users);
    }

        public function incentive()
    {

       $current_date=date('Y-m-d');
       $current_day = date('d');

       $current_day_into_number = (int)$current_day;

       $current_month = date('m');
       $current_year = date('Y');

 

        
   
        $incentives=DB::table('commisions')
        ->join('users','commisions.user_id','users.user_id')
         ->select('commisions.user_id','users.name', DB::raw('SUM(investment) as inv'),DB::raw('SUM(incentive) as inc'))
          ->where([
    ['commisions.for_month', '<=', $current_month],
    ['commisions.for_year', '<=', $current_year],['commisions.for_day', '<=', $current_day_into_number],])
         ->groupBy('commisions.user_id','users.name')
        ->get();

 

        return view('admin.incentive')->with('incentives',$incentives);
    }

 

       public function monthwise_incentive($id)
    {
      $monthwise_incentives = DB::table('commisions')
        ->join('users','commisions.user_id','users.user_id')
         ->select('commisions.for_month','commisions.for_year','commisions.user_id','users.name', DB::raw('SUM(investment) as inv'),DB::raw('SUM(incentive) as inc'))
         ->groupBy('commisions.user_id','users.name','commisions.for_month','commisions.for_year')
         ->where('commisions.user_id',$id)
        ->get();

 
      return view('admin.monthwise_incentives')->with('monthwise_incentives',$monthwise_incentives);
    }
 
       public function destroy($id)
    {
        $users=DB::table('users')->where('user_id',$id);
        $users->delete();
        return back()->with('success','Department created successfully!');
    }


 
}
