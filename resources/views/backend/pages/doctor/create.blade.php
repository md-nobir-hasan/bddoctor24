@extends('backend.layouts.app')

{{-- Page Title  --}}
@push('title')
    Add Doctor -
@endpush

{{-- Custom Css  --}}
@push('css')
    {{-- @vite("resources/css/css/style.css") --}}
    {{-- <link rel="stylesheet" href="/backend/tom-select/tom-select.min.css"> --}}
@endpush

{{-- Custom js  --}}
@push('js')
    {{-- <!--start::Global javascript (used in all pages)--> --}}
    {{-- <script src="{{asset('vendors/alpinejs/dist/cdn.min.js') }}"></script><!-- core js --> --}}
    {{-- <script src="{{asset('vendors/flatpickr/dist/flatpickr.min.js') }}"></script><!-- input date --> --}}
    {{-- <script src="{{asset('vendors/flatpickr/dist/plugins/rangePlugin.js') }}"></script><!-- input range date --> --}}
    {{-- <script src="{{asset('vendors/tagify/tagify.min.js') }}"></script><!-- input tags --> --}}
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
    {{-- Tagify codding  --}}
    @vite(['resources/js/admin/chart/chart.min.js', 'resources/js/admin/chart/ecommerce.js'])


    {{-- <script src="/backend/tom-select/tom-select.complete.js"></script> --}}
    {{-- <script>
        new TomSelect("#district_id", {
            create: true,
            sortField: {
                field: "text",
                direction: "asc"
            }
        });
    </script> --}}
@endpush

{{-- Page Main Content  --}}
@section('main')
    <div class="mx-auto py-2 sm:px-2">
        <!-- row -->
        <div class="flex flex-wrap flex-row">
            <div class="flex-shrink max-w-full px-4 w-full">
                <a href="{{ route('doctor.index') }}">
                    <p class="text-xl font-bold mt-3 mb-5 text-center">Doctor</p>
                </a>
            </div>
            <div class="flex-shrink max-w-full px-4 w-full mx-auto lg:w-2/3 mb-6">
                <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg mb-6">
                    <div class="w-full overflow-x-auto">
                        <div class="flex-1 p-6 bg-gray-100 dark:bg-gray-900 bg-opacity-60 dark:bg-opacity-20">
                            <form method="POST" action="{{ route('doctor.store') }}" class="flex flex-wrap flex-row -mx-4">
                                @csrf
                                {{-- image uploader  --}}
                                <x-forms.dropzone-multiple name='doctor' is_required='0'/>

                                {{--  Title --}}
                                <x-forms.text-input name="title"></x-forms.text-input>

                                {{-- Degree --}}
                                <x-forms.select2-input name='designation_id' :options="$Designation" is_required='0'/>

                                {{-- Category --}}
                                <x-forms.select2-input name='category_id' :options="$Category" />


                                {{-- Gendar --}}
                                <x-forms.select-input name='status' :options="(object)[(object)['id'=>'Male','title'=>'Male'],(object)['id'=>'Female','title'=>'Female'],(object)['id'=>'Other','title'=>'Other']]"/>

                                 {{-- Experience --}}
                                 <x-forms.text-input name='experience' is_required='0'/>


                                {{-- Degree --}}
                                 <x-forms.select2-input name='consultant_type_id' :options="$Degree" is_required='0'/>

                                 {{-- ConsultantType --}}
                                 <x-forms.select2-input name='consultant_type_id' :options="$ConsultantType" is_required='0'/>


                                {{-- Chamber --}}
                                <x-forms.select2-input name='chamber_id' :options="$Chamber" is_required='0'/>


                                {{-- district --}}
                                <x-forms.select2-input name='district_id' :options="$District" is_required='0'/>

                                {{-- Other info --}}
                                <x-forms.text-input name='other_info' is_required='0'/>

                                {{--  serial --}}
                                <x-forms.number-input name="serial" />

                                {{-- Status --}}
                                <x-forms.select-input name='status' :options="(object)[(object)['id'=>1,'title'=>'Active'],(object)['id'=>0,'title'=>'Inactive']]"/>

                                {{-- save and save new  ( Submit button )  --}}
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
