<?php

declare(strict_types=1);

namespace App\Livewire;

use Illuminate\Contracts\View\View;

class Item extends AbstractItem
{
    public string $concreteValue;

    public function render(): View
    {
        return view('partials.item');
    }
}
