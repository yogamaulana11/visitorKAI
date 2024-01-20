<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.auth.dashboard');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
