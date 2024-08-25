<?php

namespace App\Providers;

use App\Models\Aside;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   */
  public function register(): void
  {
    //
  }

  /**
   * Bootstrap any application services.
   */
  public function boot(): void
  {
    Paginator::useBootstrap();

    app('view')->composer(['layouts.admin.header'], function ($view) {
      $action = app('request')->route()->getAction();
      $controller = class_basename($action['controller']);
      list($controller, $action) = explode('@', $controller);

      $view->with(compact('controller', 'action'));
    });

    $this->getViewComposer();
  }

  private function getViewComposer()
  {

    View::composer(['layouts.admin.aside'], function ($view) {
      $cacheNavigation = Aside::getNavigationSidebar();

      return $view->with(compact('cacheNavigation'));
    });
  }
}
