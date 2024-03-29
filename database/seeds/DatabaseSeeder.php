<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    { 
        // $this->call(UsersTableSeeder::class);
            DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'is_associate' => 2,
            'is_client' => 0,
            'sponser_id' => Str::random(10),
            'user_id' => Str::random(10),
            'gender' => Str::random(10),
            'pan_no' => Str::random(10),
            'phone_no' => Str::random(10),
            'address' => Str::random(10),
            'state' => Str::random(10),
            'city' => Str::random(10),
            'nominee_name' => Str::random(10),
            'bank_name' => Str::random(10),
            'branch' => Str::random(10),
            'account_number' => Str::random(10),
            'account_type' => Str::random(10),
            'ifcs_code' => Str::random(10),
            'joining_fee' => Str::random(10),
            'investment' => 1000,
        ]);


            DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'is_associate' => 2,
            'is_client' => 3,
            'sponser_id' => Str::random(10),
            'user_id' => Str::random(10),
            'gender' => Str::random(10),
            'pan_no' => Str::random(10),
            'phone_no' => Str::random(10),
            'address' => Str::random(10),
            'state' => Str::random(10),
            'city' => Str::random(10),
            'nominee_name' => Str::random(10),
            'bank_name' => Str::random(10),
            'branch' => Str::random(10),
            'account_number' => Str::random(10),
            'account_type' => Str::random(10),
            'ifcs_code' => Str::random(10),
            'joining_fee' => Str::random(10),
            'investment' => 1000,
        ]);

        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'is_associate' => 0,
            'is_client' => 3,
            'sponser_id' => Str::random(10),
            'user_id' => Str::random(10),
            'gender' => Str::random(10),
            'pan_no' => Str::random(10),
            'phone_no' => Str::random(10),
            'address' => Str::random(10),
            'state' => Str::random(10),
            'city' => Str::random(10),
            'nominee_name' => Str::random(10),
            'bank_name' => Str::random(10),
            'branch' => Str::random(10),
            'account_number' => Str::random(10),
            'account_type' => Str::random(10),
            'ifcs_code' => Str::random(10),
            'joining_fee' => Str::random(10),
            'investment' => 1000,
        ]);


        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'is_associate' => 2,
            'is_client' => 0,
            'sponser_id' => Str::random(10),
            'user_id' => Str::random(10),
            'gender' => Str::random(10),
            'pan_no' => Str::random(10),
            'phone_no' => Str::random(10),
            'address' => Str::random(10),
            'state' => Str::random(10),
            'city' => Str::random(10),
            'nominee_name' => Str::random(10),
            'bank_name' => Str::random(10),
            'branch' => Str::random(10),
            'account_number' => Str::random(10),
            'account_type' => Str::random(10),
            'ifcs_code' => Str::random(10),
            'joining_fee' => Str::random(10),
            'investment' => 1000,
        ]);


        // DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => bcrypt('secret'),
        //     'role_id' => 2,
        //     'sponser_id' => Str::random(10),
        //     'user_id' => Str::random(10),
        //     'gender' => Str::random(10),
        //     'pan_no' => Str::random(10),
        //     'phone_no' => Str::random(10),
        //     'address' => Str::random(10),
        //     'state' => Str::random(10),
        //     'city' => Str::random(10),
        //     'nominee_name' => Str::random(10),
        //     'bank_name' => Str::random(10),
        //     'branch' => Str::random(10),
        //     'account_number' => Str::random(10),
        //     'account_type' => Str::random(10),
        //     'ifcs_code' => Str::random(10),
        //     'joining_fee' => Str::random(10),
        //     'investment' => 1000,
        // ]);


        // DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => bcrypt('secret'),
        //     'role_id' => 2,
        //     'sponser_id' => Str::random(10),
        //     'user_id' => Str::random(10),
        //     'gender' => Str::random(10),
        //     'pan_no' => Str::random(10),
        //     'phone_no' => Str::random(10),
        //     'address' => Str::random(10),
        //     'state' => Str::random(10),
        //     'city' => Str::random(10),
        //     'nominee_name' => Str::random(10),
        //     'bank_name' => Str::random(10),
        //     'branch' => Str::random(10),
        //     'account_number' => Str::random(10),
        //     'account_type' => Str::random(10),
        //     'ifcs_code' => Str::random(10),
        //     'joining_fee' => Str::random(10),
        //     'investment' => 1000,
        // ]);


        //    DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => bcrypt('secret'),
        //     'role_id' => 2,
        //     'sponser_id' => Str::random(10),
        //     'user_id' => Str::random(10),
        //     'gender' => Str::random(10),
        //     'pan_no' => Str::random(10),
        //     'phone_no' => Str::random(10),
        //     'address' => Str::random(10),
        //     'state' => Str::random(10),
        //     'city' => Str::random(10),
        //     'nominee_name' => Str::random(10),
        //     'bank_name' => Str::random(10),
        //     'branch' => Str::random(10),
        //     'account_number' => Str::random(10),
        //     'account_type' => Str::random(10),
        //     'ifcs_code' => Str::random(10),
        //     'joining_fee' => Str::random(10),
        //     'investment' => 1000,
        // ]);


        // DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => bcrypt('secret'),
        //     'role_id' => 2,
        //     'sponser_id' => Str::random(10),
        //     'user_id' => Str::random(10),
        //     'gender' => Str::random(10),
        //     'pan_no' => Str::random(10),
        //     'phone_no' => Str::random(10),
        //     'address' => Str::random(10),
        //     'state' => Str::random(10),
        //     'city' => Str::random(10),
        //     'nominee_name' => Str::random(10),
        //     'bank_name' => Str::random(10),
        //     'branch' => Str::random(10),
        //     'account_number' => Str::random(10),
        //     'account_type' => Str::random(10),
        //     'ifcs_code' => Str::random(10),
        //     'joining_fee' => Str::random(10),
        //     'investment' => 1000,
        // ]);

        //     DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => bcrypt('secret'),
        //     'role_id' => 2,
        //     'sponser_id' => Str::random(10),
        //     'user_id' => Str::random(10),
        //     'gender' => Str::random(10),
        //     'pan_no' => Str::random(10),
        //     'phone_no' => Str::random(10),
        //     'address' => Str::random(10),
        //     'state' => Str::random(10),
        //     'city' => Str::random(10),
        //     'nominee_name' => Str::random(10),
        //     'bank_name' => Str::random(10),
        //     'branch' => Str::random(10),
        //     'account_number' => Str::random(10),
        //     'account_type' => Str::random(10),
        //     'ifcs_code' => Str::random(10),
        //     'joining_fee' => Str::random(10),
        //     'investment' => 1000,
        // ]);



        //         DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => bcrypt('secret'),
        //     'role_id' => 3,
        //     'sponser_id' => Str::random(10),
        //     'user_id' => Str::random(10),
        //     'gender' => Str::random(10),
        //     'pan_no' => Str::random(10),
        //     'phone_no' => Str::random(10),
        //     'address' => Str::random(10),
        //     'state' => Str::random(10),
        //     'city' => Str::random(10),
        //     'nominee_name' => Str::random(10),
        //     'bank_name' => Str::random(10),
        //     'branch' => Str::random(10),
        //     'account_number' => Str::random(10),
        //     'account_type' => Str::random(10),
        //     'ifcs_code' => Str::random(10),
        //     'joining_fee' => Str::random(10),
        //     'investment' => 1000,
        // ]);



        //             DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => bcrypt('secret'),
        //     'role_id' => 3,
        //     'sponser_id' => Str::random(10),
        //     'user_id' => Str::random(10),
        //     'gender' => Str::random(10),
        //     'pan_no' => Str::random(10),
        //     'phone_no' => Str::random(10),
        //     'address' => Str::random(10),
        //     'state' => Str::random(10),
        //     'city' => Str::random(10),
        //     'nominee_name' => Str::random(10),
        //     'bank_name' => Str::random(10),
        //     'branch' => Str::random(10),
        //     'account_number' => Str::random(10),
        //     'account_type' => Str::random(10),
        //     'ifcs_code' => Str::random(10),
        //     'joining_fee' => Str::random(10),
        //     'investment' => 1000,
        // ]);



        //                 DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => bcrypt('secret'),
        //     'role_id' => 3,
        //     'sponser_id' => Str::random(10),
        //     'user_id' => Str::random(10),
        //     'gender' => Str::random(10),
        //     'pan_no' => Str::random(10),
        //     'phone_no' => Str::random(10),
        //     'address' => Str::random(10),
        //     'state' => Str::random(10),
        //     'city' => Str::random(10),
        //     'nominee_name' => Str::random(10),
        //     'bank_name' => Str::random(10),
        //     'branch' => Str::random(10),
        //     'account_number' => Str::random(10),
        //     'account_type' => Str::random(10),
        //     'ifcs_code' => Str::random(10),
        //     'joining_fee' => Str::random(10),
        //     'investment' => 1000,
        // ]);



        //           DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => bcrypt('secret'),
        //     'role_id' => 3,
        //     'sponser_id' => Str::random(10),
        //     'user_id' => Str::random(10),
        //     'gender' => Str::random(10),
        //     'pan_no' => Str::random(10),
        //     'phone_no' => Str::random(10),
        //     'address' => Str::random(10),
        //     'state' => Str::random(10),
        //     'city' => Str::random(10),
        //     'nominee_name' => Str::random(10),
        //     'bank_name' => Str::random(10),
        //     'branch' => Str::random(10),
        //     'account_number' => Str::random(10),
        //     'account_type' => Str::random(10),
        //     'ifcs_code' => Str::random(10),
        //     'joining_fee' => Str::random(10),
        //     'investment' => 1000,
        // ]);
        



        //     DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => bcrypt('secret'),
        //     'role_id' => 3,
        //     'sponser_id' => Str::random(10),
        //     'user_id' => Str::random(10),
        //     'gender' => Str::random(10),
        //     'pan_no' => Str::random(10),
        //     'phone_no' => Str::random(10),
        //     'address' => Str::random(10),
        //     'state' => Str::random(10),
        //     'city' => Str::random(10),
        //     'nominee_name' => Str::random(10),
        //     'bank_name' => Str::random(10),
        //     'branch' => Str::random(10),
        //     'account_number' => Str::random(10),
        //     'account_type' => Str::random(10),
        //     'ifcs_code' => Str::random(10),
        //     'joining_fee' => Str::random(10),
        //     'investment' => 1000,
        // ]);



        //     DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => bcrypt('secret'),
        //     'role_id' => 3,
        //     'sponser_id' => Str::random(10),
        //     'user_id' => Str::random(10),
        //     'gender' => Str::random(10),
        //     'pan_no' => Str::random(10),
        //     'phone_no' => Str::random(10),
        //     'address' => Str::random(10),
        //     'state' => Str::random(10),
        //     'city' => Str::random(10),
        //     'nominee_name' => Str::random(10),
        //     'bank_name' => Str::random(10),
        //     'branch' => Str::random(10),
        //     'account_number' => Str::random(10),
        //     'account_type' => Str::random(10),
        //     'ifcs_code' => Str::random(10),
        //     'joining_fee' => Str::random(10),
        //     'investment' => 1000,
        // ]);



        //     DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => bcrypt('secret'),
        //     'role_id' => 3,
        //     'sponser_id' => Str::random(10),
        //     'user_id' => Str::random(10),
        //     'gender' => Str::random(10),
        //     'pan_no' => Str::random(10),
        //     'phone_no' => Str::random(10),
        //     'address' => Str::random(10),
        //     'state' => Str::random(10),
        //     'city' => Str::random(10),
        //     'nominee_name' => Str::random(10),
        //     'bank_name' => Str::random(10),
        //     'branch' => Str::random(10),
        //     'account_number' => Str::random(10),
        //     'account_type' => Str::random(10),
        //     'ifcs_code' => Str::random(10),
        //     'joining_fee' => Str::random(10),
        //     'investment' => 1000,
        // ]);



        //     DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => bcrypt('secret'),
        //     'role_id' => 3,
        //     'sponser_id' => Str::random(10),
        //     'user_id' => Str::random(10),
        //     'gender' => Str::random(10),
        //     'pan_no' => Str::random(10),
        //     'phone_no' => Str::random(10),
        //     'address' => Str::random(10),
        //     'state' => Str::random(10),
        //     'city' => Str::random(10),
        //     'nominee_name' => Str::random(10),
        //     'bank_name' => Str::random(10),
        //     'branch' => Str::random(10),
        //     'account_number' => Str::random(10),
        //     'account_type' => Str::random(10),
        //     'ifcs_code' => Str::random(10),
        //     'joining_fee' => Str::random(10),
        //     'investment' => 1000,
        // ]);



        //     DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => bcrypt('secret'),
        //     'role_id' => 3,
        //     'sponser_id' => Str::random(10),
        //     'user_id' => Str::random(10),
        //     'gender' => Str::random(10),
        //     'pan_no' => Str::random(10),
        //     'phone_no' => Str::random(10),
        //     'address' => Str::random(10),
        //     'state' => Str::random(10),
        //     'city' => Str::random(10),
        //     'nominee_name' => Str::random(10),
        //     'bank_name' => Str::random(10),
        //     'branch' => Str::random(10),
        //     'account_number' => Str::random(10),
        //     'account_type' => Str::random(10),
        //     'ifcs_code' => Str::random(10),
        //     'joining_fee' => Str::random(10),
        //     'investment' => 1000,
        // ]);



        //     DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => bcrypt('secret'),
        //     'role_id' => 3,
        //     'sponser_id' => Str::random(10),
        //     'user_id' => Str::random(10),
        //     'gender' => Str::random(10),
        //     'pan_no' => Str::random(10),
        //     'phone_no' => Str::random(10),
        //     'address' => Str::random(10),
        //     'state' => Str::random(10),
        //     'city' => Str::random(10),
        //     'nominee_name' => Str::random(10),
        //     'bank_name' => Str::random(10),
        //     'branch' => Str::random(10),
        //     'account_number' => Str::random(10),
        //     'account_type' => Str::random(10),
        //     'ifcs_code' => Str::random(10),
        //     'joining_fee' => Str::random(10),
        //     'investment' => 1000,
        // ]);


        //     DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => bcrypt('secret'),
        //     'role_id' => 3,
        //     'sponser_id' => Str::random(10),
        //     'user_id' => Str::random(10),
        //     'gender' => Str::random(10),
        //     'pan_no' => Str::random(10),
        //     'phone_no' => Str::random(10),
        //     'address' => Str::random(10),
        //     'state' => Str::random(10),
        //     'city' => Str::random(10),
        //     'nominee_name' => Str::random(10),
        //     'bank_name' => Str::random(10),
        //     'branch' => Str::random(10),
        //     'account_number' => Str::random(10),
        //     'account_type' => Str::random(10),
        //     'ifcs_code' => Str::random(10),
        //     'joining_fee' => Str::random(10),
        //     'investment' => 1000,
        // ]);


        //     DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => bcrypt('secret'),
        //     'role_id' => 3,
        //     'sponser_id' => Str::random(10),
        //     'user_id' => Str::random(10),
        //     'gender' => Str::random(10),
        //     'pan_no' => Str::random(10),
        //     'phone_no' => Str::random(10),
        //     'address' => Str::random(10),
        //     'state' => Str::random(10),
        //     'city' => Str::random(10),
        //     'nominee_name' => Str::random(10),
        //     'bank_name' => Str::random(10),
        //     'branch' => Str::random(10),
        //     'account_number' => Str::random(10),
        //     'account_type' => Str::random(10),
        //     'ifcs_code' => Str::random(10),
        //     'joining_fee' => Str::random(10),
        //     'investment' => 1000,
        // ]);



        


        //     DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => bcrypt('secret'),
        //     'role_id' => 3,
        //     'sponser_id' => Str::random(10),
        //     'user_id' => Str::random(10),
        //     'gender' => Str::random(10),
        //     'pan_no' => Str::random(10),
        //     'phone_no' => Str::random(10),
        //     'address' => Str::random(10),
        //     'state' => Str::random(10),
        //     'city' => Str::random(10),
        //     'nominee_name' => Str::random(10),
        //     'bank_name' => Str::random(10),
        //     'branch' => Str::random(10),
        //     'account_number' => Str::random(10),
        //     'account_type' => Str::random(10),
        //     'ifcs_code' => Str::random(10),
        //     'joining_fee' => Str::random(10),
        //     'investment' => 1000,
        // ]);



        


        //     DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => bcrypt('secret'),
        //     'role_id' => 3,
        //     'sponser_id' => Str::random(10),
        //     'user_id' => Str::random(10),
        //     'gender' => Str::random(10),
        //     'pan_no' => Str::random(10),
        //     'phone_no' => Str::random(10),
        //     'address' => Str::random(10),
        //     'state' => Str::random(10),
        //     'city' => Str::random(10),
        //     'nominee_name' => Str::random(10),
        //     'bank_name' => Str::random(10),
        //     'branch' => Str::random(10),
        //     'account_number' => Str::random(10),
        //     'account_type' => Str::random(10),
        //     'ifcs_code' => Str::random(10),
        //     'joining_fee' => Str::random(10),
        //     'investment' => 1000,
        // ]);



        














             DB::table('roles')->insert([
            'name' => "office",
            'description' => "OFFICE",

        ]);

              DB::table('roles')->insert([
            'name' => "associate",
            'description' => "ASSOCIATES",

        ]);

               DB::table('roles')->insert([
            'name' => "client",
            'description' => "CLIENT",
            
        ]);



               DB::table('users')->insert([
            'name' => "OFFICE",
            'email' => 'office@gmail.com',
            'password' => bcrypt('123'),
            'is_office' => '1',
            'is_associate' => '0',
            'is_client' => '0',
            'name' => 'Jyotisankar Panda',
        ]);

                 DB::table('users')->insert([
            'name' => "ASSOCIATES",
            'email' => 'associate@gmail.com',
            'password' => bcrypt('123'),
            'is_office' => '2',
            'is_associate' => '0',
            'is_client' => '0',
        ]);
 
                   DB::table('users')->insert([
            'name' => "CLIENT",
            'email' => 'client@gmail.com',
            'password' => bcrypt('123'),
            'is_office' => '3',
            'is_associate' => '0',
            'is_client' => '0',
        ]);

       DB::table('incentive_type')->insert([
            'incentive_type' => "SELF_CLIENT",
            'description' => 'SELF INCENTIVE FOR CLIENT',
        ]);

        DB::table('incentive_type')->insert([
            'incentive_type' => "SELF_ASSOCIATE",
            'description' => 'SELF INCENTIVE FOR ASSOCIATE',
        ]);


          DB::table('incentive_type')->insert([
            'incentive_type' => "ASSOCIATE_JOIN_ASSOCIATE",
            'description' => 'ASSOCIATE_JOIN_ASSOCIATE',
        ]);

        DB::table('incentive_type')->insert([
            'incentive_type' => "ASSOCIATE_HAS_ASSOCIATE_JOIN_ASSOCIATE",
            'description' => 'ASSOCIATE_HAS_ASSOCIATE_JOIN_ASSOCIATE',
        ]);


        DB::table('incentive_type')->insert([
            'incentive_type' => "ASSOCIATE_JOIN_CLIENT",
            'description' => 'ASSOCIATE_JOIN_CLIENT',
        ]);

        DB::table('incentive_type')->insert([
            'incentive_type' => "ASSOCIATE_HAS_ASSOCIATE_JOIN_CLIENT",
            'description' => 'ASSOCIATE_HAS_ASSOCIATE_JOIN_CLIENT',
        ]);

     
        

 
    }
}
