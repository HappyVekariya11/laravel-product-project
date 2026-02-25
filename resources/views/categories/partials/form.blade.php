<div class="grid grid-cols-12 md:gap-5 gap-3 h-full mb-5 items-center p-6 bg-white dark:bg-secondary-700 rounded-lg w-full">

    <div class="relative lg:col-span-6 md:col-span-6 col-span-12 w-full">
        <x-app-input label="name" id="name" type="text" placeholder="" name="name" :value="$category->name ?? old('name')" autocomplete required="name" />
    </div>
      {{-- <div class="col-span-12 sm:col-span-6 lg:col-span-3 flex flex-col">
            <x-tagify label="{{__('common/terms.district')}}" mode="select" :url="route('districts.suggest')" :value="tagify('District', [$person->district_id??old('person_district_id')])" name="person_district_id" id="person_district_id" name="person_district_id" class="block w-full" type="text" :required="true" />
            <x-field-error field="person_district_id" />
        </div> --}}
   
</div>
