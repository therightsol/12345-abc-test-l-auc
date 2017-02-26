<?php

namespace Modules\Cars\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use Modules\Cars\Entities\CarCategories;
use Modules\Cars\Entities\CarFeature;
use Modules\Cars\Entities\CarsModel;

class CarsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        TestDummy::times(100)->create(CarsModel::class);
        TestDummy::times(200)->create(CarCategories::class);
        TestDummy::times(100)->create(CarFeature::class);

        // $this->call("OthersTableSeeder");
    }
}
