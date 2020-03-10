<?php

use Illuminate\Database\Seeder;
use App\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=DB::table('users')->where('email','admin@gmail.com')->first();

        if(! $user)
        {
            User::create([
                'name'=>'admin',
                'type'=>'admin',
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('12345')
            ]);
        }
    }
}
