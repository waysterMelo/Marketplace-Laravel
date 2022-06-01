<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use function Symfony\Component\Finder\name;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        \DB::table('users')->insert([
//            'name'=>"",
//            'email'=>"adsadsdsdas@gmail.com",
//            'email_verified_at'=>now(),
//            'password'=>'deus',
//            'remember_token' => 'adddsadasdadasdsdasdsd'
//        ]);


         User::factory()->count(40)->create();
    }
}
