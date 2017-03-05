<?php

namespace Modules\EngineTypes\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\EngineTypes\Http\Filters\EngineTypesFilter;
use Modules\EngineTypes\Entities\EngineTypeModel;

class EngineTypesController extends Controller
{
    use ValidatesRequests;

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(EngineTypesFilter $filter, Request $request)
    {
        $engineTypes = EngineTypeModel::filter($filter)
            ->paginate(\Helper::limit($request));
        return view('enginetypes::index', compact('engineTypes'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('enginetypes::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|unique:engine_types,title',
        ]);

        $isSuccess = EngineTypeModel::create($request->only('title'));
        return ($isSuccess) ?
            back()->with('alert-success', 'Engine Type Created Successfully')
            : back()->with('alert-danger', 'Error: please try again.');
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('enginetypes::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $engineType = EngineTypeModel::find($id);
        if(!$engineType) return redirect()->route(Helper::route('index'));

        return view('enginetypes::edit', compact('engineType'));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|unique:engine_types,title,'.$id,
        ]);

        if (!$engineType = EngineTypeModel::find($id)) return redirect()->route(Helper::route('index'));
        $isSuccess = $engineType->update(
            $request->only('title')
        );
        return ($isSuccess) ?
            back()->with('alert-success', 'Engine Type Created Successfully')
            : back()->with('alert-danger', 'Error: please try again.');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $rec = EngineTypeModel::find($id);
        if(empty($rec)) return;
        return ($rec->forceDelete()) ? 'true' : 'false';
    }
}
