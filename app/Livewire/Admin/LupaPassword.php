<?php

namespace App\Livewire\Admin;

use Exception;
use Carbon\Carbon;
use App\Models\Admin;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class LupaPassword extends Component
{
    public $nipp;
    public $no_telp;
    public $email;

    public function render()
    {
        // $admin = Admin::where('nipp', $this->nipp)->first();
        return view('livewire.admin.lupa-password');
    }

    public function kirimLupaPassword()
    {
        $akun = Admin::where('email', $this->email)->first();
        $cekToken = DB::table('password_reset_tokens')
            ->where([
                'email' => $this->email,
            ])
            ->first();
        if ($cekToken) {
            $token = $cekToken->token;
            // kirim langsung
            if ($akun) {
                try {
                    Mail::send('emails.forgetPassword', ['token' => $token], function ($message) use ($akun) {
                        $message->to($akun->email);
                        $message->subject('Reset Password');
                    });
                } catch (\Exception $e) {
                    // @dd($e);
                    $this->dispatch('error', ['pesan' => 'kesalahan koneksi internet']);
                }

                $this->dispatch('success', ['pesan' => 'Kami telah mengirimkan tautan setel ulang kata sandi Anda melalui Email!']);
            } else {
                $this->dispatch('error', ['pesan' => 'akun tidak ditemukan']);
            }
        } else {
            $token = Str::random(64);
            if ($akun) {
                DB::table('password_reset_tokens')->insert([
                    'email' => $this->email,
                    'token' => $token,
                    'created_at' => Carbon::now(),
                ]);
                try {
                    Mail::send('emails.forgetPasswordCustomer', ['token' => $token], function ($message) use ($akun) {
                        $message->to($akun->email);
                        $message->subject('Reset Password');
                    });
                } catch (Exception $e) {
                    $this->dispatch('error', ['pesan' => 'kesalahan koneksi internet']);
                }


                $this->dispatch('success', ['pesan' => 'Kami telah mengirimkan tautan setel ulang kata sandi Anda melalui Email!']);

            } else {
                $this->dispatch('error', ['pesan' => 'akun tidak ditemukan']);
            }
        }

    }
}
