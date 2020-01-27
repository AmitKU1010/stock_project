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
       ->select('user_id', 'for_whom', 'invest_money', 'member_name', 'for_month', 'for_date', 'for_year', 'incentive')
       ->get();  
       foreach($ff as $ffs)
       {
         $inv_mon =$ffs->invest_money*5/100;
         echo $inv_mon;
         DB::table('commisions')->insert(['invest_money' =>  $inv_mon]);

       }
 
 
       echo "success";                                                                                                                                                                                                                     
      
    }
}
