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
    <li>
        <livewire:item
            :key="'3'"
            :abstractValue="'thing'"
            :concreteValue="'stuff'"
        />
    </li>
    <li>
        <livewire:item
            :key="'4'"
            :abstractValue="'test'"
            :concreteValue="'me'"
        />
    </li>
</ul>
