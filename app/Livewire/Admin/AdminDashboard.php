<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class AdminDashboard extends Component
{
    // public $labels = [];
    // public $data = [];
    public function render()
    {
        $labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July'];
        $data = [10, 20, 30, 40, 50, 60, 70];
        return view('livewire.admin.admin-dashboard', compact('labels', 'data'));
    }

    public function index()
    {
        // Contoh data chart
        $chartData = [
            'January' => 20,
            'February' => 35,
            'March' => 40,
            // Tambahkan data bulan lainnya
        ];

        return view('chart.index', compact('chartData'));
    }
}
