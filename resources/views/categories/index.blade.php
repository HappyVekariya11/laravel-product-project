<x-app-layout>

    <x-slot name="header">
        <div class="w-full flex justify-center">
            <h2
                class="font-semibold text-xl text-gray-800 leading-tight border-y-2 border-primary-400 
            inline-block py-3 header-font dark:text-white cursor-default">
               Category List
            </h2>
        </div>
    </x-slot>


    <x-slot name="slot">
        <div x-data="categories" class="w-full relative" id="container">
           @include('categories.partials.search')
            @include('categories.partials.table')
        </div>
    </x-slot>
    @push('scripts')
        @vite(['resources/js/pages/categories.js'])
    @endpush
</x-app-layout>
