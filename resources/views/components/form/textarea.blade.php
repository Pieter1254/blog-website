@props(['name'])


<x-form.field>
        
    <x-form.label class="label" name="{{ $name }}"/>

    <textarea  class="border border-gray-200 rounded p-2 w-full"
            type="text"
            name="{{ $name }}"
            id="{{ $name }}"
            required
    >{{ old($name) ?? $slot }}</textarea>

    <x-form.error name="{{ $name }}"/>

</x-form.field>