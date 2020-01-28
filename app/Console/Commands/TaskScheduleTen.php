<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;


class TaskScheduleTen extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:TaskScheduleTen';

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
    if($current_month>=$ffs->for_month && $current_year>=$ffs->for_year)
        {
         echo "do nothing";
        }
        else
        {
            echo "i m runng";
        if($ffs->for_day==$current_day && $ffs->for_month==$current_month&& $ffs->for_year==$current_year)
        {
            
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


         if($ffs->incentive_type==2)
        {
    $incentive_client =$ffs->invest_money*1.5/100;
     DB::table('commisions')->insert(['incentive' =>  $incentive_client,'for_whom' => $for_whom,'user_id' => $user_id,'for_month' => $for_month,'for_date' => $for_date,'for_day' => $for_day,'for_year' => $for_year,'incentive' => $incentive,'incentive_type' => 2]);
        }

         if($ffs->incentive_type==3)
        {
    $incentive_client =$ffs->invest_money*0.5/100;
     DB::table('commisions')->insert(['incentive' =>  $incentive_client,'for_whom' => $for_whom,'user_id' => $user_id,'for_month' => $for_month,'for_date' => $for_date,'for_day' => $for_day,'for_year' => $for_year,'incentive' => $incentive,'incentive_type' => 3] );
        }

         if($ffs->incentive_type==4)
        {
    $incentive_client =$ffs->invest_money*0.25/100;
     DB::table('commisions')->insert(['incentive' =>  $incentive_client,'for_whom' => $for_whom,'user_id' => $user_id,'for_month' => $for_month,'for_date' => $for_date,'for_day' => $for_day,'for_year' => $for_year,'incentive' => $incentive,'incentive_type' => 4] );
        }

          if($ffs->incentive_type==5)
        {
    $incentive_client =$ffs->invest_money*1.5/100;
     DB::table('commisions')->insert(['incentive' =>  $incentive_client,'for_whom' => $for_whom,'user_id' => $user_id,'for_month' => $for_month,'for_date' => $for_date,'for_day' => $for_day,'for_year' => $for_year,'incentive' => $incentive,'incentive_type' => 5] );
        }
           if($ffs->incentive_type==6)
        {
    $incentive_client =$ffs->invest_money*0.5/100;
     DB::table('commisions')->insert(['incentive' =>  $incentive_client,'for_whom' => $for_whom,'user_id' => $user_id,'for_month' => $for_month,'for_date' => $for_date,'for_day' => $for_day,'for_year' => $for_year,'incentive' => $incentive,'incentive_type' => 6] );
        }
       }
 
 }
 
       echo "success";                                                                                                                                                                                                     }              
      
    }

}
