@props(['label', 'type' => 'text', 'id', 'placeholder', 'value' => null])

<div class="form-group">
    <label for="{{ $id }}">{{ $label ?? '' }}</label>
    <input type="{{ $type }}" name="{{ $id }}" value="{{ old($id, $value) }}"
        placeholder="{{ $placeholder ?? '' }}" class="form-control form-control-border @error($id) is-invalid @enderror"
        id="{{ $id }}" {{ $attributes }}>
    @error($id)
        <p class="text-danger">
            {{ $message }}
        </p>
    @enderror
</div>
