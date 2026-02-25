@props(['value'])

<label {{ $attributes->merge(['class' => 'cursor-pointer absolute text-lg text-secondary-300 hover:text-secondary-700 duration-300 transform -translate-y-4 scale-75 top-0.5 z-10 origin-[0] bg-white dark:bg-secondary-700 dark:text-secondary-500 px-3 peer-focus:px-2 peer-focus:text-primary-600 peer-focus:dark:text-primary-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-0.5 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1']) }}>
    {{ $value ?? $slot }}
</label>
