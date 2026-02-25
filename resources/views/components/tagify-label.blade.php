@props(['value','required' => false])

<label {{ $attributes->merge(['class' => 'rounded-lg cursor-pointer pointer-events-none absolute -top-3.5 left-2
peer-[.tagify--empty]:scale-100
text-lg scale-75
peer-[.tagify--focus]:top-[-0.8em]
peer-[.tagify--empty]:top-3.5
peer-[.tagify--empty]:w-2/3
peer-[.tagify--focus]:w-auto
peer-[.tagify--focus]:scale-75
group-focus-within:scale-75
group-focus-within:text-primary-500
duration-300 z-10 origin-[0] bg-white dark:bg-dark-600 text-secondary-600 dark:text-secondary-900 text-sm md:text-base
dark:hover:text-secondary-500 px-2 
group-peer-focus:px-2']) }}>
    {{ $value ?? $slot }}
    @if ($required)
    <span class="text-red-500">*</span>
    @endif
</label>