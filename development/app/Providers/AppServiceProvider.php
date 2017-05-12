<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Modules\Auctions\Entities\Auction;
use Modules\GeneralSettings\Entities\GeneralSetting;
use Modules\Media\Entities\Post;
use Modules\Auctions\Http\Controllers\AuctionsController;

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

        (new AuctionsController())->auctionEndNotify();

        \View::composer('*', function ($view) {
            $helpPage = Post::where('slug' , 'help-page')->with('post_status')->first();
            $rulesPage = Post::where('slug' , 'rules-page')->with('post_status')->first();
            $settings = GeneralSetting::pluck('value', 'key');
            $latestAuctions = Auction::limit(3)->latest()->get();
            $view->with(compact('settings', 'helpPage', 'rulesPage', 'latestAuctions'));
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
