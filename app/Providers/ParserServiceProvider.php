<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ParserServiceProvider extends ServiceProvider
{
    
    public function register(): void
    {
        $this->app->bind('Parser', 'App\Services\ParserService');
    }
 
}