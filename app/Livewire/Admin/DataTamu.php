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
    public $take = +10;

    public function render()
    {
        $data = TamuData::latest();
        $this->datas = $data->take($this->take)->get();
        return view('livewire.admin.data-tamu');
    }

    // public function mount()
    // {
    //     $this->datas = TamuData::latest()->get();
    // }
}
