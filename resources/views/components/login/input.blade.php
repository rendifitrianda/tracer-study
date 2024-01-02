<div class="form-group">
    <label for="">{{ $label ?? '' }}</label>
    <div class="form-icons">
        <ion-icon name="{{ $leftIcons ?? '' }}-outline"></ion-icon>
    </div>
    <input type="{{ $type ?? '' }}" class="form-control  @error($name) is-invalid  @enderror" name="{{ $name ?? '' }}"
        placeholder="{{ $placeholder ?? '' }}" autocomplete="off">
    @error($name)
        <span class="invalid-fedback text-error">{{ $message }}</span>
    @enderror
</div>
