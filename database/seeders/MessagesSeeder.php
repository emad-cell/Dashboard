<?php

namespace Database\Seeders;

use App\Models\Feature;
use App\Models\Message;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessagesSeeder extends Seeder
{
    public function run(): void
    {
        Message::Create(['email'=>'ema@user.com',
            'name'=>'emad',
            'subject'=>'test',
            'message'=>'sfbdfbdbdfbdfb dbfdbdfbdfb dfbdbdb
            dfbdtnytmrym ymtmymt',
        ]);
    }
}
