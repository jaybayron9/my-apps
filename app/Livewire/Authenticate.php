<?php

namespace App\Livewire;

use Livewire\Component; 

class Authenticate extends Component
{ 
    public $firstname; 
    public $lastname;   
    public $username; 
    public $email; 
    public $phone;
    public $password; 
    public $password_confirmation; 

    public function validate_data() {
        $this->validate([
            'firstname' => ['required'],
            'lastname' => ['required'],
            'username' => ['required'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'integer', 'digits:11'],
            'password' => ['required', 'confirmed']
        ], [
            'firstname.required' => 'The :attribute field is required.',
            'lastname.required' => 'The :attribute field is required.',
            'username.required' => 'The :attribute field is required',
            'email.required' => 'The :attribute field is required.',
            'email.email' => 'Invalid :attribute address.',
            'phone.required' => 'The :attribute field is required.',
            'phone.digits' => 'The :attribute is a minimum of 11 digits.',
            'password.required' => 'The :attribute field is required.',
            'password.confirmed' => 'Password does not match.'
        ], [
            'firstname' => 'first name',
            'lastname' => 'last name'
        ]);
    }    

    public function render()
    {
        return view('livewire.authenticate');
    }
}
