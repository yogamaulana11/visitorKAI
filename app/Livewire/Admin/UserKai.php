<?php

namespace App\Livewire\Admin;

use App\Models\Admin;
use Livewire\Component;
use Livewire\WithPagination;

class UserKai extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $show_edit;
    public $password;
    public $showform;
    public $showform2;
    public $showform1;
    public $search;
    public $aktifmodal;
    public $take = 5;
    public $ID;
    public $nipp;
    public $kontak;
    public $role;
    public $create_user;

    public function logout()
    {
        auth('admin-web')->logout();
        redirect('admin/login');
    }
    
    public function render()
    {
        $admin = Admin::latest();
        $datas = $admin->paginate($this->take);
        return view('livewire.admin.user-kai', compact('datas'));
    }

    public function delete($id)
    {
        $admin = Admin::find($id);
        $admin->delete();
        $this->dispatch("success", ['pesan' => 'Data berhasil di hapus!']);
    }
    public function toggleCreate()
    {
        $this->create_user = !$this->create_user;
    }

    public function createUser()
    {
        $admin = new Admin();
        $admin->nipp = $this->nipp;
        $admin->no_telp = $this->kontak;
        $admin->role = $this->role;
        $admin->password = $this->password;
        $admin->save();
        $this->dispatch('success', ['pesan' => 'Data berhasil ditambahkan']);
        $this->create_user = !$this->create_user;
    }

    public function edit()
    {
        $admin = Admin::find($this->ID);
        $admin->nipp = $this->nipp;
        $admin->no_telp = $this->kontak;
        $admin->role = $this->role;
        $admin->save();
        $this->dispatch('success', ['pesan' => 'Data berhasil di update']);
        $this->show_edit = !$this->show_edit;
    }

    public function foredit($id)
    {
        $admin = Admin::find($id);
        $this->ID = $admin->id;
        $this->nipp = $admin->nipp;
        $this->kontak = $admin->no_telp;
        $this->role = $admin->role;
        $this->show_edit = !$this->show_edit;
    }
}
