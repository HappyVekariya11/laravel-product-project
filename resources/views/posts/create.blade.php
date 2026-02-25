 <x-app-layout>

     <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight border-y-2 border-primary-400 
        inline-block py-3 
    header-font text-center mx-auto dark:text-white  cursor-default">Add Post</h2>
         
     </x-slot>

     <x-slot name="slot">
         <div class=" bg-white dark:bg-secondary-700 rounded-md flex justify-center">
             <div class="w-full  lg:w-full h-full p-8">

                 <form method="POST" class="mt-4 flex flex-col items-center" enctype="multipart/form-data"
                     action="{{ route('posts.store') }}">
                     @csrf
                     @include('posts.partials.form')

                     <x-primary-button class="mt-8 mx-auto">
                         Submit
                     </x-primary-button>

                 </form>

             </div>
         </div>
     </x-slot>

 </x-app-layout>
