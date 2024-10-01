<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                "name" => "Thể thao",
                "slug" => "the-thao",
                "show_at_nav" => 1,
                "status" => 1,
                "created_at" => "2024-08-25 11:01:44",
                "updated_at" => "2024-08-25 11:01:44"
            ],
            [
                "name" => "Giải trí",
                "slug" => "giai-tri",
                "show_at_nav" => 1,
                "status" => 1,
                "created_at" => "2024-08-25 05:53:02",
                "updated_at" => "2024-08-25 05:53:02"
            ],
            [
                "name" => "Kinh doanh",
                "slug" => "kinh-doanh",
                "show_at_nav" => 1,
                "status" => 1,
                "created_at" => "2024-08-25 22:52:29",
                "updated_at" => "2024-08-25 22:52:29"
            ],
            [
                "name" => "Bất động sản",
                "slug" => "bat-dong-san",
                "show_at_nav" => 1,
                "status" => 1,
                "created_at" => "2024-08-25 22:52:45",
                "updated_at" => "2024-08-25 22:52:45"
            ]
        ]);
    }
}
