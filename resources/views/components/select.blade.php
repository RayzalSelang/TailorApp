@props(['label', 'id', 'options' => [], 'value' => null])

<div class="form-group">
    <label>{{ $label ?? '' }}</label>
    <select class="form-control @error($id) is-invalid @enderror" name="{{ $id ?? '' }}" id="{{ $id ?? '' }}"
        {{ $attributes }}>
        <option selected disabled>Pilih {{ $label ?? '' }}</option>
        @foreach ($options as $optionValue => $optionLabel)
            <option value="{{ $optionValue }}" @if ($optionValue == $value) selected @endif>{{ $optionLabel }}
            </option>
        @endforeach
    </select>
    @error($id)
        <p class="text-danger">
            {{ $message }}
        </p>
    @enderror
</div>
