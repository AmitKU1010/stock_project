<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role_id');
            $table->string('sponser_id')->nullable();
            $table->string('user_id')->nullable();
            $table->string('gender')->nullable();
            $table->string('pan_no')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('address')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('nominee_name')->nullable();
            $table->integer('nominee_age')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('branch')->nullable();
            $table->string('account_number')->nullable();
            $table->string('account_type')->nullable();
            $table->string('ifcs_code')->nullable();
            $table->string('joining_fee')->nullable();
            $table->string('investment')->nullable();
            $table->text('pancard_img')->nullable();
            $table->text('ad_front')->nullable();
            $table->text('ad_back')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
