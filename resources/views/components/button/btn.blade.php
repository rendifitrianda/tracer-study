<a href="{{ $url ?? '' }}" class="btn btn-{{ $class ?? '' }}"
    @isset($modal)
data-toggle="modal"
@endisset>
    <i class="fa {{ $icons ?? '' }}"></i>
    <span>{{ $title ?? '' }}</span>
</a>
