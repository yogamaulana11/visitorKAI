<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{
    public $name;
    public $email;
    public $kontak;
    public $password;

    public function render()
    {
        return view('livewire.auth.register');
    }

    public function register()
    {
        $user = new User();
        $user->name = $this->name;
        $user->kontak = $this->kontak;
        $user->email = $this->email;
        $user->password = Hash::make($this->password);
        $user->save();
        redirect('/login');
    }

    public function updated()
    {
        $this->validation();
    }

    public function validation()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'kontak' => 'required|numeric|unique:users',
            'password' => 'required|min:8'
        ]);
    }
}
