<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class LogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('logos')->insert([
			'image' => 'images/WKrWIpZcBDzPmwvjzbInPb47MzmmSiAwhkUOhWWC.jpg',
		]);
    }
}
