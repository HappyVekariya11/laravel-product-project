<x-app-layout>

    <x-slot name="header">
    </x-slot>

    <x-slot name="slot">
        <div class="w-full relative" id="container">
            @include('admin.products.partials.search')
            @include('admin.products.partials.card')

        </div>
    </x-slot>
</x-app-layout>
