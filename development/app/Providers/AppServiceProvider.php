<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Modules\GeneralSettings\Entities\GeneralSetting;
use Modules\Media\Entities\Post;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        \DB::listen(function($sql) {

            \Log::info($sql->sql);
        });
        \View::composer('*', function ($view) {
            $helpPage = Post::where('slug' , 'help-page')->with('post_status')->first();
            $rulesPage = Post::where('slug' , 'rules-page')->with('post_status')->first();
            $settings = GeneralSetting::pluck('value', 'key');
            $view->with(compact('settings', 'helpPage', 'rulesPage'));
        });
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
