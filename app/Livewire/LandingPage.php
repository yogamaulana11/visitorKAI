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

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }

    public function validasi()
    {
        $this->validate([
            'instansi' => 'required',
            'keperluan' => 'required',
            'tujuan' => 'required',
        ]);
    }

    protected $messages = [
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
        if (auth()->user()) {
            if ($this->instansi == null || $this->keperluan == null || $this->tujuan == null) {
                $this->dispatch('error', ['pesan' => 'Data Tidak Boleh Kosong']);
                return;
            } else {
                $this->validasi();
                $data = new Datatamu();
                $data->nama = auth()->user()->name;
                // @dd(Datatamu::where('kontak', $this->kontak)->first());
                $data->kontak = auth()->user()->kontak;
                $data->instansi = $this->instansi;
                $data->keperluan = $this->keperluan;
                $data->tujuan = $this->tujuan;
                $data->save();
                // $this->showSuccess = true;
                $this->dispatch('success', ['pesan' => 'Data Berhasil Disimpan']);
                $this->resetInput();
            }
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
