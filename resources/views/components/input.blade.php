<div class="form-group"></div>
    <label for="{{ $name }}">{{ $label }}</label>
    <input type="{{ $type ?? 'text' }}" class="form-control" id="{{ $name }}" name="{{ $name }}" value="{{ $value ?? '' }}">
</div>