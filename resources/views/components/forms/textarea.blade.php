@props(['label' => null, 'placeholder', 'model', 'icon' => null, 'svg_icon' => null, 'rows' => 8, 'hint' => null])

<div>

    {{-- Label --}}
    @if ($label)
        <label for="textarea-input-component-id-{{ $model }}" class="block text-sm font-medium {{ $errors->first($model) ? 'text-red-600 dark:text-red-500' : 'text-gray-600 dark:text-white' }}">{{ htmlspecialchars_decode($label) }}</label>
    @endif
    
    {{-- Form --}}
    <div class="mt-2.5 relative">

        {{-- Textarea --}}
        <textarea
            placeholder="{{ htmlspecialchars_decode($placeholder) }}" 
            wire:model.defer="{{ $model }}" 
            rows="{{ $rows }}" 
            id="textarea-input-component-id-{{ $model }}" 
            class="disabled:cursor-not-allowed resize-none focus:!ring-1 block w-full ltr:pr-10 ltr:pl-4 rtl:pl-10 rtl:!pr-4 py-3.5 placeholder:font-normal placeholder:text-[13px] dark:placeholder-zinc-300 text-sm font-medium text-zinc-800 dark:text-white rounded-md dark:bg-transparent {{ $errors->first($model) ? 'focus:!ring-red-600 focus:!border-red-600 border-red-500' : 'focus:!ring-primary-600 focus:!border-primary-600 border-gray-300 dark:border-zinc-500' }} scrollbar-thin scrollbar-thumb-gray-300 scrollbar-track-gray-100 dark:scrollbar-thumb-zinc-900 dark:scrollbar-track-zinc-600" {{ $attributes }}>
            </textarea>

        {{-- Counter --}}
        <div class="ltr:text-right rtl:text-left pt-1 text-xs text-gray-400 hidden" id="element-counter-container-{{ $model }}">
            <span id="element-counter-maxlength-start-{{ $model }}">0</span> / <span id="element-counter-maxlength-end-{{ $model }}">2500</span>
        </div>

        {{-- Icon --}}
        @if ($icon)
            <div class="absolute inset-y-0 ltr:right-0 ltr:pr-4 rtl:left-0 rtl:pl-4 flex items-center pointer-events-none">
                <i class="mdi mdi-{{ $icon }} {{ $errors->first($model) ? 'text-red-400' : 'text-gray-400' }}"></i>
            </div>
        @elseif ($svg_icon)
            <div class="absolute inset-y-0 ltr:right-0 rtl:left-0 ltr:pr-4 rtl:pl-4 flex items-center pointer-events-none">
                {!! $svg_icon !!}
            </div>
        @endif

        {{-- Words counter js code --}}
        <script>

            // Get input element
            let counterElementInput{{ str_replace(['.', '-'], '_', $model) }}     = document.getElementById("textarea-input-component-id-{{ str_replace(['.', '-'], '_', $model) }}");

            // Get counter element container
            let counterElementContainer{{ str_replace(['.', '-'], '_', $model) }} = document.getElementById("element-counter-container-{{ str_replace(['.', '-'], '_', $model) }}");

            // Get counter start
            let counterElementStart{{ str_replace(['.', '-'], '_', $model) }}     = document.getElementById("element-counter-maxlength-start-{{ str_replace(['.', '-'], '_', $model) }}");

            // Get counter end
            let counterElementEnd{{ str_replace(['.', '-'], '_', $model) }}       = document.getElementById("element-counter-maxlength-end-{{ str_replace(['.', '-'], '_', $model) }}");

            // Check if element has maxlength attribute
            if ( counterElementInput{{ str_replace(['.', '-'], '_', $model) }} && counterElementInput{{ str_replace(['.', '-'], '_', $model) }}.hasAttribute('maxlength') ) {
                
                // Set max characters allowed
                counterElementEnd{{ str_replace(['.', '-'], '_', $model) }}.textContent = counterElementInput{{ str_replace(['.', '-'], '_', $model) }}.getAttribute('maxlength');

                // Show counter container
                counterElementContainer{{ str_replace(['.', '-'], '_', $model) }}.classList.remove("hidden");

                // Listen when typing
                counterElementInput{{ str_replace(['.', '-'], '_', $model) }}.addEventListener("input", function(e) {

                    // Change current characters counter
                    counterElementStart{{ str_replace(['.', '-'], '_', $model) }}.textContent = counterElementInput{{ str_replace(['.', '-'], '_', $model) }}.value.length;

                });


            }

        </script>

    </div>

    {{-- Hint --}}
    @if ($hint)
        <p class="mt-1 text-xs text-gray-400 dark:text-gray-200">{{ $hint }}</p>
    @endif

    {{-- Error --}}
    @error($model)
        <p class="mt-1 text-xs text-red-600 dark:text-red-500">{{ $errors->first($model) }}</p>
    @enderror

</div>