<?php

namespace App\Livewire\Admin;

use App\Models\Datatamu;
use Livewire\Component;

class ViewData extends Component
{
    public $ID;
    public $tamuData;

    public function render()
    {

        return view('livewire.admin.view-data');
    }

    public function mount($ID)
    {
        $this->tamuData = Datatamu::find($ID);
    }
}
