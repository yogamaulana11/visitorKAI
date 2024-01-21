<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class ReportData extends Component
{
    public function render()
    {
        return view('livewire.admin.report-data');
    }
    public function logout()
    {
        auth('admin-web')->logout();
        redirect('admin/login');
    }
}
