<?php

namespace App\Livewire\Admin;

use Carbon\Carbon;
use App\Models\Admin;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class LupaPassword extends Component
{
    public $nipp;
    public $no_telp;

    public function render()
    {
        $admin = Admin::where('nipp', $this->nipp)->first();
        return view('livewire.admin.lupa-password', compact('admin'));
    }

    public function clickSend()
    {
        $this->reset_password_proses($this->no_telp);
    }

    public function reset_password_proses($n)
    {
        $curl = curl_init();
        $token = "eRcyD1aprbJqMT#_pN@94Yo9zcS_M-T5PUsWfKY";
        $url = "https://fonnte.com/api/send_message.php";
        $date = Carbon::now();
        $str = Str::random(12);
        $pesan = 'Halo, ini adalah password Baru kamu ' . $str;
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'phone' => $n,
                'type' => 'text',
                'text' => $pesan
            ),
            CURLOPT_HTTPHEADER => array(
                'Authorization: ' . $token . ''
            ),
        ));
        // cek nomor
        $nomor = Admin::where('no_telp', $n)->get();
        foreach ($nomor as $value) {
            if ($value->no_telp != NULL) {
                $reset = Admin::where('no_telp', $n)->first();
                $reset->updated_at = Carbon::now();
                $reset->password = bcrypt($str);
                $reset->save();
                // If nomor available
                curl_exec($curl);
                return redirect('/');
            }
        }
        // If nomor not found
        return redirect('/reset-password');
    }
    // Get Random Data
    function str()
    {
        $get = Str::random(12);
        return $get;
    }
}
