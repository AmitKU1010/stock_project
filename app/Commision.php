<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
class Commision extends Model
{

   

     protected $fillable = [
        'id', 'user_id', 'member_name', 'for_month', 'for_date','for_year', 'incentive', 'created_at', 'updated_at',];

}
