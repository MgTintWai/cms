<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => 'Tint Wai',
            "email" => 'admin@gmail.com',
            "password" => bcrypt('admin123'),
            "is_admin" => '1'
        ]);

        Profile::create([
            "user_id" => '1',
            "profile_image" => 'default.png',
            "about" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos soluta vero quisquam in non odit assumenda minus ullam ea est ipsum sit alias maxime deserunt cum rem quasi, quam dignissimos?',
            "facebook_link" => 'www.facebook.com',
            "youtube_link" => 'www.youtube.com',
        ]);
    }
}
