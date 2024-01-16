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
            'kontak' => 'required|unique:datatamus,kontak',
            'instansi' => 'required',
            'keperluan' => 'required',
            'tujuan' => 'required',
        ]);
    }

    protected $messages = [
        "nama.required" => "Nama tidak boleh kosong",
        "kontak.required" => "Kontak tidak boleh kosong",
        "kontak.unique" => "Kontak sudah terdaftar",
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
        if($this->nama == null || $this->kontak == null || $this->instansi == null || $this->keperluan == null || $this->tujuan == null){
            $this->dispatch('error', ['pesan'=>'Data Tidak Boleh Kosong']);
            return;
        } else {
            $this->validasi();
            $data = new Datatamu();
            $data->nama = $this->nama;
            // @dd(Datatamu::where('kontak', $this->kontak)->first());
            if(Datatamu::where('kontak', $this->kontak)->first()!=null){
                $this->dispatch('error', ['pesan'=>'Kontak sudah terdaftar']);
                return;
            } else {
                $data->kontak = $this->kontak;
            }
            $data->instansi = $this->instansi;
            $data->keperluan = $this->keperluan;
            $data->tujuan = $this->tujuan;
            $data->save();
            // $this->showSuccess = true;
            $this->dispatch('success', ['pesan'=>'Data Berhasil Disimpan']);
            $this->resetInput();
        }
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
