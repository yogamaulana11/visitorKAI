<?php

namespace App\Exports;

use App\Models\Datatamu;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

   protected $start_date;
   protected $end_date;

    public function __construct($start_date, $end_date)
    {
        $this->start_date = $start_date;
        $this->end_date = $end_date;
    }

    public function collection()
    {
        return Datatamu::whereBetween('created_at', [$this->start_date, $this->end_date])->get();
    }

    public function headings():array
    {
        return [
            'id',
            'Nama',
            'Kontak',
            'Instansi',
            'Keperluan',
            'Tujuan',
            'Jadwal Temu',
            'Waktu Keluar',
            'Keterangan',
            'Tanggal dibuat',
        ];
    }
}
