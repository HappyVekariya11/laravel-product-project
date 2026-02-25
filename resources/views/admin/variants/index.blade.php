<x-app-layout>

    <x-slot name="header">
        <div class="w-full flex justify-center">
            <h4
                class="font-semibold text-xl text-gray-800 leading-tight border-y-2 border-primary-400 
            inline-block py-3 header-font dark:text-white cursor-default">
             {{$product->name}} Variants
            </h4>
        </div>
        <h1>  {{$product->slug}}  </h1>
    </x-slot>


    <x-slot name="slot">
        <div class="w-full relative" id="container">
            @include('admin.variants.partials.search')
            @include('admin.variants.partials.card')
        </div>
    </x-slot>
</x-app-layout>
