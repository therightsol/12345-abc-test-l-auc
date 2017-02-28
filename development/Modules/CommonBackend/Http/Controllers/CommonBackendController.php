<?php

namespace Modules\CommonBackend\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use Modules\CommonBackend\Providers\CommonBackendServiceProvider;
use Modules\Users\Entities\UserModel;
use Nwidart\Modules\Facades\Module;

class CommonBackendController extends Controller
{
    use ValidatesRequests;
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('commonbackend::index');
    }

    public function not_authorized()
    {
        $dashboardName = CommonBackendServiceProvider::getdashboardName();
        return view('commonbackend::errors.not-authorized', compact('dashboardName'));
    }

    public function login(Request $request)
    {
        return view('commonbackend::login');
    }

    public function do_login(Request $request)
    {
        $this->validate($request, [
            'username'  => 'required|max:255|min:3',
            'password'  =>  'required|max:255|min:5'
        ]);


        $user = UserModel::where('username', $request->username)->get();
        if ($user && $user[0]->username == $request->username
            && password_verify($request->password, $user[0]->password)){

            \Auth::loginUsingId($user[0]->id, true);


            return redirect()->intended('dashboard');
        }



        return $request->all();
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('commonbackend::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('commonbackend::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('commonbackend::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
