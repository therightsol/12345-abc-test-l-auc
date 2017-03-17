<?php
DB::listen(function($sql) {
    Log::error($sql->sql);
});
    Event::listen('eloquent.query', function($query, $bindings, $time, $name)
    {
        $data = compact('bindings', 'time', 'name');

        // Format binding data for sql insertion
        foreach ($bindings as $i => $binding)
        {
            if ($binding instanceof \DateTime)
            {
                $bindings[$i] = $binding->format('\'Y-m-d H:i:s\'');
            }
            else if (is_string($binding))
            {
                $bindings[$i] = "'$binding'";
            }
        }

        // Insert bindings into query
        $query = str_replace(array('%', '?'), array('%%', '%s'), $query);
        $query = vsprintf($query, $bindings);

        dd($query);
        Log::info($query, $data);
    });
Route::group(
    [
//        'middleware' => ['web', 'admin_login_check'],
        'middleware' => ['web'],
        'prefix' => Helper::dashboardName(),
        'as'    =>  'admin.',
        'namespace' => 'Modules\Auctions\Http\Controllers'
    ],
    function()
    {
        Route::Resource('auctions', 'AuctionsController', ['names' => Helper::ResourceNames('auctions')]);
    });