<div class="bg-secondary-100 dark:bg-secondary-900 rounded-lg p-6 mt-2.5">

    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-4 gap-4 shadow-sm">

        @foreach ($products as $product)
         <h3 class="text-lg font-semibold dark:text-secondary-200 ">{{ $product->name }}</h3>
        @endforeach

    </div>

</div>
