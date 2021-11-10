<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Menu;
use Livewire\WithFileUploads;

class Pizzaform extends Component
{
    use WithFileUploads;

    public $name, $description, $prix1, $prix2, $prix3, $photo;

    protected $rules =[];

    public function submit()
    {
        $this -> validate([
            'photo'=>'required'
        ]);
        dd($this);

        Menu::create();

        return redirect()->route('menu.index');
    }

    public function render()
    {
        return view('livewire.pizzaform');
    }
}
