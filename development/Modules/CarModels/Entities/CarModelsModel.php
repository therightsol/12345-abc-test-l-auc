<?php

namespace Modules\CarModels\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\CarCompanies\Entities\CarCompaniesModel;

class CarModelsModel extends Model
{
    protected $fillable = ['model_name','car_company_id'];

    protected $table = 'models';

    public function scopeFilter($query, $filters)
    {
        return $filters->apply($query);
    }
    public function carCompany()
    {
        return $this->belongsTo(CarCompaniesModel::class);
    }
}
