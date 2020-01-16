<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
class Role extends Model
{
     use SoftDeletes;

    protected $guarded = [];
    protected $dates = ['deleted_at'];

     protected $fillable = [
        '_token','created_at', 'updated_at','deleted_at',];

}
