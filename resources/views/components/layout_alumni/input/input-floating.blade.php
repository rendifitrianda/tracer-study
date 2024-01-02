<div class="form-group-floating @if ($type == 'date') active @endif mb-5">
    <label for="{{ $name ?? '' }}">{{ $label ?? '' }}</label>
    <input type="{{ $type ?? '' }}" name="{{ $name ?? '' }}" class="form-control">
    @error($name ?? '')
        <span class="form-text">{{ $message }}</span>
    @enderror
</div>
