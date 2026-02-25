<div class="bg-white dark:bg-secondary-700 rounded-lg w-full p-6 mb-5">

    <div class="border-b pb-3 mb-6">
        <h2 class="text-xl font-semibold dark:text-secondary-200">
            Add Product
        </h2>
    </div>

    <div class="grid grid-cols-12 gap-5 mb-8">

        <div class="col-span-12 md:col-span-6">
            <x-app-input  label="Name" id="name" type="text" name="name" :value="$product->name ?? old('name')" required />
           
        </div>

     
        <div class="col-span-12 md:col-span-6">
            <x-textarea 
                label="Description"
                id="description"
                name="description"
                :value="$product->description ?? old('description')"
                
            />
          
        </div>
         <div class="col-span-12 md:col-span-6">
            <x-app-input  label="slug" id="slug" type="text" name="slug" :value="$product->slug ?? old('slug')"  />
           
        </div>
        <div class="col-span-12 md:col-span-6">
            <x-app-input  label="title" id="title" type="text" name="title" :value="$product->title ?? old('title')"  />
           
        </div>

    </div>
   
</div>
