<?php

use Illuminate\Database\Seeder;

/**
 * Created by PhpStorm.
 * User: silk
 * Date: 2018/6/26
 * Time: 14:38
 */

class TestsTableSeeder  extends Seeder
{
    public function run()
    {
        factory(App\Test::class, 50)->create();
    }
}