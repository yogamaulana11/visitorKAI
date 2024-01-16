<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;
use App\Livewire\Admin\DataTamu;

class Dashboard extends Component
{
    public $cToday;
    public $cYear;
    public $cWeek;
    public $cMonth;

    public function render()
    {
        $get_data = new DataTamu;
        $this->cToday = $this->jFromDatatamu($get_data);
        $this->cWeek = $this->jFromWeek($get_data);
        $this->cMonth = $this->jFromMonth($get_data);
        $this->cYear = $this->jFromYear($get_data);
        return view('livewire.admin.components.dashboard');
    }

    
    // jumlah pengunjung dalam 1 tahun
    public function jFromYear($param){
        return $param->jYear($param);
    }

    // jumlah pengunjung dalam 1 bulan
    public function jFromMonth($param){
        return $param->jMonth($param);
    }

    // jumlah pengunjung dalam 1 minggu
    public function jFromWeek($param){
        return $param->jWeek($param);
    }

    // jumlah pengunjung hari ini
    public function jFromDatatamu($param){
        return $param->jToday($param);
    }
    
}
