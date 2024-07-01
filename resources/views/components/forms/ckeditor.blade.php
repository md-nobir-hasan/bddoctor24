@props(['label', 'placeholder', 'model', 'old' => null, 'target'])

<div class="{{ $errors->first($model) ? 'ckeditor-has-error' : '' }}">

    {{-- Label --}}
    <label for="text-input-component-id-{{ $model }}" class="block text-[0.8125rem] font-medium {{ $errors->first($model) ? 'text-red-600 dark:text-red-500' : 'text-gray-700 dark:text-white' }}">{{ htmlspecialchars_decode($label) }}</label>

    {{-- Ckeditor --}}
    <div class="mt-2 relative" wire:ignore>
        @if ($old)
            <div id="editor-container"><?= str_replace( '&', '&amp;', $old ); ?></div>
        @else
            <div id="editor-container"></div>
        @endif
    </div>

    {{-- Error --}}
    @error($model)
        <p class="mt-1 text-xs text-red-600 dark:text-red-500">{{ $errors->first($model) }}</p>
    @enderror

</div>

@pushOnce('styles')
    {{-- Quill Style --}}
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <style>
        [dir="rtl"] .ql-editor {
            direction: rtl;
            text-align: right;
        }
        .ql-container.ql-snow {
            min-height: 100px;
            border-top: 1px solid rgb(209 213 219) !important;
        }
        .ql-container.ql-snow .ql-editor {
            max-height: 450px;
        }
        .dark .ql-editor.ql-blank::before {
            color: rgb(223 223 223 / 60%) !important;
        }
    </style>
@endPushOnce

@pushOnce('scripts')

    {{-- Quill.js Core --}}
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script>

        // Set action button
        const target       = "{{ $target }}";

        // Set toolbar options
        var toolbarOptions = [
            ['bold', 'italic', 'underline', 'strike'],
            ['blockquote', 'code-block'],
            [{ 'list': 'ordered'}, { 'list': 'bullet' }],
            [{ 'indent': '-1'}, { 'indent': '+1' }],
            [{ 'direction': __var_rtl ? 'rtl' : 'ltr' }],
            [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
            [{ 'color': [] }, { 'background': [] }],
            [{ 'align': [] }],
            ['clean'],
            @auth('admin')
            [ 'link', 'image', 'video', 'formula' ]
            @endauth
        ];

        // Initialize quill.js
        var editor = new Quill('#editor-container', {
            theme: 'snow',
            placeholder: '{!! str_replace("'", "’", htmlspecialchars_decode($placeholder)) !!}',
            modules: {
                toolbar: toolbarOptions
            }
        });

        // Set content as empty variable
        var content = editor.root.innerHTML;

        // Listen when text changes
        editor.on('text-change', function(delta, source) {
            content = editor.root.innerHTML;
        });

        // Get action button
        document.getElementById(target).onclick = function () { 
            @this.set('{{ $model }}', content); 
        };

      </script>

@endpushonce