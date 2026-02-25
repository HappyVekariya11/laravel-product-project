@props(['disabled' => false])
@php
    $attributes->merge(['id' => '', 'label' => '', 'name' => '']);

    $attributes->merge(['class' => $errors->has($attributes['name']) ? 'has-error' : '']);
@endphp

<div class="relative">
    <x-input-label for="{{ $attributes['id'] }}" :value="__($attributes['label'])" />
    <x-text-input :disabled="$disabled" :attributes="$attributes"></x-text-input>
    
</div>

<x-input-error :messages="$errors->get($attributes['name'])" class="mt-2" />
