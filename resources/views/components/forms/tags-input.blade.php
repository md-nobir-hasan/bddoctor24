@props(['label', 'placeholder', 'model', 'tags' => []])

<div x-data="window.XsPKiJSnOYqVlZD" @click.away="clear()" @keydown.escape="clear()">

    {{-- Label --}}
    <label for="tags-input-component-id-{{ $model }}" class="block text-xs font-semibold tracking-wide {{ $errors->first($model) ? 'text-red-600' : 'text-gray-700 dark:text-gray-100' }}">{{ htmlspecialchars_decode($label) }}</label>
    
    {{-- Form --}}
    <div class="mt-2 relative flex items-center">

        {{-- Input --}}
        <input 
            type="text" 
            :disabled="tags.length === maximum ? true : false" 
            maxlength="20" 
            x-model="value" 
            x-ref="value" 
            @keyup.enter="addTag()" 
            id="tags-input-component-id-{{ $model }}" 
            placeholder="{{ htmlspecialchars_decode($placeholder) }}" 
            class="focus:!ring-1 block w-full ltr:pr-10 ltr:pl-4 rtl:pl-10 rtl:!pr-4 py-3.5 placeholder:font-normal placeholder:text-[13px] dark:placeholder-zinc-300 text-sm font-medium text-zinc-800 dark:text-white rounded-md dark:bg-transparent {{ $errors->first($model) ? 'focus:!ring-red-600 focus:!border-red-600 border-red-500' : 'focus:!ring-primary-600 focus:!border-primary-600 border-gray-300 dark:border-zinc-500' }}" 
            {{ $attributes }}>

        <button @click="addTag()" :disabled="tags.length === maximum ? true : false" type="button" class="absolute ltr:right-0 rtl:left-0 ltr:mr-2 rtl:ml-2 w-8 h-8 inline-flex justify-center items-center focus:outline-none flex-none rounded-full bg-primary-600 hover:bg-primary-700 focus:ring-0 text-white disabled:bg-gray-300 disabled:hover:bg-gray-300 disabled:text-gray-500 disabled:cursor-not-allowed">
            <svg class="w-4 h-4" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
        </button>

    </div>

    {{-- Error --}}
    @error($model)
        <p class="mt-1 text-xs text-red-600">{{ $errors->first($model) }}</p>
    @enderror

    {{-- List of tags --}}
    <template x-for="(tag, index) in tags">
        <div class="bg-gray-200 dark:bg-zinc-700 inline-flex items-center text-sm rounded mt-2 mr-1">
            <span class="ltr:ml-2 ltr:mr-1 rtl:mr-2 rtl:ml-1 leading-relaxed truncate max-w-xs text-xs dark:text-zinc-300" x-text="tag"></span>
            <button @click.prevent="removeTag(index, tag)" class="w-6 h-8 inline-block align-middle text-gray-500 hover:text-gray-600 focus:outline-none">
                <svg class="w-6 h-6 fill-current mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M15.78 14.36a1 1 0 0 1-1.42 1.42l-2.82-2.83-2.83 2.83a1 1 0 1 1-1.42-1.42l2.83-2.82L7.3 8.7a1 1 0 0 1 1.42-1.42l2.83 2.83 2.82-2.83a1 1 0 0 1 1.42 1.42l-2.83 2.83 2.83 2.82z"/></svg>
            </button>
        </div>
    </template>

    {{-- Helper --}}
    <p class="mt-1 text-xs text-gray-300">{{ __('messages.t_max_tags_letters_numbers_only', ['max' => settings("publish")->max_tags]) }}</p>

</div>

@push('scripts')
    <script>
        function XsPKiJSnOYqVlZD() {
            return {
                maximum: Number("{{ settings('publish')->max_tags }}"),
                value  : '',
                tags   : @js($tags),
                
                addTag() {
                    if (this.value != "" && !this.hasTag(this.value) && this.isValid(this.value)) {
                        if (this.tags.length < this.maximum) {
                            @this.addTag(this.value)
                            this.tags.push( this.value )
                        }
                    }
                    this.clear()
                    this.$refs.value.focus()
                },
                
                hasTag(tag) {
                    var tag = this.tags.find(e => {
                        return e.toLowerCase() === tag.toLowerCase()
                    })
                    return tag != undefined
                },

                isValid(tag) {

                    return true;

                },

                removeTag(index, tag) {
                    @this.removeTag(tag)
                    this.tags.splice(index, 1)
                },
                
                clear() {
                    this.value = ''
                }
            }
        }
        window.XsPKiJSnOYqVlZD = XsPKiJSnOYqVlZD();
    </script>
@endpush