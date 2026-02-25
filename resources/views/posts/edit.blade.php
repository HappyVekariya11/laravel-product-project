 <x-app-layout>

     <x-slot name="header">
         <div class="flex md:w-36">
         </div>

         <h2 class="header-font mx-auto  whitespace-nowrap cursor-default md:text-lg text-lg">Edit Post</h2>
     </x-slot>

     <x-slot name="slot">
         {{-- <div>

             <x-breadcrumb :links="[['label' => __('common/terms.visitor_desk'), 'url' => route('dashboard.management') . '?tab=visitors'],
              ['label' => __('office/task.tasks/complaint'), 'url' => route('tasks.index')]]"> </x-breadcrumb>

         </div> --}}
         {{-- edit ward --}}
         <div class="dark:bg-dark-700  rounded-lg flex justify-center">
             <div class="w-full lg:w-full h-full">
                 <form x-ref="taskForm" enctype="multipart/form-data" action="{{ route('posts.update', $post) }}"
                     method="POST" class="flex flex-col">
                     @csrf
                     @method('PUT')
                     @include('posts.partials.form')
                     <div class=" flex justify-center items-center mb-6">
                      <x-primary-button class="  me-2" @click="$refs.taskForm.submit()">
                         Update
                     </x-primary-button>
                     </div>
                 </form>
                 <div class="flex justify-center items-center mb-6">

                     {{-- <x-primary-button class="me-2" @click="$refs.taskForm.submit()">
                         Update
                     </x-primary-button> --}}

                     <form onsubmit="return confirm('{{ __('common/terms.confirm_delete') }}');" method="post"
                         action="{{ route('posts.destroy', $post) }}">
                         <button type="submit" disabled style="display: none" aria-hidden="true"></button>
                         @csrf
                         @method('delete')
                         <x-danger-button>
                             <i class="fa-solid fa-trash-can me-1.5"></i>
                            Delete
                         </x-danger-button>
                     </form>

                 </div>


             </div>
         </div>
     </x-slot>
 </x-app-layout>