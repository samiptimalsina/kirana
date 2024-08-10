<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Database\QueryException;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\ModelNotFoundException;

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
    public function boot(UrlGenerator $url)
    {

        try {
            $setting = Setting::first(); // Adjust this if needed
            $logo = $setting ? $setting->getLogoPath('logo.png') : null;
        } catch (ModelNotFoundException $e) {
            $logo = null;
        } catch (QueryException $e) {
            $logo = null;
        } catch (\Exception $e) {
            $logo = null;
        }
        $user = Auth::id() ? Auth::user() : null;
        $isAdmin = $this->GetIsAdmin();
        View::composer('*', function ($view) use ($user, $isAdmin) {
            $view->with(compact('user', 'isAdmin'));
        });
        // if (env('APP_ENV') == 'production') {
        //     $url->forceScheme('https');
        // }
    }

    private function GetIsAdmin()
    {
        return Auth::id() && Auth::user()->usertype = "1" ? true : false;
    }
}
