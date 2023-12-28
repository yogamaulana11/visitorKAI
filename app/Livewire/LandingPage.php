<?php

namespace App\Livewire;

use App\Models\Datatamu;
use Livewire\Component;

class LandingPage extends Component
{
    public $nama;
    public $kontak;
    public $instansi;
    public $keperluan;
    public $tujuan;
    public $showSuccess;

    public function validasi()
    {
        $this->validate([
            'nama' => 'required',
            'kontak' => 'required',
            'instansi' => 'required',
            'keperluan' => 'required',
            'tujuan' => 'required',
        ]);
    }

    protected $messages = [
        "nama.required" => "Nama tidak boleh kosong",
        "kontak.required" => "Kontak tidak boleh kosong",
        "instansi.required" => "Instansi tidak boleh kosong",
        "keperluan.required" => "Keperluan tidak boleh kosong",
        "tujuan.required" => "Tujuan tidak boleh kosong",
    ];

    public function resetInput()
    {
        $this->nama = null;
        $this->kontak = null;
        $this->instansi = null;
        $this->keperluan = null;
        $this->tujuan = null;
    }

    public function buatKeperluan()
    {
        $this->validasi();
        $data = new Datatamu();
        $data->nama = $this->nama;
        $data->kontak = $this->kontak;
        $data->instansi = $this->instansi;
        $data->keperluan = $this->keperluan;
        $data->tujuan = $this->tujuan;
        $data->save();
        $this->showSuccess = true;
        $this->resetInput();
    }
    public function render()
    {
        return view('livewire.landing-page');
    }

    public function ForLandingPage()
    {
        $this->validasi();
    }
}
