<div class="bg-secondary-100 dark:bg-secondary-900 rounded-lg p-6 mt-2.5">

    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-4 gap-4">

        @foreach ($products as $product)
            <a href="{{ route('admin.product-variant.index', $product->id) }}"
                class="block bg-white dark:bg-secondary-800 rounded-xl shadow-md hover:shadow-xl hover:-translate-y-1 transition duration-300 p-6 text-center">

                <h3 class="text-lg font-semibold dark:text-secondary-200 truncate">
                    {{ $product->name }}
                </h3>


                <p class="text-sm text-gray-500 dark:text-secondary-400 mt-1">
                    View Variants
                </p>

            </a>
        @endforeach

    </div>

</div>
