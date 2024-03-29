<?php

namespace App\Livewire\Admin;

use App\Models\Admin;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class AdminLogin extends Component
{
    public $nipp;
    public $password;

    public function render()
    {
        $admin = Admin::where('nipp', $this->nipp)->first();
        // @dd($admin);
        return view('livewire.admin.admin-login', compact('admin'));
    }


    protected $messages = [
        "nipp.required" => "nipp tidak boleh kosong",
        "password.required" => "Password Tidak boleh kosong",
        "password.min" => "Password min. 8 karakter"
    ];

    public function validasi()
    {
        $this->validate([
            "nipp" => "required",
            "password" => "required|min:8",
        ]);
    }

    public function updated()
    {
        $this->validasi();
    }

    public function forLogin()
    {
        $this->validasi();
        $admin = Admin::where('nipp', $this->nipp)->first();
        // @dd($admin);
        if ($admin) {
            if (Hash::check($this->password, $admin->password)) {
                auth('admin-web')->login($admin, true);
                return redirect('admin');
            } else {
                // session()->flash('error', 'Password salah');
                $this->dispatch('error', ['pesan' => 'Password salah']);
            }
        } else {
            // session()->flash('error', 'nipp tidak ditemukan');
            $this->dispatch('error', ['pesan' => 'nipp tidak ditemukan']);
        }
    }
}
