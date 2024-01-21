<?php

namespace App\Livewire\Auth;

use App\Models\Datatamu;
use Livewire\Component;

class Dashboard extends Component
{
    public $count_data;
    public $take = 5;
    public $n = 0;

    public function render()
    {
        $data = Datatamu::latest();
        if (auth()->user()) {
            $this->count_data = $data->where('nama', auth()->user()->name)->count();
        }

        $datas = $data->where('nama', auth()->user()->name)->paginate($this->take);
        // dd($data);
        return view('livewire.auth.dashboard', compact('datas'));
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
