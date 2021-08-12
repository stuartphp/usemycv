<div>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col mt-1">{{ __('menu.user_management.permissions') }}</div>
                <div class="col">

                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-md-4"><select class="form-select form-select-sm"
                        wire:model="pageSize"
                        >
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                    </select></div>
                        <div class="col-md-8"><input placeholder="{{ __('global.search') }}"
                    wire:model.debounce.300ms="searchTerm"
                    class="form-control form-control-sm"></div>
                    </div>

                </div>
            </div>

        </div>
        <div class="card-body table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>{{ __('permissions.title') }}</th>
                        <th>{{ __('permissions.note') }}</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($items as $item)
                        <tr>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->note }}</td>
                            <td class="col-1 text-end">
                                <div class="btn-group dropstart">
                                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <x-icon-three-dots-vertical/>
                                    </a>
                                    <div class="dropdown-menu">
                                        @if (count(array_intersect(session()->get('grant'), ['su','users_update']))==1)
                                        <a class="dropdown-item" href="#" wire:click="showEditForm({{ $item->id }})">Edit</a>
                                        @endif
                                        @if (count(array_intersect(session()->get('grant'), ['su','users_delete']))==1)
                                        <a class="dropdown-item" href="#" wire:click="$emitTo('admin.users.users-child', 'showDeleteForm',  {{$item->id}});">Delete</a>
                                        @endif

                                    </div>
                                  </div>
                            </td>
                        </tr>
                    @empty
                    <tr><td colspan="4">{{ __('global.no_results') }}</td></tr>
                    @endforelse
                </tbody>
            </table>
            {{ $items->links() }}
        </div>
    </div>
    <x-modal id="modalEdit" title="{{ __('global.update') }}">
        @include('user-management.permissions_form')
    </x-modal>
    <x-modal id="modalAdd" title="{{ __('global.add_new_record') }}">
        @include('user-management.permissions_form')
    </x-modal>
</div>
