@props([
    "label",
    "name",
])

@php
    $defaults = [
        "id" => $name,
        "name" => $name,
        "class" => "w-full rounded-xl border border-white/10 bg-white/10 px-5 py-4",
    ];
@endphp

<x-forms.field :$label :$name>
    <select {{ $attributes($defaults) }}>
        {{ $slot }}
    </select>
</x-forms.field>
