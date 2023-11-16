<?php

namespace App\Livewire\Admin;

use App\Models\Admin;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class AdminLogin extends Component
{
    public $npp;
    public $password;

    public function render()
    {   
        $admin = Admin::where('npp', $this->npp)->first();
        // @dd($admin);
        return view('livewire.admin.admin-login', compact('admin'));
    }

    protected $messages = [
        "npp.required" => "NPP tidak boleh kosong",
        "password.required" => "Password Tidak boleh kosong",
        "password.min" => "Password min. 8 karakter"
    ];

    public function validasi(){
        $this->validate([
            "npp" => "required",
            "password" => "required|min:8",
        ]);
    }

    public function updated(){
        $this->validasi();
    }

    public function forLogin(){
        $this->validasi();
        $admin = Admin::where('npp', $this->npp)->first();
        // @dd($admin);
        if($admin){
            if(Hash::check($this->password, $admin->password)){
                session()->put('login', true);
                session()->put('npp', $admin->npp);
                return redirect()->route('admin.dashboard');
            }else{
                session()->flash('error', 'Password salah');
            }
        }else{
            session()->flash('error', 'NPP tidak ditemukan');
        }
    }
}
