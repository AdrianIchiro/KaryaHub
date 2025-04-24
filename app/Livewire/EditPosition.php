<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Position;

class EditPosition extends Component
{
    public $position_name, $salary, $jobdesc, $position_id;

    public function mount($id)
    {
        $position = Position::find($id);

        $this->position_id = $position->id;
        $this->position_name = $position->position_name;
        $this->salary = $position->salary;
        $this->jobdesc = $position->jobdesc;
    }

    public function save()
    {
        Position::find($this->position_id)->update([
            'position_name' => $this->position_name,
            'salary' => $this->salary,
            'jobdesc' => $this->jobdesc
        ]);


        $this->redirectRoute('posisi-kerja.index', navigate: true);
    }

    public function render()
    {
        return view('livewire.edit-position');
    }
}
