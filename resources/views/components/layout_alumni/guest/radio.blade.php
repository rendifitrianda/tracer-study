<div class="form-check">
    <input class="form-check-input @error($name) is-invalid @enderror" type="radio" name="{{ $name ?? '' }}"
        value="{{ $value ?? '' }}" id="{{ $name ?? '' }}">
    <label class="form-check-label" for="{{ $name ?? '' }}">
        {{ $label ?? '' }}
    </label>
    @error($name)
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
