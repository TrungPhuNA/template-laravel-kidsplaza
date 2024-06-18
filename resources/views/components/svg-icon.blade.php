@props(['name'])

@if (file_exists(public_path("svg/{$name}.svg")))
    {!! file_get_contents(public_path("svg/{$name}.svg")) !!}
@else
    <!-- SVG not found -->
@endif