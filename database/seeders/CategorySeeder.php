<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'Pillow',
                'mm_name' => 'ခေါင်းအုံး',
            ],
            [
                'name' => 'Blanket',
                'mm_name' => 'စောင်',
            ],
            [
                'name' => 'Mattresse',
                'mm_name' => 'မွေ့ယာ',
            ],
            [
                'name' => 'Bed Sheet',
                'mm_name' => 'အိပ်ယာခင်း',
            ],
            [
                'name' => 'Pillowcase',
                'mm_name' => 'ခေါင်းအုံးဖုံး',
            ],
            [
                'name' => 'Floor Mat',
                'mm_name' => 'ဖျာ',
            ],
            [
                'name' => 'Quilt',
                'mm_name' => 'စောင်အပါး',
            ],
            [
                'name' => 'Bath Towel',
                'mm_name' => 'တဘက်',
            ],
        ]);
    }
}
