<div class="form-group mb-3">
    <label>{{ $label }}</label>
    <select name="{{ $field }}" class="form-control @error($field) is-invalid @enderror">
        <option value="">--- Pilih ---</option>
        {{ $slot }}
    </select>
    @error($field)
        <span class="text-danger float-right" style="font-size: 12px">{{ $message }}</span>
    @enderror
</div>
