<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert( array(
            ['name' => 'โคมไฟ'],
            ['name' => 'หมอน'],
            ['name' => 'พรม'],
            ['name' => 'โต๊ะ'],
            ['name' => 'เก้าอี้'],
        ));
    }
}
