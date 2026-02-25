<div class="bg-white dark:bg-secondary-700 rounded-lg w-full p-6 mb-5">


    <div class="grid grid-cols-12 gap-5 mb-8">

        <div class="col-span-12 md:col-span-6">
            <x-app-input label="Name" id="name" type="text" name="name" :value="$variant->name ?? old('name')" required />
        </div>

        <div class="col-span-12 md:col-span-6">
            <x-textarea label="Description" id="description" name="description" :value="$variant->description ?? old('description')" />
        </div>

    </div>

    <div class="border-b pb-3 mb-6">
        <h2 class="text-xl font-semibold dark:text-secondary-200">
            Add Product Quantity & Price
        </h2>
    </div>

    <div id="variant-wrapper" class="space-y-6">

        <div class="grid grid-cols-12 gap-4 p-4 border rounded-lg dark:border-secondary-600">
            <div class="col-span-12 md:col-span-6">
                <x-app-input label="Quantity" id="quantity" type="number" name="quantity" :value="$variant->quantity ?? old('quantity')"
                    required />
            </div>


            <div class="col-span-12 md:col-span-6">
                <x-app-input label="Price" id="price" type="number" name="price" :value="$variant->price ?? old('price')" required />
            </div>

        </div>

    </div>

</div>
