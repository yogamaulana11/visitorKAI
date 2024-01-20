<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class Login extends Component
{
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.auth.login');
    }

    public function validation()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);
    }

    public function updated()
    {
        $this->validation();
    }

    public function login()
    {
        $user = User::where('email', $this->email)->first();
        if ($user) {
            if (Hash::check($this->password, $user->password)) {
                auth()->login($user);
                return redirect('/user');
            } else {
                $this->dispatch('error', ['pesan' => 'password atau email salah']);
            }
        } else {
            $this->dispatch('error', ['pesan' => 'email tidak ditemukan!']);
        }
    }
}
