<?php

namespace Modules\Categories\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use Modules\Categories\Entities\Category;

class CategoriesDatabaseSeeder extends Seeder
{
    static $i = 0;


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        TestDummy::times(5)->create(Category::class);


        // $this->call("OthersTableSeeder");
    }

    public static function getIterationNumber()
    {
        $i = self::$i ++;
        return $i;
    }

    public static function updateIterationNumber( $number ){
        self::$i = $number;
    }
}
