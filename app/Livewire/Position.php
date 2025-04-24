<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Position as ModelsPosition;

class Position extends Component
{
    public function delete($id)
    {
        ModelsPosition::find($id)->delete();
    }

    public function render()
    {
        return view('livewire.position', [
            'positions' => ModelsPosition::all(),
        ]);
    }
}
