@php
    $items = [
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
@endphp
<ul>
    @foreach($items as $item)
        <li>
            @include('partials.item', [
                'abstractValue' => $item['abstractValue'],
                'concreteValue' => $item['concreteValue'],
            ])
        </li>
    @endforeach
    <li>
        @include('partials.item', [
            'abstractValue' => 'thing',
            'concreteValue' => 'stuff',
        ])
    </li>
    <li>
        @include('partials.item', [
            'abstractValue' => 'test',
            'concreteValue' => 'me',
        ])
    </li>
</ul>
