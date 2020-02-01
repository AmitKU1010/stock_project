<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;

class TaskSchedule extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:TaskSchedule';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     * 
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }
 
    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
      $ff= DB::table('commisions')
      ->select('user_id', 'for_whom', 'invest_money', 'member_name','for_day', 'for_month', 'for_date', 'for_year', 'incentive','incentive_type')
       ->where('insertion_timing',"FIRST")
       ->get();  

       $current_date=date('Y-m-d');
       $current_day = date('d');
       $current_month = date('m');
       $current_year = date('Y');


       foreach($ff as $ffs)
       {
    if($current_month<=$ffs->for_month && $current_year<=$ffs->for_year)
    
        {
         echo "do nothing";
        }
        else
        {
            echo "i m runng";
        if($ffs->for_day==$current_day && $ffs->for_month==$current_month&& $ffs->for_year==$current_year)
        {
         echo "do nothing here also";
            
        }
        else
        {
         $for_whom =$ffs->for_whom;
         $user_id =$ffs->user_id;
         $for_month =$ffs->for_month;
         $for_date =$ffs->for_date;
         $for_day =$ffs->for_day;

         $for_year =$ffs->for_year;
         $incentive =$ffs->incentive;

        if($ffs->incentive_type==1)
        {
         $incentive_client =$ffs->invest_money*2.5/100;
     DB::table('commisions')->insert(['incentive' =>  $incentive_client,'for_whom' => $for_whom,'user_id' => $user_id,'for_month' => $current_month,'for_date' => $current_date,'for_day' => $current_day,'for_year' => $current_year,'incentive' => $incentive,'incentive_type' => 1] );
         
        }

         

       }
 
 }
 
       echo "success";                                                                                                                                                                                                     }              
      
    }



}
