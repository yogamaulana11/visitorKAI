<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class AdminDashboard extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-dashboard');
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
