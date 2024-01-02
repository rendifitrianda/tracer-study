<div class="form-group">
    <label for="">{{ $label ?? '' }}</label>
    <div class="form-icons">
        <ion-icon name="{{ $leftIcons ?? '' }}-outline"></ion-icon>
    </div>
    <input type="{{ $type ?? '' }}" class="form-control input-password  @error($name) is-invalid  @enderror"
        name="{{ $name ?? '' }}" placeholder="{{ $placeholder ?? '' }}" autocomplete="off">
    <div class="form-icons right">
        <ion-icon name="{{ $rightIcons ?? '' }}-outline"></ion-icon>
    </div>
    @error($name)
        <span class="invalid-fedback text-error">{{ $message }}</span>
    @enderror
</div>
