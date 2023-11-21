<?php

namespace App\Livewire\Admin;

use App\Models\Admin;
use Livewire\Component;

class LupaPassword extends Component
{
    public $nipp;
    public $no_telp;

    public function render()
    {
        $admin = Admin::where('nipp', $this->nipp)->first();
        return view('livewire.admin.lupa-password', compact('admin'));
    }
    protected $messages = [
        "nipp.required" => "nipp tidak boleh kosong",
        "no_telp.required" => "no telp tidak boleh kosong",
    ];
    public function validasi()
    {
        $this->validate([
            "nipp" => "required",
            "no_telp" => "required",
        ]);
    }
    public function updated()
    {
        $this->validasi();
    }
    public function forLupaPassword()
    {
        $this->validasi();
        // $admin = new Admin();
        // $admin->nipp = $this->nipp;
        // $admin->role = $this->role;
        // $admin->password = Hash::make($this->password);
        // $admin->save();

        Admin::create([
            'nipp' => $this->nipp,
            'no_telp' => $this->no_telp,
        ]);
        session()->flash('success', 'Ganti Password Berhasil');
    }
}
