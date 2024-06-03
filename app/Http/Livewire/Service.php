<?php

namespace App\Http\Livewire;

use Livewire\Component;



class Service extends Component
{
    public $service="Home";

    protected $listeners = [
        'knowmore'
    ];

    public function render()
    {
        return view('livewire.service');
    }

    public function knowmore($value){
        dd("dcc");
        $this->service = $value;
        dd($this->service);
    }
}
