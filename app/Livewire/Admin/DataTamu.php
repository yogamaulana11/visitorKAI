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
    public $showform = false;
    public $showform1 = false;

    public function render()
    {
        $data = TamuData::latest();
        $this->datas = $data->take($this->take)->get();
        return view('livewire.admin.data-tamu');
    }

    public function showForm(){
        if($this->showform){
            $this->showform = false;
        } else {
            $this->showform = true;
        }
    }
    
    public function showForm1(){
        if($this->showform1){
            $this->showform1 = false;
        } else {
            $this->showform1 = true;

        }
    }
    // public function mount()
    // {
    //     $this->datas = TamuData::latest()->get();
    // }
}
