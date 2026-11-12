<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'category_id' => 1,
                'name' => 'Pillow',
                'mm_name' => 'ခေါင်းအုံး',
                'description' => 'A soft and comfortable pillow for a good night\'s sleep.',
                'mm_description' => 'အိပ်စက်ချိန်ကောင်းစွာအတွက် နူးညံ့ပြီး သက်သောင့်သက်သာရှိသော ခေါင်းအုံး။',
                'price' => 20000,
                'stock' => 50,
                'image' => 'pillow.jpg',
            ],
            [
                'category_id' => 2,
                'name' => 'Blanket',
                'mm_name' => 'စောင်',
                'description' => 'A warm and cozy blanket to keep you comfortable.',
                'mm_description' => 'သက်သောင့်သက်သာရှိစွာထားနိုင်ရန် အပူပေးပြီး သက်သောင့်သက်သာရှိသော စောင်။',
                'price' => 30000,
                'stock' => 30,
                'image' => 'blanket.jpg',
            ],
            [
                'category_id' => 3,
                'name' => 'Mattresse',
                'mm_name' => 'မွေ့ယာ',
                'description' => 'A high-quality mattress for a restful sleep.',
                'mm_description' => 'အနားယူစွာအိပ်စက်ရန် အရည်အသွေးမြင့်မွေ့ယာ။',
                'price' => 150000,
                'stock' => 20,
                'image' => 'mattresse.jpg',
            ],
            [
                'category_id' => 4,
                'name' => 'Bed Sheet',
                'mm_name' => 'အိပ်ယာခင်း',
                'description' => 'A soft and smooth bed sheet for a comfortable sleep.',
                'mm_description' => 'သက်သောင့်သက်သာရှိစွာအိပ်စက်ရန် နူးညံ့ပြီး သက်သောင့်သက်သာရှိသော အိပ်ယာခင်း။',
                'price' => 10000,
                'stock' => 100,
                'image' => 'bedsheet.jpg',
            ]
        ]);
    }
}
