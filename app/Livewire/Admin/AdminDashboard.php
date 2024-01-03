<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Datatamu as ModelsDatatamu;

class AdminDashboard extends Component
{
    public $cToday;     // jumlah tamu hari ini
    public $cWeek;     // jumlah tamu minggu ini
    public $cMonth;     // jumlah tamu bulan ini
    public $cYear;     // jumlah tamu tahun ini

    public function render()
    {
        $onJan = $this->onMonth(1);
        $onFeb = $this->onMonth(2);
        $onMar = $this->onMonth(3); 
        $onApr = $this->onMonth(4); 
        $onMei = $this->onMonth(5); 
        $onJun = $this->onMonth(6); 
        $onJul = $this->onMonth(7); 
        $onAug = $this->onMonth(8); 
        $onSep = $this->onMonth(9); 
        $onOct = $this->onMonth(10); 
        $onNov = $this->onMonth(11); 
        $onDes = $this->onMonth(12); 
        $labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July'];
        $data = [$onJan, $onFeb, $onMar, $onApr, $onMei, $onJun, $onJul, $onAug, $onSep, $onOct, $onNov, $onDes];
        return view('livewire.admin.admin-dashboard', compact('labels', 'data'));
    }

    // january
    public function onMonth($param){
        $datas = ModelsDatatamu::latest()->get();
        $yn = \Carbon\Carbon::now()->startOfYear()->isoFormat('Y');
        // var_dump($yn);
        $a = [];
        foreach($datas as $data){
            $d = intval($data->created_at->format('m'));
            $dy = intval($data->created_at->format('Y'));
            // @dd($dy);
            if ($d == $param && $dy == $yn)
            {
                $a[] = $data;
            }
            $count_data = count($a);
        }
        // @dd($count_data);
        return $count_data ?? 0;
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
