<?php

namespace App\Livewire\Admin\Components;

use Carbon\Carbon;
use Livewire\Component;
use App\Livewire\Admin\DataTamu;
use App\Http\Controllers\Antrian;
use App\Models\Datatamu as DataAntrian;

class Dashboard extends Component
{
    public $cToday;
    public $cYear;
    public $cWeek;
    public $cMonth;
    public $antrian;

    public function render()
    {
        $get_data = new DataTamu;
        $this->cToday = $this->jFromDatatamu($get_data);
        $this->cWeek = $this->jFromWeek($get_data);
        $this->cMonth = $this->jFromMonth($get_data);
        $this->cYear = $this->jFromYear($get_data);
        $this->antrian = $this->antri();
        return view('livewire.admin.components.dashboard');
    }

    public function antri()
    {
        $datas = DataAntrian::latest()->get();
        $a = [];
        foreach ($datas as $data)
        {
            $jam_datang = intval(Carbon::parse($data->jadwal_temu)->format('H'));
            $jam_buat = intval(Carbon::parse($data->created_at)->format('H'));
            $lama = $jam_datang - $jam_buat;
            $a[] = $lama;
        }
        // @dd($a);
        $counter = new Antrian($a);
        // @dd($counter);
        $mostCommon = $counter->mostCommon(1);
        if (!empty($mostCommon)) {
            $nilaiTerbanyak = key($mostCommon);
            $frekuensiTerbanyak = current($mostCommon);
            return "$nilaiTerbanyak";
        } else {
            // return 0;
        }
        // $rata_rata = array_sum($a) / count($a);
        // @dd($a);

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
