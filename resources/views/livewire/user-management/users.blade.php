<div>
    <div class="card">
        <div class="card-header">
            {{ __('menu.user_management.title') }}
        </div>
        <div class="card-body table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>{{ __('users.fields.name') }}</th>
                        <th>{{ __('users.fields.email') }}</th>
                        <th>{{ __('users.fields.is_active') }}</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($items as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ ($item->is_active==1) ? __('global.yes') : __('global.no') }}</td>
                            <td class="col-1 text-end">

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
</div>
