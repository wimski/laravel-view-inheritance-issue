<?php

declare(strict_types=1);

namespace App\Livewire;

use Livewire\Component;

class Overview extends Component
{
    /**
     * @var array<array-key, array{
     *     id: int,
     *     abstractValue: string,
     *     concreteValue: string,
     * }>
     */
    public array $items;

    public function mount(): void
    {
        $this->items = [
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
        ];
    }
}
