<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>
    <input type="text" class="form-control @error($name) is-invalid @enderror" id="{{ $name }}" name="{{ $name }}" value="{{ old($name, $value ?? '') }}" {{ $required ? 'required' : '' }}>
    @error($name)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>