<div class="mb-3">
  <label for="{{ $id }}" class="form-label">{{ $label }}</label>
  <input type="{{ $type }}" class="form-control @error($id) border-danger @enderror" id="{{ $id }}" name="{{ $id }}" placeholder="{{ $placeholder }}" autocomplete="off" value="{{ old($id) }}" @if($required) required @endif>

  @error($id)
    <span class="small text-danger">{{ $message }}</span>
  @enderror
</div>
