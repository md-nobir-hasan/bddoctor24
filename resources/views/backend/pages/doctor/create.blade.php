@extends('backend.layouts.app')

{{-- Page Title  --}}
@push('title')
    Add Doctor -
@endpush


{{-- Custom js  --}}
@push('js')

    <script src="{{ asset('vendors/simple-datatables/dist/umd/simple-datatables.js') }}"></script><!--sort table-->

    @vite(['resources/js/admin/chart/chart.min.js', 'resources/js/admin/chart/ecommerce.js'])

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
                            <x-form.form route='doctor.store'>
                                {{-- image uploader  --}}
                                <x-form.dropzone-single name='doctor' is_required='0'/>

                                {{--  Title --}}
                                <x-form.text name="title" label='Label Working'/>

                                {{-- Degree --}}
                                <x-form.select2 name='designation_id' :options="$Designation" is_required='0'/>

                                {{-- Category --}}
                                <x-form.select2 name='category_id' :options="$Category" />


                                {{-- Gendar --}}
                                <x-form.select name='gendar' :options="(object)[(object)['id'=>'Male','title'=>'Male'],(object)['id'=>'Female','title'=>'Female'],(object)['id'=>'Other','title'=>'Other']]"/>

                                 {{-- Experience --}}
                                 <x-form.text name='experience' is_required='0'/>


                                {{-- Degree --}}
                                 <x-form.select2 name='degree_id' :options="$Degree" is_required='0'/>

                                 {{-- ConsultantType --}}
                                 <x-form.select2 name='consultant_type_id' :options="$ConsultantType" is_required='0'/>


                                {{-- Chamber --}}
                                <x-form.select2 name='chamber_id' :options="$Chamber" is_required='0'/>


                                {{-- district --}}
                                <x-form.select2 name='district_id' :options="$District" is_required='0'/>

                                {{-- Other info --}}
                                <x-form.text name='other_info' is_required='0'/>

                                {{-- description --}}
                                <x-form.textarea name='description' is_required='0'/>

                                {{-- description --}}
                                <x-form.checkbox name='is_default' is_required='0'/>

                                {{--  serial --}}
                                <x-form.number name="serial" />

                                {{-- Status --}}
                                <x-form.select name='status' :options="(object)[(object)['id'=>1,'title'=>'Active'],(object)['id'=>0,'title'=>'Inactive']]"/>

                            </x-form.form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
