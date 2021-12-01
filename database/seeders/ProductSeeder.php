<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                "name" => "Macbook Pro 16",
                "details" => "2TBSSD storage17 Up to2Xfaster SSD1",
                "description" => "The do‑it‑all notebook gets do‑the‑unbelievable memory. The M1 chip brings up to 16GB of superfast unified memory. This single pool of high‑bandwidth, low‑latency memory allows apps to share data between the CPU, GPU, and Neural Engine efficiently — so everything you do is fast and fluid.",
                "brand" => "Apple",
                "price" => 2500,
                "shipping_cost" => 20,
                "image_path" => 'storage/macbook.png'
            ],
            [
                "name" => 'Ipad',
                "details" => '12.9 Liquid Retina XDR display1  11 Liquid Retina display1',
                "description" => 'Explore covers, cases, and more to help you get the most from your iPad.',
                "brand" => 'Apple',
                "price" => 500,
                "shipping_cost" => 20,
                "image_path" => 'storage/ipad.png'
            ]
        ];
        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}
