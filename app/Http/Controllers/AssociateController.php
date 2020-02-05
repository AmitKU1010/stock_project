<?php
namespace App\Http\Controllers;
use App\User;
use App\Commision;
use Hash;
use DB;
use Auth;
use Illuminate\Http\Request;
class AssociateController extends Controller
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

       $Auth_user_id=Auth::user()->user_id;

        $incentives=DB::table('commisions')
        ->join('users','commisions.user_id','users.user_id')
         ->select('commisions.user_id','users.name', DB::raw('SUM(investment) as inv'),DB::raw('SUM(incentive) as inc'))
          ->where([
    ['commisions.for_date', '<=', $current_date],['users.user_id', '=',$Auth_user_id],])
         ->groupBy('commisions.user_id','users.name')
        ->get();
        return view('admin.incentive')->with('incentives',$incentives);
    }
 
 

       public function monthwise_incentive()
    {

       $current_date=date('Y-m-d');
       $current_day = date('d');
       $current_day_into_number = (int)$current_day;
       $current_month = date('m');
       $current_year = date('Y');
       $Auth_user_id=Auth::user()->user_id;

     $monthwise_incentives = DB::table('commisions')
        ->join('users','commisions.user_id','users.user_id')
         ->select(DB::raw('YEAR(for_date) year, MONTH(for_date) month'),'commisions.user_id','users.name','users.investment as inv',DB::raw('SUM(incentive) as inc'))
         ->groupBy('commisions.user_id','users.name','year','month','inv')
         ->where([['commisions.for_date', '<=', $current_date],['commisions.user_id', '=', $Auth_user_id],])
         ->orderBy('year', 'DESC')
        ->get();
  
 
      return view('associate.associate_incentive')->with('monthwise_incentives',$monthwise_incentives);
    }

    public function monthwise_incentive_details($id,$month,$year)
    {
      $current_date=date('Y-m-d');
       $current_day = date('d');

       $current_day_into_number = (int)$current_day;

       $current_month = date('m');
       $current_year = date('Y');

       $month_into_num = (int)$month;
       
 
   $monthwise_incentive_details= DB::table('commisions')
        ->join('users','commisions.user_id','users.user_id')
         ->select(DB::raw('YEAR(for_date) year, MONTH(for_date) month'),'commisions.user_id','users.name','users.investment as inv','commisions.*')
         
         ->where([['commisions.for_date', '<=', $current_date],['commisions.user_id', '=', $id],['for_month', '=', $month_into_num],['for_year', '=', $year],])
        ->get();

         
      return view('associate.associate_monthwise_incentive_details')->with('monthwise_incentive_details',$monthwise_incentive_details);
    }

    public function edit_user($id)
    {
        $user=DB::table('users')->where('user_id',$id)->get();

        $users_two=DB::table('users')->where([['is_associate', '=', 2],])->get();


      return view('admin.edit_user',['user'=>$user,'users_two'=>$users_two]);


    }

    public function show_user_tree($id)
    {
     $user_trees=
     DB::table('users')->where([['sponser_id', '=', $id],])->get();

    
     return view('admin.user_tree')->with('user_trees',$user_trees);

    }

        public function show_user_tree_client($id)
    {
     $user_trees=
     DB::table('users')->where([['sponser_id', '=', $id],['is_client', '=', 2],])->get();

    
     return view('admin.user_tree')->with('user_trees',$user_trees);

    }
 
       public function destroy($id)
    {
        $users=DB::table('users')->where('user_id',$id);
        $users->delete();
        return back()->with('success','Department created successfully!');
    }


 
}
