<?php

namespace Modules\Cars\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\CarModels\Entities\CarModelsModel;
use Modules\EngineTypes\Entities\EngineTypeModel;
use Modules\Features\Entities\Feature;

class CarsModel extends Model
{
    protected $fillable =
        ['title', 'average_price','minimum_price', 'manufacturing_year',
            'model', 'engine_type', 'trim','exterior_color', 'interior_color',
            'grade', 'kilometers', 'number_plate', 'engine_number',
            'chassis_number', 'city_of_registration', 'transmission',
            'body_type', 'drivetrain'];

    protected $table = 'cars';

    public function getForeignKey()
    {
        return 'car_id';
    }

    public function scopeFilter($query, $filters)
    {
        return $filters->apply($query);
    }

    public function engineType()
    {
        return $this->hasOne(EngineTypeModel::class, 'id', 'engine_type');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'car_categories');
    }

    public function carModel()
    {
        return $this->hasOne(CarModelsModel::class, 'id', 'model');
    }

    public function features()
    {
        return $this->belongsToMany(Feature::class,'car_features');

    }

}
