<?php

namespace App\Http\Livewire\UserManagement;

use Livewire\Component;
use App\Models\Permission;
use Livewire\WithPagination;

class Permissions extends Component
{
    use WithPagination;

    public $sortBy = 'title';
    public $searchTerm='';
    public $sortAsc = true;
    public $pageSize = 10;
    protected $listeners = [
        'showDeleteForm',
        'showCreateForm',
        'showEditForm',
    ];
    public $item;
    protected $rules = [
        'item.title'  => 'required',
        'item.note' => '',
    ];

    protected $validationAttributes = [
        'item.title'  => 'Title',
        'item.note' => 'Note',
    ];
    protected $paginationTheme = 'bootstrap';

    public function updatedSearchTerm()
    {
        $this->resetPage();
    }

    public function updatedPageSize()
    {
        $this->resetPage();
    }

    public function sortBy($field)
    {
        if ($field == $this->sortBy) {
            $this->sortAsc = !$this->sortAsc;
        }
        $this->sortBy = $field;
    }

    public function query()
    {
        return Permission::query();
    }
    public function render()
    {
        $data['items']= $this->query()
            ->when($this->searchTerm, function($q){
                $q->where('title', 'like', '%'.$this->searchTerm.'%')
                ->orWhere('note', 'like', '%'.$this->searchTerm.'%');
            })
            ->orderBy($this->sortBy, $this->sortAsc ? 'ASC' : 'DESC')
            ->paginate($this->pageSize);
        return view('livewire.user-management.permissions', $data);
    }

    public function showEditForm(Permission $item)
    {
        $this->resetErrorBag();
        $this->item = $item;
        $this->dispatchBrowserEvent('modal', ['modal'=>'modalEdit', 'action'=>'show']);
    }

    public function editItem()
    {
        $this->validate();
        $this->item->save();
        $this->dispatchBrowserEvent('modal', ['modal'=>'modalEdit', 'action'=>'hide']);
        $this->primaryKey = '';
        $this->dispatchBrowserEvent('alert', ['type' => 'success',  'message' => 'Successfully Updated']);
        $this->emitTo($this->parent, 'refresh');
    }
}
