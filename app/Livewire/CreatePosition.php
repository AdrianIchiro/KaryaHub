<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Position;

class CreatePosition extends Component
{

    public $position_name = '';
    public $salary = '';
    public $jobdesc = '';

    public function save()
    {
        Position::create([
            'position_name' => $this->position_name,
            'salary' => $this->salary,
            'jobdesc' => $this->jobdesc
        ]);

        $this->redirectRoute('posisi-kerja.index', navigate: true);
    }

    public function render()
    {
        return view('livewire.create-position');
    }
}
