<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class EditData extends Component
{
    public function render()
    {
        return view('livewire.admin.edit-data');
    }
    public function logout()
    {
        auth('admin-web')->logout();
        redirect('admin/login');
    }
}
