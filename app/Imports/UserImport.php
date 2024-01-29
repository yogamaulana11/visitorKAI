<?php

namespace App\Imports;

use App\Models\Datatamu;
use Maatwebsite\Excel\Concerns\ToModel;

class UserImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Datatamu([
            'nama'=>$row[1],
            'kontak'=>$row[5],
            'instansi'=>$row[2],
            'keperluan'=>$row[4],
            'tujuan'=>$row[3],
            'jadwal_temu'=>$row[6],
            'waktu_keluar'=>$row[7],
        ]);
    }
}
