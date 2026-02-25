<form action="{{ route('restaurants.index') }}" method="GET">
    <div id="filterBar"
        class="my-4 flex items-center justify-between bg-secondary-100 dark:bg-secondary-900 rounded-lg p-4">
    <a x-on:click="showFilter = !showFilter" href="#" class="flex items-center ms-2">
                <x-secondary-button type="button" class="card-shadow">
                    <i class="fa fa-filter h-5 w-5 me-1.5"></i>
                    Filter
                </x-secondary-button>
                   <div class="inline-flex ms-auto mt-4">
                    <button class="" type="submit">
                        <i class="fa-solid fa-check h-4 w-4 me-1.5"></i>
                       Apply
                    </button>
                </div>
            </a>
        <div>
            <span class="text-gray-600 dark:text-gray-300"></span>
        </div>
    </div>
      <div x-bind:class="showFilter ? '':'hidden'" class="w-full mt-2.5  z-40 bg-white dark:bg-secondary-700 rounded-lg">

        <div class="flex flex-col lg:flex-row justify-between items-center p-4">

            <ul class="flex flex-wrap w-full">

                <li x-on:click="toggleFilter('latitude')">
                    <a href="#" class="hover:bg-secondary-100 rounded-[5rem] border-0 text-[#848B98] dark:text-secondary-400 dark:hover:bg-secondary-600 font-medium px-3.5 py-1.5">latitude
                        <span x-bind:class="filter == 'latitude' ? 'hidden' : '' "><i class="fa-solid fa-chevron-down font-bold ms-0.5"></i></span>
                        <span x-bind:class="filter != 'latitude' ? 'hidden' : '' "><i class="fa-solid fa-chevron-up font-bold ms-0.5"></i></span>
                    </a>
                </li>
                <li x-on:click="toggleFilter('longitude')">
                    <a href="#" class="hover:bg-secondary-100 rounded-[5rem] border-0 text-[#848B98] dark:text-secondary-400 dark:hover:bg-secondary-600 font-medium px-3.5 py-1.5">longitude
                        <span x-bind:class="filter == 'longitude' ? 'hidden' : '' "><i class="fa-solid fa-chevron-down font-bold ms-0.5"></i></span>
                        <span x-bind:class="filter != 'longitude' ? 'hidden' : '' "><i class="fa-solid fa-chevron-up font-bold ms-0.5"></i></span>
                    </a>
                </li>
            </ul>
        

        </div>

        <div class="px-4 pb-4" x-show="filter" x-cloak>

            <div x-show="filter == 'latitude'" class="flex justify-between items-center w-full">
                <x-app-input label="latitude" :value="request()->input('latitude')" name="latitude" id="latitude"
                    class="block w-full" type="text" />
            </div>
            <div x-show="filter == 'longitude'">
                <x-app-input label="longitude" :value="request()->input('longitude')" name="longitude" id="longitude"
                        class="block w-full" type="text" />
                
            </div>
        
        </div>

    </div>
</form>
