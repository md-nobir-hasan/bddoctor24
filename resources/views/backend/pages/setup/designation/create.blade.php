@extends('backend.layouts.app')

{{-- Page Title  --}}
@push('title')
    Add Designation -
@endpush

{{-- Custom Css  --}}
@push('css')
@endpush

{{-- Custom js  --}}
@push('js')
    {{-- <!--start::Global javascript (used in all pages)--> --}}
    {{-- <script src="{{asset('vendors/alpinejs/dist/cdn.min.js') }}"></script><!-- core js --> --}}
    {{-- <script src="{{asset('vendors/flatpickr/dist/flatpickr.min.js') }}"></script><!-- input date --> --}}
    {{-- <script src="{{asset('vendors/flatpickr/dist/plugins/rangePlugin.js') }}"></script><!-- input range date --> --}}
    {{-- <script src="{{asset('vendors/%40yaireo/tagify/dist/tagify.min.js') }}"></script><!-- input tags --> --}}
    {{-- <script src="{{asset('vendors/pristinejs/dist/pristine.min.js') }}"></script><!-- form validation --> --}}
    <script src="{{ asset('vendors/simple-datatables/dist/umd/simple-datatables.js') }}"></script><!--sort table-->
    <!--end::Global javascript (used in all pages)-->

    <!-- Minify Global javascript (for production purpose) -->
    {{-- <!-- <script src="{{asset('dist/js/scripts.js') }}"></script> --> --}}
    <!--start::Demo javascript ( initialize global javascript )-->
    {{-- <script src="{{asset('src/js/demo.js') }}"></script> --}}

    {{-- Following two file transfer to vite. if any problem occur then command vite linking and uncommand these files --}}
    {{-- <script src="{{asset('vendors/chart.js/dist/chart.min.js') }}"></script><!-- charts --> --}}
    <!-- chart config -->
    {{-- <script src="{{asset('src/js/chart/ecommerce.js') }}"></script> --}}

    @vite(['resources/js/admin/chart/chart.min.js', 'resources/js/admin/chart/ecommerce.js'])
@endpush

{{-- Page Main Content  --}}
@section('main')
    <div class="mx-auto py-2 sm:px-2">
        <!-- row -->
        <div class="flex flex-wrap flex-row">
            <div class="flex-shrink max-w-full px-4 w-full">
                <p class="text-xl font-bold mt-3 mb-5 text-center">Designation</p>
            </div>
            <div class="flex-shrink max-w-full px-4 w-full mx-auto lg:w-2/3 mb-6">
                <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg mb-6">
                    <div class="w-full overflow-x-auto">
                        <div class="flex-1 p-6 bg-gray-100 dark:bg-gray-900 bg-opacity-60 dark:bg-opacity-20">
                            <form method="POST" action="{{ route('setup.designation.store') }}"
                                class="flex flex-wrap flex-row -mx-4">
                                @csrf
                                {{--  Title --}}
                                <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6">
                                    <label for="title" class="inline-block mb-2">Title</label>
                                    <input type="text" name="title" value="{{ old('title') }}"
                                        class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                        id="title">
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class='flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6'>
                                                            <label for='inistitute_name' class='inline-block mb-2'>Inistitute Name</label> 
                                                            <input id='inistitute_name' type='text' name='inistitute_name' placeholder='Exp:- Enter Inistitute Name'
                                                                value='{{ old('inistitute_name') }}' class='w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600'>
                                                            @error('inistitute_name')
                                                                <span class='text-danger'>{{ $message }}</span>
                                                            @enderror
                                                        </div><div class='flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6'>
                                                            <label for='other_info' class='inline-block mb-2'>Other Info</label> 
                                                            <input id='other_info' type='text' name='other_info' placeholder='Exp:- Enter Other Info'
                                                                value='{{ old('other_info') }}' class='w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600'>
                                                            @error('other_info')
                                                                <span class='text-danger'>{{ $message }}</span>
                                                            @enderror
                                                        </div><div class='flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6'>
                                                            <label for='url' class='inline-block mb-2'>Url</label> 
                                                            <input id='url' type='text' name='url' placeholder='Exp:- Enter Url'
                                                                value='{{ old('url') }}' class='w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600'>
                                                            @error('url')
                                                                <span class='text-danger'>{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                {{--  serial --}}
                                <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6">
                                    <label for="serial" class="inline-block mb-2">serial</label>
                                    <input type="text" name="serial" value="{{ $serial }}"
                                        class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                        id="serial">
                                    @error('serial')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- Status --}}
                                <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6">
                                    <label for="status" class="inline-block mb-2">Status</label>
                                    <select id="status"
                                        class="inline-block w-full leading-5 relative py-2 pl-3 pr-8 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600 select-caret appearance-none">
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                    </select>
                                    @error('status')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="flex-shrink max-w-full px-4 w-full text-center">
                                    <button name='redirect' value='back' type="submit"
                                        class="py-2 px-5 inline-block text-center rounded mb-3 leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
                                        Save
                                    </button>
                                    <button name='redirect' value='new' type="submit"
                                        class="py-2 px-5 inline-block text-center rounded mb-3 leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
                                        Save & New
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
