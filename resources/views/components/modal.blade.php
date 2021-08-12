@props(['id', 'maxWidth', 'title'])

@php
$id = $id ?? md5($attributes->wire('model'));

$maxWidth = [
    'sm' => 'modal-sm',
    'md' => '',
    'lg' => 'modal-lg',
    'xl' => 'modal-xl',
][$maxWidth ?? 'md'];
@endphp

<div class="modal" tabindex="-1" id="{{ $id }}">
    <div class="modal-dialog {{ $maxWidth }}">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">{{ $title }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          {{ $slot }}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">{{ __('global.close') }}</button>
          <button type="button" class="btn btn-primary btn-sm">{{ __('global.save') }}</button>
        </div>
      </div>
    </div>
</div>
