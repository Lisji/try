<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Eloquent;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        //關閉外鍵檢察
        Eloquent::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        //
        //$this->call([CategorySeeder::class]);//category
        $this->call([CategorySeeder::class,PostSeeder::class]);
        //開啟外鍵檢查
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        Eloquent::reguard();
        //
    }
}