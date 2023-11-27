<?php

declare(strict_types=1);

namespace App\Extensions\Illuminate\View;

use Illuminate\View\View as BaseView;

class View extends BaseView
{
    public function render(callable $callback = null): string
    {
        $contents = parent::render();

        $this->factory->flushSections();

        return $contents;
    }
}
