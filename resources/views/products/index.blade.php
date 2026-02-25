<x-app-layout>

    <x-slot name="header">
        <div class="w-full flex justify-center">
            <h2
                class="font-semibold text-xl text-gray-800 leading-tight border-y-2 border-primary-400 
            inline-block py-3 header-font dark:text-white cursor-default">
               Product List
            </h2>
        </div>
    </x-slot>
<h3>Products of {{ $category->name }}</h3>

@foreach($products as $product)
    <p>{{ $product->name }}</p>
@endforeach

    {{-- <x-slot name="slot">
        <div x-data="products" class="w-full relative" id="container">
           @include('products.partials.search')
            @include('products.partials.table')
        </div>
    </x-slot>
    @push('scripts')
        @vite(['resources/js/pages/products.js'])
    @endpush --}}
</x-app-layout>
