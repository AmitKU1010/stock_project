<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
class Commision extends Model
{

   

     protected $fillable = [
        'id','for_whom','user_id','member_name','for_day','for_month','for_year','for_date', 'incentive','incentive_type','created_at', 'updated_at',];

}
