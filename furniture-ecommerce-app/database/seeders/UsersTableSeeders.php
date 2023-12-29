<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //masukan data 
        DB::table('users')->insert([
            'name'=>'Kristian',
            'email'=>'kristiansuriyadharm@gmail.com',
            'password'=>Hash::make('kucinganon') 
        ]);
    }
}
