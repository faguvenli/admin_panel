<?php

namespace App\Providers;

use Form;
use Illuminate\Support\ServiceProvider;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Form::component('textField', 'admin.form_components.textField', [
           'name', 'text', 'value' => null, 'attributes' => []
        ]);

        Form::component('passwordField', 'admin.form_components.passwordField', [
            'name', 'text'
        ]);

        Form::component('selectField', 'admin.form_components.selectField', [
            'name', 'text', 'values', 'selected' => null
        ]);
    }
}
