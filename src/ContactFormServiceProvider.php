<?php 

namespace sBiswas\LaravelContactForm;

use Illuminate\Support\ServiceProvider;

class ContactFormServiceProvider extends ServiceProvider
{

  public function boot()
  {
    $this->loadRoutesFrom( __DIR__ . '/routes/web.php' );
    $this->loadViewsFrom( __DIR__ . '/views', 'contact');
    $this->loadMigrationsFrom( __DIR__ . '/database/migrations');
    $this->mergeConfigFrom( __DIR__ . '/config/contact_form.php', 'contact_form' );
  
    $this->publishes([ __DIR__ . '/config/contact_form.php' => config_path('contact_form.php')]);
  }

  public function register()
  {

  }
}