<?php
namespace Rsj\JunitLaravel\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class JunitServiceProvider extends ServiceProvider
{
    public function register()
    {
      $this->registerRoutes();

        $this->loadViewsFrom(
            __DIR__.'/../../resources/views/', 'vjunit'
        );
    }



    private function routeConfiguration()
    {
        return [
            'namespace' => 'Rsj\JunitLaravel\Http\Controllers',
            'prefix' => 'rjunit',
            'middleware' => 'web'
        ];
    }
    private function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../Http/routes.php');
        });
    }


}