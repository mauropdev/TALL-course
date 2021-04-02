@props([
    'trigger'
])
<div
    x-show="{{ $trigger }}"
    x-on:click.self="{{ $trigger }} = false"
    x-on:keydown.escape.window="{{ $trigger }} = false"
    class="flex fixed top-0 w-full h-full bg-gray-900 bg-opacity-60 items-center"
    x-cloak
>
    <div {{ $attributes->merge(['class' => 'm-auto bg-gray-200 shadow-2xl rounded-xl p-8' ]) }} class=>
        {{ $slot }}
    </div>
</div>