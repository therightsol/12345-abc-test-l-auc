<?php

namespace Modules\CommonBackend\Helpers;
use \Route;

/**
 * Class Currency
 *
 * @package \App\Helpers
 */
class Helper
{
    public static function ResourceNames($prefix)
    {
        return [
            'index'   => $prefix . '.index',
            'create'  => $prefix . '.create',
            'store'   => $prefix . '.store',
            'show'    => $prefix . '.show',
            'edit'    => $prefix . '.edit',
            'update'  => $prefix . '.update',
            'destroy' => $prefix . '.destroy'
        ];
    }


    public static function dashboardName()
    {
        return \Modules\CommonBackend\Providers\CommonBackendServiceProvider::getdashboardName();

    }


    public static function limit($request)
    {
        return  ($request->has('limit')) ? $request->input('limit') : 10;

    }



    public static function isActiveResource($resource, $output = "active"){
        $currentRoute = self::getResourceName();
        if ($currentRoute == $resource) return $output;
    }

    public static function route($name)
    {
        switch ($name) {
            case "index":
                return self::getResourceName().'.index';
                break;
            case "create":
                return self::getResourceName().'.create';
                break;
            case "edit":
                return self::getResourceName().'.edit';
                break;
            case "store":
                return self::getResourceName().'.store';
                break;
            case "update":
                return self::getResourceName().'.update';
                break;
            case "destroy":
                return self::getResourceName().'.destroy';
                break;
            default:
                return '/';
        }

    }

    public static function getResourceName(){
        return preg_replace('/\W\w+\s*(\W*)$/', '$1', Route::currentRouteName());
    }

}