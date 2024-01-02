<div class="form-group mb-3">
    <label for="{{ $field }}" class="form-label">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $field }}" id="{{ $field }}"
        class="form-control @error($field) is-invalid @enderror" placeholder="{{ $placeholder ?? '' }}"
        @isset($value)
        value="{{ $value }}"
        @else
        value="{{ old($field) }}"
        @endisset />
    @error($field)
        <p class="text-danger float-righ" style="font-size: 12px">{{ $message }}</p>
    @enderror
</div>
