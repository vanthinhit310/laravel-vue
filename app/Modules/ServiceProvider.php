<?php

namespace App\Modules;
use Illuminate\Support\Facades\File;

class ServiceProvider extends  \Illuminate\Support\ServiceProvider{
  public function boot()
  {
    $directories = array_map('basename', File::directories(__DIR__));
    foreach ($directories as $moduleName) {
      $this->_registerModule($moduleName);
    }
  }
  private function _registerModule($moduleName) {
    $modulePath = __DIR__ . "/$moduleName/";
    // boot route
    if (File::exists($modulePath . 'routes.php')) {
      $this->loadRoutesFrom($modulePath . 'routes.php');
    }
    // boot migration
    if (File::exists($modulePath . 'Migrations')) {
      $this->loadMigrationsFrom($modulePath . 'Migrations');
    }
    // boot languages
    if (File::exists($modulePath . 'Languages')) {
      $this->loadTranslationsFrom($modulePath . 'Languages', $moduleName);
    }
    // boot views
    if (File::exists($modulePath . 'Views')) {
      $this->loadViewsFrom($modulePath . 'Views', $moduleName);
    }
  }
}
