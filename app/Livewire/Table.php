<?php

namespace App\Livewire;

use Livewire\Component;

class Table extends Component
{  
    public $isChecked = false;

    public function checkboxChanged()
    {  
        $this->isChecked = $this->isChecked ? true : false; 
    }

    public function render()
    { 
        return view('livewire.table');
    }
}
