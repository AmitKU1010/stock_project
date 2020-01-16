<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
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
            'password' => bcrypt('12345678'),
            'role_id' => '1',
        ]);

                 DB::table('users')->insert([
            'name' => "ASSOCIATES",
            'email' => 'associate@gmail.com',
            'password' => bcrypt('12345678'),
            'role_id' => '2',
        ]);

                   DB::table('users')->insert([
            'name' => "CLIENT",
            'email' => 'client@gmail.com',
            'password' => bcrypt('12345678'),
            'role_id' => '3',
        ]);

 
    }
}
