<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
class Commission extends Model
{
     use SoftDeletes;

    protected $guarded = [];
    protected $dates = ['deleted_at'];

     protected $fillable = [
        'id', 'user_id', 'member_name', 'for_month', 'for_date', 'incentive', 'created_at', 'updated_at',];

}
