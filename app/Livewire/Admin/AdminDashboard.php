<?php

namespace App\Livewire\Admin;

use Carbon\Carbon;
use Livewire\Component;
use App\Http\Controllers\Antrian;
use App\Models\Datatamu as ModelsDatatamu;

class AdminDashboard extends Component
{
    public $cToday;     // jumlah tamu hari ini
    public $cWeek;     // jumlah tamu minggu ini
    public $cMonth;     // jumlah tamu bulan ini
    public $cYear;     // jumlah tamu tahun ini

    public function render()
    {
        $labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July'];
        $data = [];
        for ($i = 0; $i <= 12; $i++) {
            $data[] = $this->onMonth($i);
        }
        $this->rataRata();
        return view('livewire.admin.admin-dashboard', compact('labels', 'data'));
    }

    public function logout()
    {
        auth('admin-web')->logout();
        redirect('admin/login');
    }
    // january
    public function onMonth($param)
    {
        $datas = ModelsDatatamu::latest()->get();
        $yn = \Carbon\Carbon::now()->startOfYear()->isoFormat('Y');
        // var_dump($yn);
        $a = [];
        foreach ($datas as $data) {
            $d = intval($data->created_at->format('m'));
            $dy = intval($data->created_at->format('Y'));
            // @dd($dy);
            if ($d == $param && $dy == $yn) {
                $a[] = $data;
            }
            $count_data = count($a);
        }
        // @dd($count_data);
        return $count_data ?? 0;
    }

    // rata-rata lama waktu bertamu (jam)
    public function rataRata()
    {
        $datas = ModelsDatatamu::latest()->get();
        $a = [];
        foreach ($datas as $data) {
            $jam_datang = intval(Carbon::parse($data->jadwal_temu)->format('H'));
            $jam_keluar = intval(Carbon::parse($data->waktu_keluar)->format('H'));
            $lama = $jam_keluar - $jam_datang;
            $a[] = $lama;
        }
        $counter = new Antrian($a);
        $mostCommon = $counter->mostCommon(1);
        return $mostCommon;
        // $rata_rata = array_sum($a) / count($a);
        // @dd($a);

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
