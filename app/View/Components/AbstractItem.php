<?php

declare(strict_types=1);

namespace App\View\Components;

use Illuminate\View\Component;

abstract class AbstractItem extends Component
{
    public function __construct(
        protected string $abstractValue,
    ) {
    }
}
