<div class="grid grid-cols-12 md:gap-5 gap-3 h-full mb-5 items-center p-6 bg-white dark:bg-secondary-700 rounded-lg w-full">

    <div class="relative lg:col-span-6 md:col-span-6 col-span-12 w-full">
        <x-app-input label="name" id="name" type="text" placeholder="" name="name" :value="$product->name ?? old('name')" autocomplete required="name" />
    </div>
    <label for="category" class="block text-gray-700 font-semibold lg:col-span-6 md:col-span-6 col-span-12 w-full">category</label>
    {{-- <div class="relative lg:col-span-6 md:col-span-6 col-span-12 w-full">
        <select id="category" name="category_id" class="w-full border border-gray-300 rounded-lg p-2 mt-1" required>
            <option value="">{{ __('Select Category') }}</option>
            @foreach ($product->categories as $category)
                <option value="{{ $category->id }}"
                    {{ (isset($product) && $product->category_id == $category->id) || old('category_id') == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}</option>
            @endforeach
        </select>
    </div> --}}
   

   
   
</div>
