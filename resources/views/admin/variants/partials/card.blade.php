
<div class="bg-secondary-100 dark:bg-secondary-900 rounded-lg p-6 mt-2.5">

    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-4 gap-4">

        @foreach ($variants as $variant)

            <div class="bg-white dark:bg-secondary-800 rounded-lg shadow hover:shadow-lg transition duration-300 overflow-hidden">

                <div class="aspect-square bg-gray-100 overflow-hidden flex items-center justify-center">

                    @if($variant->images->count() > 0)

                        <img src="{{ asset($variant->images->first()->image) }}"
                             class="w-full h-full object-cover hover:scale-105 transition duration-300">

                    @else
                        <span class="text-gray-400 text-sm">
                            No Image Found
                        </span>
                    @endif

                </div>

           
                <div class="p-4">

                    <h3 class="text-lg font-semibold dark:text-secondary-200 truncate">
                        {{ $variant->name }}
                    </h3>

                    <p class="text-sm text-gray-500 dark:text-secondary-400 mt-1 line-clamp-2">
                        {{ $variant->description }}
                    </p>

                    @foreach ($variant->prices as $price)
                        <p class="text-sm text-gray-600 dark:text-secondary-300 mt-2">
                            Price: ${{ $price->price }}
                        </p>
                    @endforeach

                </div>

            </div>

        @endforeach

    </div>

</div>
