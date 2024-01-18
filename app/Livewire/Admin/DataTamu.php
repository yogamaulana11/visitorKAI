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
    public $cToday; // jumlah tamu hari ini
    public $_instance;
    public $ID;
    public $aktifmodal = false;

    public function render()
    {
        $data = TamuData::latest();
        $this->datas = $data->take($this->take)->get();
        $this->cToday = $this->jToday();
        return view('livewire.admin.data-tamu');
    }

    // pengunjung dalam 1 tahun
    public function jYear()
    {
        $datas = TamuData::get();
        $year_now = intval(\Carbon\Carbon::now()->isoFormat('Y'));
        $first_year = intval(\Carbon\Carbon::now()->startOfYear()->isoFormat('MM'));    // this is month on first year
        $last_year = intval(\Carbon\Carbon::now()->endOfYear()->isoFormat('MM'));       // this is month on last year
        $a = [];
        foreach ($datas as $data) {

            $dyear = intval($data->created_at->format('Y'));
            if ($dyear == $year_now) {
                $a[] = $dyear;
            }
            $count_year = count($a);
        }
        return $count_year ?? 0;
    }

    // pengunjung dalam sebulan
    public function jMonth()
    {
        $datas = TamuData::get();
        $month_now = intval(\Carbon\Carbon::now()->startOfMonth()->isoFormat('MM'));
        $year_now = intval(\Carbon\Carbon::now()->startOfMonth()->isoFormat('Y'));

        $a = [];
        foreach ($datas as $data) {
            $d = intval($data->created_at->format('m'));
            $y = intval($data->created_at->format('Y'));
            if ($d == $month_now && $y == $year_now) {
                $a[] = $d;
            }
            $count_month = count($a);
        }
        return $count_month ?? 0;
    }

    // pengunjung dalam seminggu
    public function jWeek()
    {
        $datas = TamuData::get();
        $first_week = \Carbon\Carbon::now()->startOfWeek()->isoFormat('DD');
        $last_week = \Carbon\Carbon::now()->endOfWeek()->isoFormat('DD');
        $ynow = \Carbon\Carbon::now()->endOfWeek()->isoFormat('Y');
        $mnow = \Carbon\Carbon::now()->endOfWeek()->isoFormat('MM');
        // var_dump($first_week);
        $a = [];
        foreach ($datas as $data) {
            $c = intval($data->created_at->format('d'));
            $y = intval($data->created_at->format('Y'));
            $m = intval($data->created_at->format('m'));
            // var_dump($m);
            if ($c >= intval($first_week) && $c <= intval($last_week) && $y == $ynow && $m == $mnow) {
                // $count_week= $data->count();
                $a[] = $c;
                // var_dump($c);
            }
            // var_dump($count_week);
            $count_week = count($a);
        }
        return $count_week ?? 0;
    }

    // pengunjung hari ini
    public function jToday()
    {
        try {
            $today = \Carbon\Carbon::today()->isoFormat("Y-MM-DD");
            $datas = TamuData::get();
            $a = [];
            foreach ($datas as $data) {
                if ($data->created_at->format('Y-m-d') == $today) {
                    // $d = $data->count();
                    $a[] = $data;
                } else {
                    $count_today = 0;
                }
                $count_today = count($a);
            }
            return $count_today ?? 0;
        } catch (\Exception $e) {
            return $count_today = 0;
        }
    }

    public function jadwalTemu()
    {
        // $this->jadwal_temu = !$this->jadwal_temu;
        $d = TamuData::find($this->id_tamu);
        $d->jadwal_temu = $this->jadwal_temu;
        $d->save();
        $this->dispatch('success', ['pesan' => 'Jadwal berhasil dibuat']);
        $this->showform = !$this->showform;
    }

    public function keteranganTolak()
    {
        $d = TamuData::find($this->id_tamu);
        $d->keterangan_tolak = $this->keterangan_tolak;
        $d->save();
        $this->dispatch('success', ['pesan' => 'Keterangan berhasil dibuat']);
        $this->showform1 = !$this->showform1;
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

    public function toggleModal()
    {
        $this->aktifmodal = !$this->aktifmodal;
    }
    // hapus data tamu
    public function hapusTamu($id)
    {
        $d = TamuData::find($id);
        $this->ID = $d->id;
        // $this->dispatch('', ['value' => $this->delete($id)]);
        // $this->dispatch('success1', ['pesan' => 'Data berhasil dihapus']);
        $this->aktifmodal = !$this->aktifmodal;
    }

    public function delete()
    {
        $d = TamuData::find($this->ID);
        $d->delete();
        $this->aktifmodal = !$this->aktifmodal;
        $this->dispatch('success', ['pesan' => 'Data berhasil dihapus']);
    }
}
