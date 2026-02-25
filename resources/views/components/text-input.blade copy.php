@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'placeholder' => ' ',
    'class' =>
        'block px-2.5 py-[16px] w-full text-sm text-secondary-900 border border-secondary-300 hover:border hover:border-secondary-700 bg-transparent rounded-lg border-1 dark:hover:border-secondary-200 dark:hover:text-secondary-200 dark:text-white dark:border-secondary-500 dark:focus:border-primary-500 focus:outline-none focus:ring-0 focus:border-primary-600 peer',
]) !!}>
