<?php

declare(strict_types=1);

namespace App\Providers;

use App\Extensions\Illuminate\View\Factory as ViewFactory;
use Illuminate\Contracts\View\Factory as ViewFactoryContract;
use Illuminate\View\ViewServiceProvider as ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    protected function createFactory($resolver, $finder, $events): ViewFactoryContract
    {
        return new ViewFactory($resolver, $finder, $events);
    }
}
