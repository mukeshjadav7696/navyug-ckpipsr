<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

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
    //
    Blade::component('image-picker', '\App\View\Components\Form\ImagePicker');
    Blade::component('keyvalue', '\App\View\Components\Form\Keyvalue');
    Blade::component('textarea', '\App\View\Components\Form\Textarea');
    Blade::component('text', '\App\View\Components\Form\Text');
    Blade::component('email', '\App\View\Components\Form\Email');
    Blade::component('number', '\App\View\Components\Form\Number');
    Blade::component('amount', '\App\View\Components\Form\Amount');
    Blade::component('mobile', '\App\View\Components\Form\Mobile');
    Blade::component('datepicker', '\App\View\Components\Form\Datepicker');
    Blade::component('select', '\App\View\Components\Form\Select');
    Blade::component('dynamic-select', '\App\View\Components\Form\DynamicSelect');
    Blade::component('checkbox', '\App\View\Components\Form\Checkbox');
    Blade::component('input-tags', '\App\View\Components\Form\InputTag');
    Blade::component('autocomplete', '\App\View\Components\Form\Autocomplete');
    Blade::component('file', '\App\View\Components\Form\File');
    Blade::component('radio', '\App\View\Components\Form\Radio');
  }
}
