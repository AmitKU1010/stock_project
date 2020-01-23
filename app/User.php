<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'email', 'email_verified_at','joining_date', 'password', 'role_id', 'sponser_id', 'user_id', 'gender', 'pan_no', 'phone_no', 'address', 'state', 'city', 'nominee_name', 'nominee_age', 'bank_name', 'branch', 'account_number', 'ifcs_code', 'joining_fee', 'investment','profile_image', 'pancard_img', 'ad_front', 'ad_back', 'remember_token', 'created_at', 'updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
