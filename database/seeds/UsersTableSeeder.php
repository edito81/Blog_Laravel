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
       $user = App\User::create([
            'name'     => 'Kristiyan Petrov',
            'email'    => 'chrustuanpetrow@gmail.com',
            'password' => bcrypt('password'),
            'admin'    => 1
        ]);



        App\Profile::create([
            'user_id'  => $user->id,
            'avatar'   => 'uploads/avatars/1.jpeg',
            'about'    => "What to tell about me, I live in Bulgaria and i'm looking for job like a junior developer",
            'facebook' => 'www.facebook.com',
            'youtube'  => 'www.youtube.com'
        ]);


    }

}
