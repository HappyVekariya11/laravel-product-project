<div class="grid grid-cols-12 md:gap-5 gap-3 h-full mb-5 items-center p-6 bg-white dark:bg-secondary-700 rounded-lg w-full">

    <div class="relative lg:col-span-6 md:col-span-6 col-span-12 w-full">
        <x-app-input label="title" id="title" type="text" placeholder="" name="title" :value="$post->title ?? old('title')" autocomplete required="title" />
    </div>
    <div class="relative lg:col-span-6 md:col-span-6 col-span-12 w-full">
        <x-app-input label="slug" id="slug" type="text" placeholder="" name="slug" :value="$post->slug ?? old('slug')" autocomplete required="slug" />
    </div>
     <div class="relative w-full col-span-12 sm:col-span-6 lg:col-span-12">
        <x-textarea label="excerpt" id="excerpt" type="text" placeholder=""
            name="excerpt" :value="$post->excerpt ?? old('excerpt')" />
    </div>
     <div class="relative w-full col-span-12 sm:col-span-6 lg:col-span-12">
        <x-textarea label="body" id="body" type="text" placeholder=""
            name="body" :value="$post->body ?? old('body')" />
    </div>
    <input type="hidden" name="user_id" value="{{ auth()->id() }}">
   {{-- <div class="relative lg:col-span-6 md:col-span-6 col-span-12 w-full">
        <label for="title" class="block text-gray-700 font-semibold">Title</label>
       <input type="text" name="title" id="title"
       value="{{ old('title', $post->title) }}"
       class="w-full border border-gray-300 rounded-lg p-2 mt-1"
       placeholder="Enter post title" required>

    </div>
    <div class="relative lg:col-span-6 md:col-span-6 col-span-12 w-full">
          <label for="slug" class="block text-gray-700 font-semibold">Slug</label>
          <input type="text" name="slug" id="slug" value ="{{ old('slug', $post->slug) }}"
                class="w-full border border-gray-300 rounded-lg p-2 mt-1"
                placeholder="Enter post slug" required>
    </div>
    <div class="relative lg:col-span-6 md:col-span-6 col-span-12 w-full">
          <label for="body" class="block text-gray-700 font-semibold">Body</label>
          <textarea name="body" id="body" rows="4" value="{{ old('body', $post->body) }}"
                class="w-full border border-gray-300 rounded-lg p-2 mt-1"
                placeholder="Enter post body" required></textarea>
    </div>
   <div class="relative lg:col-span-6 md:col-span-6 col-span-12 w-full">
          <label for="excerpt" class="block text-gray-700 font-semibold">Excerpt</label>
          <textarea name="excerpt" id="excerpt" rows="4" value="{{ old('excerpt', $post->excerpt) }}"
                class="w-full border border-gray-300 rounded-lg p-2 mt-1"
                placeholder="Enter post body" required></textarea>
    </div> --}}
   
</div>
