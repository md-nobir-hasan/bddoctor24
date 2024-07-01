@props(['label', 'model'])

<div>

    {{-- Label --}}
    <label for="color-picker-component-id-{{ $model }}" class="block text-sm font-medium tracking-wide {{ $errors->first($model) ? 'text-red-600 dark:text-red-500' : 'text-gray-600 dark:text-white' }}">{{ htmlspecialchars_decode($label) }}</label>

    {{-- Form --}}
    <div class="mt-2 relative color-picker-wrapper">
        <input type="text" wire:model.defer="{{ $model }}" id="color-picker-component-id-{{ $model }}" class="color-picker-input disabled:cursor-not-allowed focus:!ring-1 block w-full ltr:pr-10 ltr:pl-4 rtl:pl-10 rtl:!pr-4 py-3.5 placeholder:font-normal placeholder:text-[13px] dark:placeholder-zinc-300 text-sm font-medium text-zinc-800 dark:text-white rounded-md dark:bg-transparent  cursor-pointer border {{ $errors->first($model) ? 'border-red-500 text-red-600 placeholder-red-400 focus:ring-red-500 focus:border-red-500' : 'border-gray-200 placeholder-gray-400 focus:ring-primary-600 focus:border-primary-600' }}" {{ $attributes }}>
    </div>

    {{-- Error --}}
    @error($model)
        <p class="mt-1 text-xs text-red-600 dark:text-red-500">{{ $errors->first($model) }}</p>
    @enderror

</div>