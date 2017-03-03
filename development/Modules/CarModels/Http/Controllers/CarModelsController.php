<?php

namespace Modules\CarModels\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Validation\ValidatesRequests;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\CarCompanies\Entities\CarCompaniesModel;
use Modules\CarModels\Http\Filters\CarModelsFilter;
use Modules\CarModels\Entities\CarModelsModel;

class CarModelsController extends Controller
{
    use ValidatesRequests;

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(CarModelsFilter $filter, Request $request)
    {
        $carModels = CarModelsModel::filter($filter)
            ->paginate(\Helper::limit($request));
        return view('carmodels::index', compact('carModels'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $carCompanies = CarCompaniesModel::pluck('company_name', 'id');
        return view('carmodels::create', compact('carCompanies'));
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'model_name' => 'required|unique:models,model_name',
            'car_company_id' => 'required'
        ]);

        $isSuccess = CarModelsModel::create($request->only('model_name', 'car_company_id'));
        return ($isSuccess) ?
            back()->with('alert-success', 'Car Model Created Successfully')
            : back()->with('alert-danger', 'Error: please try again.');
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('carmodels::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $carModel = CarModelsModel::whereId($id)->with('carCompany')->first();
        if(!$carModel) return redirect()->route(Helper::route('index'));
        $carCompanies = CarCompaniesModel::pluck('company_name', 'id');

        return view('carmodels::edit', compact('carModel','carCompanies'));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'model_name' => 'required|unique:models,model_name,'.$id,
            'car_company_id' => 'required'
        ]);

        if (!$carModel = CarModelsModel::find($id)) return redirect()->route(Helper::route('index'));
        $isSuccess = $carModel->update(
            $request->only('model_name', 'car_company_id')
        );
        return ($isSuccess) ?
            back()->with('alert-success', 'Car Model Created Successfully')
            : back()->with('alert-danger', 'Error: please try again.');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $rec = CarModelsModel::find($id);
        if(empty($rec)) return;
        return ($rec->forceDelete()) ? 'true' : 'false';
    }
}
