<<<<<<< HEAD
<button class="{{ $class ?? '' }}" type="button" data-bs-toggle="modal" data-bs-target="#{{$bsTarget ?? ''}}">
    @if($icon && $iconPosition == 'left')
    <i class="{{ $icon ?? '' }}"></i>
    @endif
    {{ $text ?? '' }}
    @if($icon && $iconPosition == 'right')
    <i class="{{ $icon ?? '' }}"></i>
=======
<button class="{{ $class }}" type="button" data-bs-toggle="modal" data-bs-target="#{{$bsTarget}}">
    @if($icon && $iconPosition == 'left')
    <i class="{{ $icon }}"></i>
    @endif
    {{ $text }}
    @if($icon && $iconPosition == 'right')
    <i class="{{ $icon }}"></i>
>>>>>>> 9eb8b8205b9848d613fe2d15ffe370f700a51dc0
    @endif
    {{ $slot }}
</button>