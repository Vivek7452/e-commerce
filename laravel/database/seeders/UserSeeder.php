<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'name'=>'peter parker',
        //     'email'=>'peter@parker.com',
        //     'password'=>Hash::make('12345')
        // ]);
        DB::table('users')->insert([
            'name'=>'vivek bhardwaj',
            'email'=>'vivek@gmail.com',
            'password'=>Hash::make('12345')
        ]);


    }
}
