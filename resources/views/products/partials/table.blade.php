<div class="bg-secondary-100 dark:bg-secondary-900 rounded-lg rounded-b-none px-6 w-full relative mt-2.5 overflow-x-auto">
    <table class="app-table w-full">

        <thead class="bg-secondary-200">
            <tr>
                <th class="text-secondary-600 p-3 px-4 text-center font-semibold">No</th>
                <th class="text-secondary-600 p-3 px-4 text-center font-semibold">Name</th>
                <th class="text-secondary-600 p-3 px-4 text-center font-semibold">Category</th>
                <th class="text-secondary-600 p-3 px-4 text-center font-semibold"> &nbsp;</th>
            </tr>
        </thead>

        <tbody class="striped">
            @foreach($products as $index=>$product)
    
            <tr class="border-b border-customGray text-center hover:bg-secondary-400 ">
                <td  >{{$index+1}} </td>
                <td >{{$product->name}}</td>
                <td >{{$product->category->name}}</td>

               
                
                <td>
                    <div class="flex items-center justify-end me-5">
                        <a href="{{ route('products.edit', $product) }}" class="primary-ward-font">
                            <span class="w-duto h-auto text-gray-500 hover:text-gray-700 me-4"><i class="fa-solid fa-pencil h-5 w-5"></i></span>
                        </a>

                        <form onsubmit="return confirm('Do you really want to delete this item?');" method="post" enctype="multipart/form-data" action="{{route('products.destroy',$product)}}" >
                            @csrf
                            @method('delete')
                            <button>
                                <span class="w-duto h-auto text-danger-400 hover:text-danger-600">
                                    <i class="fa-solid fa-trash-can h-5 w-5"></i>
                                </span>
                            </button>
                        </form>
                    </div>
                </td>
           
            </tr>
       
            @endforeach
        </tbody>

    </table>
</div>
