<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;

class CalculatorForm extends Component
{  
    public $title = 'Calculator'; 

    public function render()
    {
        return view('livewire.calculator-form', [
            'numbers' => ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9',],
            'symbols' => ['.', '='],
            'operators' => ['/', '*', '-', '+']
        ]);
    }
}
