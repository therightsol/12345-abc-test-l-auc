<?php

namespace Modules\CarModels\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use Modules\CarModels\Entities\CarModelsModel;

class CarModelsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        TestDummy::times(5)->create(CarModelsModel::class);

        // $this->call("OthersTableSeeder");
    }
}