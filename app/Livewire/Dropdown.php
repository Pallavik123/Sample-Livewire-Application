<?php

namespace App\Livewire;
use App\Models\Subcountry;
use Livewire\Component;
use App\Models\Country;

class Dropdown extends Component
{
    public $countries;

    public $selectedcountry=null;

    public $updatedSelectedCountry=null;

    public $subcountries;

    public function mount()
    {

        $this->countries=Country::all();
    }
    public function render()
    {
        return view('livewire.dropdown');
    }


    public function updatedSelectedCountry ()
    {
        //dd($this->updatedSelectedCountry);

        $this->subcountries=Subcountry::where('county_code',$this->selectedcountry)->get();
    }
}
