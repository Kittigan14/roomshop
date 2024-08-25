<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert( array(
            [
                'code' => 'RS001',
                'name' => 'โคมไฟตั้งโต๊ะสไตล์โมเดิร์น',
                'category_id' => 1,
                'price' => 999,
                'stock_qty' => 50,
            ],
            
            [
                'code' => 'RS002',
                'name' => 'หมอนลายดอกไม้',
                'category_id' => 2,
                'price' => 499,
                'stock_qty' => 100,
            ],
            
            [
                'code' => 'RS003',
                'name' => 'พรมเปอร์เซีย',
                'category_id' => 3,
                'price' => 500,
                'stock_qty' => 20,
            ],

            [
                'code' => 'RS004',
                'name' => 'โคมไฟแขวนเพดาน',
                'category_id' => 1,
                'price' => 500,
                'stock_qty' => 25,
            ],

            [
                'code' => 'RS005',
                'name' => 'โต๊ะกาแฟไม้',
                'category_id' => 4,
                'price' => 900,
                'stock_qty' => 25,
            ],

            [
                'code' => 'RS006',
                'name' => 'เก้าอี้สำนักงาน',
                'category_id' => 5,
                'price' => 500,
                'stock_qty' => 30,
            ],
        ));
    }
}
