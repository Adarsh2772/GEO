<?php

namespace App\Http\Livewire;

use Livewire\Component;



class Service extends Component
{
    public $service="Home";


    public function render()
    {
        return view('livewire.service');
    }

    public function knowmore($value){
        dd("cddcdc");
        $this->service = $value;
        dd($this->service);
    }
}
