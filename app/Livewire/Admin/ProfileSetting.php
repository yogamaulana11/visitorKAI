<?php

namespace App\Livewire\Admin;

use App\Models\Admin;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class ProfileSetting extends Component
{
    public $admin;
    public $nipp;
    public $no_telp;
    public $konfirm;
    public $password;

    public function render()
    {
        return view('livewire.admin.profile-setting');
    }

    public function logout()
    {
        auth('admin-web')->logout();
        return redirect('admin/login');
    }

    public function mount()
    {
        $this->nipp = auth('admin-web')->user()->nipp;
        $this->no_telp = auth('admin-web')->user()->no_telp;
    }

    public function updateProfile()
    {
        $this->validate([
            'nipp' => 'required|string|max:255',
            'no_telp' => 'required|string|max:255',
        ]);
        $admin = Admin::find(auth('admin-web')->user()->id);
        $admin->nipp = $this->nipp;
        $admin->no_telp = $this->no_telp;
        $admin->save();
        $this->dispatch('success', ['pesan' => 'Berhasil mengubah data profile']);
    }

    public function updatePassword()
    {
        $this->validate([
            'password' => 'required|string|min:8',
        ]);
        $admin = Admin::find(auth('admin-web')->user()->id);
        if ($this->konfirm == $this->password) {
            $admin->password = Hash::make($this->password);
        } else {
            $this->dispatch('error', ['pesan' => 'Password tidak sama']);
            return;
        }
        $admin->save();
        $this->dispatch('success', ['pesan' => 'Berhasil mengubah password']);
    }
}
