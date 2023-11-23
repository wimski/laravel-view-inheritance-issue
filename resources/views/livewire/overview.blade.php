@php
    /** @var array<array-key, array{id:int, abstractValue:string, concreteValue:string}> $items */
@endphp
<ul>
    @foreach($items as $item)
        <li>
            <livewire:item
                :key="$item['id']"
                :abstractValue="$item['abstractValue']"
                :concreteValue="$item['concreteValue']"
            />
        </li>
    @endforeach
</ul>
