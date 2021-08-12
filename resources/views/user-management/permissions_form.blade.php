<div class="row mb-2">
    <label>{{ __('permissions.title') }}</label>
    <input type="text" wire:model.defer="item.title" class="form-control form-control-sm @error('item.title') is-invalid @enderror" />
    @error('item.title')
        <div class="text-danger">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="row mb-2">
    <label>{{ __('permissions.note') }}</label>
    <input type="text" wire:model.defer="item.note" class="form-control form-control-sm @error('item.note') is-invalid @enderror" />
    @error('item.note')
        <div class="text-danger">
            {{ $message }}
        </div>
    @enderror
</div>
