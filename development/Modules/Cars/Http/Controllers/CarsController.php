<?php

namespace Modules\Cars\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Cars\Entities\CarsModel;
use Modules\Cars\Http\Filters\CarFilter;
class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */

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
        return view('cars::create');

    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'category' => 'required'
        ]);

        $isSuccess = CarsModel::create([
            'category' => $request->input('category')
        ]);
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
        $category = CarsModel::find($id);
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
    public function destroy()
    {
    }
}
