<?php

declare(strict_types=1);

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Overview extends Component
{
    public function render(): View
    {
        return view('components.overview', [
            'items' => [
                [
                    'id'            => 1,
                    'abstractValue' => 'foo',
                    'concreteValue' => 'bar',
                ],
                [
                    'id'            => 2,
                    'abstractValue' => 'lorem',
                    'concreteValue' => 'ipsum',
                ],
            ],
        ]);
    }
}
