<div class="bg-secondary-100 dark:bg-secondary-900 rounded-lg rounded-b-none px-6 w-full relative mt-2.5 overflow-x-auto">
    <table class="app-table w-full">

        <thead class="bg-secondary-200">
            <tr>
                <th class="text-secondary-600 p-3 px-4 text-center font-semibold">No</th>
                <th class="text-secondary-600 p-3 px-4 text-center font-semibold">Post Title</th>
                <th class="text-secondary-600 p-3 px-4 text-center font-semibold">slug</th>
                <th class="text-secondary-600 p-3 px-4 text-center font-semibold">body</th>
                <th class="text-secondary-600 p-3 px-4 text-center font-semibold"> &nbsp;</th>
            </tr>
        </thead>

        <tbody class="striped">
            @foreach($posts as $index=>$post)
    
            <tr class="border-b border-customGray text-center hover:bg-secondary-400 ">
                <td x-on:click="showPost(@js($post->id))" >{{(($posts->currentPage()-1) * $posts->perPage()) + ($index+1)}} </td>
                <td x-on:click="showPost(@js($post->id))">{{$post->title}}</td>
                <td x-on:click="showPost(@js($post->id))">{{$post->slug}}</td>
                <td x-on:click="showPost(@js($post->id))">{{$post->body}}</td>
               
                
                <td>
                    <div class="flex items-center justify-end me-5">
                        <a href="{{ route('posts.edit', $post) }}" class="primary-ward-font">
                            <span class="w-duto h-auto text-gray-500 hover:text-gray-700 me-4"><i class="fa-solid fa-pencil h-5 w-5"></i></span>
                        </a>

                        <form onsubmit="return confirm('Do you really want to delete this item?');" method="post" enctype="multipart/form-data" action="{{route('posts.destroy',$post)}}" >
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
                {{-- @endcan --}}
            </tr>
       
            @endforeach
        </tbody>

    </table>
</div>

{{-- pagination and details --}}
<div class="items-center px-6 py-4 bg-secondary-100 dark:bg-secondary-900 rounded-lg rounded-t-none">
    {{ $posts->links() }}
</div>
