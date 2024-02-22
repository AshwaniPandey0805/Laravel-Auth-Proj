<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class customer_login_info extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $currentDateTime = now();
        // $currentTime = $currentDateTime->format('H:i:s');
        DB::table('customer_login_info')->insert([
            "name" => Str::random(10),
            "email" => Str::random(10)."@gmail.com",
            "password" => Hash::make(Str::random(10)),
            "created_at" => now(),
            "updated_at" => now(),
            "email_verified_at" => now(),

        ]);
    }
}
