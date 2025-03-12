<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::updateOrCreate(['id'=>1],[
                'address'=>'Address',
                'email'=>'user@usr.com',
                'phone'=>'Phone',
                'facebook'=>'https://Facebook.com',
                'linkedin'=>'https://Linkedin.com',
                'youtube'=>'https://Youtube.com',
                'instagram'=>'https://Instagram.com',
                'twitter'=>'https://Twitter.com',
        ]);
    }
}
