<button class="{{ $class ?? '' }}" type="button" data-bs-toggle="modal" data-bs-target="#{{$bsTarget ?? ''}}">
    @if($icon && $iconPosition == 'left')
    <i class="{{ $icon ?? '' }}"></i>
    @endif
    {{ $text ?? '' }}
    @if($icon && $iconPosition == 'right')
    <i class="{{ $icon ?? '' }}"></i>
    @endif
    {{ $slot }}
</button>