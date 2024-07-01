@props(['model'])

<div class="custom-number-input mx-auto w-40" x-data="window._{{ $uid }}" x-init="initialize()">
    <div class="w-full items-center justify-center flex flex-row relative bg-transparent mt-1">

        {{-- Decrement --}}
        <button x-on:click="decrement" data-action="decrement" class="h-7 w-7 flex items-center justify-center bg-gray-200 text-gray-500 hover:text-gray-600 hover:bg-gray-300 rounded-full cursor-pointer outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6"/></svg>
        </button>

        {{-- Input --}}
        <input type="text" wire:model.defer="{{ $model }}" class="focus:outline-none focus:ring-0 border-0 text-center w-1/4 bg-transparent font-medium text-sm hover:text-black focus:text-black  cursor-default flex items-center text-gray-700  outline-none" readonly></input>

        {{-- Increment --}}
        <button x-on:click="increment" data-action="increment" class="h-7 w-7 flex items-center justify-center bg-gray-200 text-gray-500 hover:text-gray-600 hover:bg-gray-300 rounded-full cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg>
        </button>

    </div>
</div>

@push('scripts')
    <script>
        function _{{ $uid }}() {
            return {

                quantity: @entangle($model),

                increment() {
                    // Quantity must not be greater than 10
                    if (this.quantity < 10) {
                        this.quantity++;
                    }
                },  

                // Decrement
                decrement() {
                    // Quantity must be greater than 1
                    if (this.quantity > 1) {
                        this.quantity--;
                    }
                },

                // Initialize
                initialize() {
                }

            }
        }
        window._{{ $uid }} = _{{ $uid }}()
    </script>
@endpush
