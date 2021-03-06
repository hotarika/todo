<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'guest user',
            'email' => 'guest@example.com',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'test1',
            'email' => 'test1@example.com',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'password' => Hash::make('rootroot'),
        ]);
        DB::table('users')->insert([
            'name' => 'test2',
            'email' => 'test2@example.com',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'password' => Hash::make('rootroot'),
        ]);
        DB::table('users')->insert([
            'name' => 'test3',
            'email' => 'test3@example.com',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'password' => Hash::make('rootroot'),
        ]);
        DB::table('users')->insert([
            'name' => 'test4',
            'email' => 'test4@example.com',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'password' => Hash::make('rootroot'),
        ]);
    }
}
