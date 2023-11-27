@php
    /** @var array<array-key, array{id:int, abstractValue:string, concreteValue:string}> $items */
@endphp
<ul>
    @foreach($items as $item)
        <li>
            <x-item
                :abstractValue="$item['abstractValue']"
                :concreteValue="$item['concreteValue']"
            />
        </li>
    @endforeach
    <li>
        <x-item
            :abstractValue="'thing'"
            :concreteValue="'stuff'"
        />
    </li>
    <li>
        <x-item
            :abstractValue="'test'"
            :concreteValue="'me'"
        />
    </li>
</ul>
