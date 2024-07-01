@props(['id', 'text'])

<div>
    <div id="{{ $id }}" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-zinc-900">
        {{ $text }}
    </div>
</div>