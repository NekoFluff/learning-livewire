<div>
    <h1 class="text-xl">{{ $count }}</h1>

    <button wire:click="increment" class="ml-5">+</button>

    <button wire:click="decrement">-</button>

    <livewire:create-post title="Initial counter title"/>
</div>