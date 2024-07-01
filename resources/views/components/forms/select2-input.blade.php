@props([
    'name' => null,
    'is_required' => true,
    'is_update' => false,
    'options',
    'value_key' => 'id',
    'text_key' => 'title',
])
@php
    $title = str()->headline(str_replace('_id', '', $name));
@endphp
<div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6">

    <label for="{{ $name }}" class="inline-block mb-2">{{ $title }}
        @if ($is_required)
            <span class="text-[red]">*</span>
        @endif
    </label>

    <select id="{{ $name }}" name="{{ $name }}" @required($is_required)
        class="select2 inline-block w-full leading-5 relative py-2 pl-3 pr-8 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600 select-caret appearance-none">
        <option value="hidden">Choose.....</option>
        @if ($is_update)
            @foreach ($options as $option)
                <option value="{{ $option->{$value_key} }}"@selected($option->{$value_key} == $datum->{$name})>{{ $option->{$text_key} }}
                </option>
            @endforeach
        @else
            @foreach ($options as $option)
                <option value="{{ $option->{$value_key} }}" @selected($option->{$value_key} == old($name))>{{ $option->{$text_key} }}
                </option>
            @endforeach
        @endif

    </select>
</div>


@pushOnce('css')
    {{-- Select2 --}}
    <link href="{{ url('node_modules/select2/dist/css/select2.min.css') }}" rel="stylesheet" />
@endPushOnce

@pushOnce('js')
    {{-- jQuery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    {{-- Select2 --}}
    <script src="{{ url('node_modules/select2/dist/js/select2.min.js') }}"></script>

    {{-- Pharaonic select2 --}}
    <script src="{{ url('public/vendor/pharaonic/pharaonic.select2.min.js') }}"></script>
@endPushOnce
