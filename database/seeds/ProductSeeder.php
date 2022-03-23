<?php

use App\Product;
use Faker\Core\Number;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'code' => Str::random(4),
            'product' => Str::random(10),
            'price' => rand(10,100),
            'old_price' => rand(10,100),
            'image' => Str::random(10),
            'category_id' => 2
        ]);
    }
}
