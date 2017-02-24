<?php

namespace Modules\CarCompanies\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use Modules\CarCompanies\Entities\CarCompaniesModel;


class CarCompaniesDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        TestDummy::times(2)->create(CarCompaniesModel::class);

        // $this->call("OthersTableSeeder");
    }
}
