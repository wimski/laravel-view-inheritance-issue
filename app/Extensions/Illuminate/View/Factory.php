<?php

declare(strict_types=1);

namespace App\Extensions\Illuminate\View;

use Illuminate\Contracts\View\View as ViewContract;
use Illuminate\View\Factory as ViewFactory;

class Factory extends ViewFactory
{
    protected function viewInstance($view, $path, $data): ViewContract
    {
        return new View(
            $this,
            $this->getEngineFromPath($path),
            $view,
            $path,
            $data,
        );
    }
}
