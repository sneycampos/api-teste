<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();

        for($i=0;$i<5000;$i++)
        {
            Product::create([
                'title' => str_random(30),
                'sku' => str_random(10),
                'image' => str_random(10) . '.jpeg',
                'price' => 200.00,
                'description' => str_random(255),
                'created_at' => Date('Y-m-d H:i:s'),
            ]);
        }
    }
}
