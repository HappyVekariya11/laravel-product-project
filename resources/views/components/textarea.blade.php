@props(['disabled' => false, 'value' => '','required' => false])
<!-- @php
$attributes->merge(['id' => '', 'name' => '', 'label' => '',
'class' => '']);

$attributes->merge(['class' => $errors->has($attributes['name']) ? 'has-error' : '']);
@endphp -->

@php
    $hasError = $errors->has($attributes->get('name'));

    $attributes = $attributes->merge([
        'class' => $hasError
            ? 'border-red-400 focus:border-red-400 focus:ring-red-400 dark:border-red-400 dark:focus:border-red-400 dark:focus:ring-red-400'
            : 'border-secondary-600 hover:border-secondary-700 dark:border-dark-100 dark:hover:border-dark-100',
    ]);
@endphp

<div class="relative">
  @if ($attributes['label'])
    <x-input-label
        for="{{ $attributes['id'] }}"
        :value="__($attributes['label'])"
        :required="$required"
        class="px-0" />

    @endif
    <textarea {{$disabled ? "disabled" : ""}} {!! $attributes->merge([
    'placeholder' => '',
    'class' =>
        'block p-2 md:p-4 w-full text-sm text-black border border-secondary-600 hover:border-secondary-800 bg-transparent rounded-lg border-1 dark:border-dark-50 dark:hover:border-secondary-900 dark:text-secondary-300 dark:focus:border-primary-500 focus:outline-none focus:ring-0 focus:border-primary-600 peer',
    ]) !!} >{{ $value }}</textarea>

    <!-- <x-input-label for="{{ $attributes['id'] }}" :value="__($attributes['label'])" class="px-0" /> -->
  

</div>

<x-input-error :messages="$errors->get($attributes['name'])" class="mt-2" />