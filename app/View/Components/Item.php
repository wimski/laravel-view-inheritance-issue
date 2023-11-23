<?php

declare(strict_types=1);

namespace App\View\Components;

use Illuminate\Contracts\View\View;

class Item extends AbstractItem
{
    public function __construct(
        string $abstractValue,
        protected string $concreteValue,
    ) {
        parent::__construct($abstractValue);
    }

    public function render(): View
    {
        return view('partials.item', [
            'abstractValue' => $this->abstractValue,
            'concreteValue' => $this->concreteValue,
        ]);
    }
}
