<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Validator;
use App\Http\Validators\HelloValidator;
use Illuminate\Support\ServiceProvider;



class HelloServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $validator = $this->app['validator'];
        $validator->resolver(function($translator,$data,$rules,$messages){
            return new HelloValidator($translator,$data,$rules,$messages);
        });
    }
}
