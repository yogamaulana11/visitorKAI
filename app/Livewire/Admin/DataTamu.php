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
    public $keperluan;
    public $id_tamu;
    public $keterangan_tolak;
    public $show_edit = false;
    public $take = +10;
    public $showform = false;
    public $showform1 = false;
    public $detail_data = false;
    public $jadwal_temu;

    public function jadwalTemu()
    {
        // $this->jadwal_temu = !$this->jadwal_temu;
        $d = TamuData::find($this->id_tamu);
        $d->jadwal_temu = $this->jadwal_temu;
        $d->save();
        $this->dispatch('success', ['pesan' => 'Jadwal berhasil dibuat']);
        $this->showform = !$this->showform;
    }

    public function keteranganTolak(){
        $d = TamuData::find($this->id_tamu);
        $d->keterangan_tolak = $this->keterangan_tolak;
        $d->save();
        $this->dispatch('success', ['pesan' => 'Keterangan berhasil dibuat']);
        $this->showform1 = !$this->showform1;
    }

    public function render()
    {
        $data = TamuData::latest();
        $this->datas = $data->take($this->take)->get();
        return view('livewire.admin.data-tamu');
    }

    public function detailData($id)
    {
        $this->id_tamu = $id;
        $this->detail_data = !$this->detail_data;
    }

    public function showForm($id)
    {
        $this->id_tamu = $id;
        $this->showform = !$this->showform;
    }

    public function showForm1($id)
    {
        $this->id_tamu = $id;
        $this->showform1 = !$this->showform1;
    }

    // konfirmasi data tamu
    public function konfirTamu()
    {
        $d = TamuData::find($this->id_tamu);
        $d->isKonfir = 1;
        $d->save();
        $this->dispatch('success', ['pesan' => 'Data berhasil dikonfirmasi']);
    }

    // show edit
    public function showEdit($id)
    {
        $d = TamuData::find($id);
        $this->nama = $d->nama;
        $this->kontak = $d->kontak;
        $this->instansi = $d->instansi;
        $this->keperluan = $d->keperluan;
        $this->tujuan = $d->tujuan;
        $this->jam_buat = $d->jam_buat;
        $this->id_tamu = $id;
        $this->show_edit = !$this->show_edit;
    }

    // edit data tamu
    public function editTamu()
    {
        $d = TamuData::find($this->id_tamu);
        $d->nama = $this->nama;
        $d->kontak = $this->kontak;
        $d->instansi = $this->instansi;
        $d->keperluan = $this->keperluan;
        $d->tujuan = $this->tujuan;
        $d->save();
        $this->dispatch('success', ['pesan' => 'Data berhasil diubah']);
        $this->show_edit = !$this->show_edit;
    }

    // hapus data tamu
    public function hapusTamu($id)
    {
        $d = TamuData::find($id);
        $d->delete();
        $this->dispatch('success', ['pesan' => 'Data berhasil dihapus']);
    }
}
