<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\GeneralSetting;
use App\Models\Category;
use App\Models\SocialMedia;
use App\Models\Contact;
use App\Models\About;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $generalsetting = GeneralSetting::where('status',1)->limit(1)->first();
        view()->share('generalsetting',$generalsetting);
        // category
        $categories = Category::where('status',1)->get();
        view()->share('categories',$categories); 
        // social media
        $socialmedias = SocialMedia::where('status',1)->get();
        view()->share('socialmedias',$socialmedias);

      
        $contactinfoes = Contact::where('status', 1)->first();
        view()->share('contactinfoes', $contactinfoes);

       



    }
}
