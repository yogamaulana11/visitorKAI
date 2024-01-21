<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class ReportData extends Component
{
    public $start_date;
    public $end_date;

    public function render()
    {
        return view('livewire.admin.report-data');
    }
    public function logout()
    {
        auth('admin-web')->logout();
        redirect('admin/login');
    }

    public function exportData(){
        return Excel::download(new UsersExport($this->start_date, $this->end_date), 'datatamu.xlsx');
    }
}
