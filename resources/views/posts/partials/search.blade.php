<form action="{{ route('posts.index') }}" method="GET">
    <div id="filterBar"
        class="my-4 flex items-center justify-between bg-secondary-100 dark:bg-secondary-900 rounded-lg p-4">
<x-search></x-search>
        {{-- Left side (search or filters) --}}
        <div>
            <span class="text-gray-600 dark:text-gray-300"></span>
        </div>

        {{-- Right side (Add Post button) --}}
        <div>
            <a href="{{ route('posts.create') }}">
                <x-primary-button type="button" class="card-shadow flex items-center">
                    <i class="fa fa-plus h-5 w-5 me-1.5"></i>
                    Add Post
                </x-primary-button>
            </a>
        </div>
    </div>
</form>
