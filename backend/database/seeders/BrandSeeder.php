<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 5; $i++) {
            DB::table('brands')->insert([
                'name' => $faker->company(), // Tên giả cho brand
                'description' => $faker->catchPhrase(), // Mô tả giả
                'link' => $faker->url(), // Link giả
                'image' => $faker->imageUrl(640, 480, 'brands', true), // Hình ảnh giả
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
