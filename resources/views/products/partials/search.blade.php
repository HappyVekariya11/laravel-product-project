<form action="{{ route('products.index') }}" method="GET">
    <div id="filterBar"
        class="my-4 flex items-center justify-between bg-secondary-100 dark:bg-secondary-900 rounded-lg p-4">

        <div>
            <span class="text-gray-600 dark:text-gray-300"></span>
        </div>


        <div>
            <a href="{{ route('products.create') }}">
                <x-primary-button type="button" class="card-shadow flex items-center">
                    <i class="fa fa-plus h-5 w-5 me-1.5"></i>
                    Add Product
                </x-primary-button>
            </a>
        </div>
    </div>
</form>
