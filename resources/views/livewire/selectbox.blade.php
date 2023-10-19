<div>
    <p>Qty is: {{ $qty }}</p>

    <select wire:model.live="qty">
        @for($i=0; $i <= $qty; $i++)
            <option value="{{ $i }}">{{ $i }} Stk</option>
        @endfor
    </select>

    <button wire:click="reload">Reload</button>
</div>
