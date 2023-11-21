<?php

namespace App\Livewire\Admin;

use App\Models\Admin;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class Registrasi extends Component
{
    public $nipp;
    public $no_telp;
    public $role;
    public $password;
    
    public function render()
    {
        $admin = Admin::where('nipp', $this->nipp)->first();
        return view('livewire.admin.registrasi', compact('admin'));
    }
    protected $messages = [
        "nipp.required" => "nipp tidak boleh kosong",
        "no_telp.required" => "no telp tidak boleh kosong",
        "role.required" => "role tidak boleh kosong",
        "password.required" => "password tidak boleh kosong",
        "password.min" => "password min. 8 karakter"
    ];
    public function validasi(){
        $this->validate([
            "nipp" => "required",
            "no_telp" => "required",
            "role" => "required",
            "password" => "required|min:8",
        ]);
    }
    public function updated(){
        $this->validasi();
    }
    public function forRegistrasi(){
        $this->validasi();
        // $this->validasi();
        // $admin = new Admin();
        // $admin->nipp = $this->nipp;
        // $admin->role = $this->role;
        // $admin->password = Hash::make($this->password);
        // $admin->save();

        Admin::create([
            'nipp'=>$this->nipp,
            'no_telp'=>$this->no_telp,
            'role'=>$this->role,
            'password'=>Hash::make($this->password),
        ]);
        // $this->emit('success', ['pesan'=>'Registrasi Berhasil']);
        session()->flash('success', 'Registrasi Berhasil');
        
    }
}
