<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Weather extends Component
{
    public $city = 'Antipolo';
    public $temperature_type = 'celsius';
    public $forecast_data;

    public function input() { 
        $this->forecast();
    }

    public function forecast() {
        try {
            $response = Http::withHeaders([
                'X-RapidAPI-Key' => '37633832b2msh57b474baeab9e69p1b44bbjsn38f6726378d6',
                'X-RapidAPI-Host' => 'weatherapi-com.p.rapidapi.com',
            ])->get('https://weatherapi-com.p.rapidapi.com/forecast.json', [
                'q' => $this->city,
                'days' => 1
            ]);

            $this->forecast_data = $response->json();  
            return $this->forecast_data;
        } catch (\Exception $error) {
            dd($error);
        }
    }

    public function render()
    {  
        $this->forecast();
        return view('livewire.weather', [
            'forecast' => $this->forecast()
        ]);
    }
}
