@props(['name'])

@if (file_exists(public_path("svg/{$name}.svg")))
    {!! file_get_contents(public_path("svg/{$name}.svg")) !!}
@else
    <!-- SVG not found -->
<<<<<<< HEAD
@endif
=======
@endif
>>>>>>> 9eb8b8205b9848d613fe2d15ffe370f700a51dc0
