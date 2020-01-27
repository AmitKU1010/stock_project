<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commisions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id')->nullable();
            $table->string('for_whom')->nullable();
            $table->string('invest_money')->nullable();
            $table->string('member_name')->nullable();
            $table->string('for_day')->nullable();
            $table->string('for_month')->nullable();
            $table->string('for_year')->nullable();
            $table->date('for_date')->nullable();
            $table->string('incentive')->nullable();
            $table->string('incentive_type')->nullable();

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
        Schema::dropIfExists('commisions');
    }
}
