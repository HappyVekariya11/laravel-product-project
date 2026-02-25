<div class="bg-secondary-100 dark:bg-secondary-900 rounded-lg rounded-b-none px-6 w-full relative mt-2.5 overflow-x-auto">
    <table class="app-table w-full">

        <thead class="bg-secondary-200">
            <tr>
                <th class="text-secondary-600 p-3 px-4 text-center font-semibold">No</th>
                <th class="text-secondary-600 p-3 px-4 text-center font-semibold">restaurant name</th>
                <th class="text-secondary-600 p-3 px-4 text-center font-semibold">latitude</th>
                <th class="text-secondary-600 p-3 px-4 text-center font-semibold">longitude</th>
                <th class="text-secondary-600 p-3 px-4 text-center font-semibold"> &nbsp;</th>
            </tr>
        </thead>
        <tbody class="striped">
            @foreach($restaurants as $index=>$restaurant)
            <tr class="border-b border-customGray text-center hover:bg-secondary-400 ">
                <td>{{$index+1}} </td>
                <td>{{$restaurant->name}}</td>
                <td>{{$restaurant->latitude}}</td>
                <td>{{$restaurant->longitude}}</td>
            </tr> 
            @endforeach
        </tbody>

    </table>
</div>
