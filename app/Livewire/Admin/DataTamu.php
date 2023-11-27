<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Datatamu as TamuData;

class DataTamu extends Component
{
    public $nama;
    public $kontak;
    public $instansi;
    public $tujuan;
    public $datas;
    public $jam_buat;

    public function render()
    {
        $data = TamuData::latest()->get();
        $this->datas = $data;
        return view('livewire.admin.data-tamu');
    }

    // public function mount()
    // {
    //     $this->datas = TamuData::latest()->get();
    // }
}
