<?php

namespace App\Livewire\Admin;

use App\Models\Admin;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ResetPassword extends Component
{
    public function render()
    {
        return view('livewire.admin.reset-password');
    }
    public $token;
    public $email, $password, $password_confirmation;
    public $hide = true;

    public function mount($token)
    {
        $this->token = $token;
    }

    public function submitResetPasswordForm()
    {
        $this->validate([
            // 'email' => 'required',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required',
        ]);

        // $email = $this->email;
        $token = $this->token;
        $password = $this->password;



        $updatePassword = DB::table('password_reset_tokens')
            ->where([
                // 'email' => $email,
                'token' => $token,
            ])
            ->first();

        if (!$updatePassword) {
            $this->dispatch('error', ['pesan' => 'Invalid token!']);
            return;
        }

        $email = $updatePassword->email;

         $akun = Admin::where('email', $email)->first();

        if (!$akun) {
            $this->dispatch('error', ['pesan' => 'Akun tidak ditemukan!']);
            return;
        }

        $akun->update([
            'password' => Hash::make($password),
        ]);

        DB::table('password_reset_tokens')->where(['email' => $akun->email])->delete();
        // DB::table('password_reset_tokens')->where(['email' => $akun->phone])->delete();

        $this->dispatch('success', ['pesan' => 'Kata sandi Anda telah diubah!']);
        return back()->with('success', 'Kata sandi Anda telah diubah!');
    }
}
