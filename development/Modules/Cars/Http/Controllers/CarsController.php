<?php

namespace Modules\Cars\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\CarCompanies\Entities\CarCompaniesModel;
use Modules\CarModels\Entities\CarModelsModel;
use Modules\Cars\Entities\CarCategories;
use Modules\Cars\Entities\CarFeature;
use Modules\Cars\Entities\CarsModel;
use Modules\Cars\Entities\Category;
use Modules\Cars\Http\Filters\CarFilter;
use Modules\EngineTypes\Entities\EngineTypeModel;
use Modules\Features\Entities\Feature;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    use ValidatesRequests;

    public function index(CarFilter $filter, Request $request)
    {

        $cars = CarsModel::filter($filter)
            ->paginate(\Helper::limit($request));

        return view('cars::index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $carCompanies = CarCompaniesModel::pluck('company_name', 'id');
//        $models = CarModelsModel::pluck('model_name', 'id');
        $categories = Category::pluck('category', 'id');
        $engine_types = EngineTypeModel::pluck('title', 'id');
        $features = Feature::pluck('title', 'id');
        return view('cars::create', compact('carCompanies', 'categories','engine_types', 'features'));

    }

    public function getModels(Request $request)
    {
        if ($request->ajax()) {
            $this->validate($request, [
                'id' => "required|integer",
            ]);

            return CarModelsModel::where('car_company_id', $request->input('id'))->get(['id', 'model_name']);
        }
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'model' => 'required',
        ]);

        $date = Carbon::createFromFormat('Y', $request->input('manufacturing_year'));

        $isSuccess = CarsModel::create(
            array_merge(['manufacturing_year' => $date],$request->only(
                'title', 'model', 'engine_type', 'trim',
                'exterior_color', 'interior_color', 'grade',
                'kilometers', 'number_plate','engine_number', 'chassis_number',
                'city_of_registration', 'transmission', 'body_type', 'drivetrain'))
        );
        $isSuccess->categories()->attach($request->input('categories'));
        $isSuccess->features()->attach($request->input('features'));
        return ($isSuccess)?
            back()->with('alert-success', 'CarsModel Created Successfully')
            : back()->with('alert-danger', 'Error: please try again.');

    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('cars::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $car = CarsModel::whereId($id)->with(
            ['engineType','categories','carModel.carCompany','features']
        )->get();


        return $car;


        return view('cars::edit', compact('category'));

    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'category' => 'required|unique:categories,category,' . $id
        ]);


        if (!$car = Category::find($id)) return back()->with('alert-danger', 'Error: please try again.');
        $isSuccess = $car->update([
            'category' => $request->input('category')
        ]);
        return ($isSuccess) ?
            back()->with('alert-success', 'Car Created Successfully')
            : back()->with('alert-danger', 'Error: please try again.');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $rec = CarsModel::find($id);
        if(empty($rec)) return;
        return ($rec->forceDelete()) ? 'true' : 'false';
    }
}
