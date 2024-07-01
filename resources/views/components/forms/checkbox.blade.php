@props(['label', 'model', 'hidelabel' => false])

<label for="checkbox-input-component-id-{{ $model }}" class="block text-[0.8125rem] font-medium tracking-wide mb-2 {{ $errors->first($model) ? 'text-red-600 dark:text-red-500' : 'text-gray-700 dark:text-white' }}">{{ htmlspecialchars_decode($label) }}</label>

<div class="disabled:cursor-not-allowed focus:!ring-1 border w-full ltr:pr-10 ltr:pl-4 rtl:pl-10 rtl:!pr-4 py-3.5 placeholder:font-normal placeholder:text-[13px] dark:placeholder-zinc-300 text-sm font-medium text-zinc-800 dark:text-white rounded-md dark:bg-transparent relative flex items-center {{ $errors->first($model) ? 'focus:!ring-red-600 focus:!border-red-600 border-red-500' : 'focus:!ring-primary-600 focus:!border-primary-600 border-gray-300 dark:border-zinc-500' }}">
    {{-- Checkbox --}}
    <div class="flex items-center h-5">
        <input id="checkbox-input-component-id-{{ $model }}" type="checkbox" class="focus:ring-primary-600 h-4 w-4 text-primary-600 border-gray-300 rounded" wire:model.defer="{{ $model }}">
    </div>

    {{-- Label --}}
    <div class="ltr:ml-3 rtl:mr-3 text-xs">
        <label for="checkbox-input-component-id-{{ $model }}" class="font-medium text-sm cursor-pointer truncate overflow-hidden {{ $errors->first($model) ? 'text-red-600 dark:text-red-500' : 'text-zinc-800 dark:text-white' }}">{{ htmlspecialchars_decode($label) }}</label>
    </div>

    {{-- Error --}}
    @error($model)
        <p class="mt-1 text-xs text-red-600 dark:text-red-500">{{ $errors->first($model) }}</p>
    @enderror

</div>