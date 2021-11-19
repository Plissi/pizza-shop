<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Menu;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;
use Image;

class Pizzaform extends Component
{
    use WithFileUploads;

    public $name, $description, $prix1, $prix2, $prix3, $photo;

    protected $rules =[];

    public function submit()
    {
        $this -> validate([
            'name' => 'required',
            'description' => 'required',
            'prix1' => 'numeric',
            'prix2' => 'numeric',
            'prix3' => 'numeric',
            'photo'=>'required|image'
        ]);
        
        //dd($this);

        DB::transaction(function(){
            $image = $this-> photo; // the image
            $filename = $this -> name; // the file name from the form
            $extension = $image->getClientOriginalExtension(); // the original file extension
    
            Image::make($image->getRealPath()) // make an image with the intervention/image package
            -> resize(300, 300, function ($constraint) { //resize the image to 300 x 300
                $constraint->aspectRatio(); // keep the same aspectRation so that the image looks good
            }) -> save('thumbnails/' . $filename . '-thumbnail.' . $extension); // save the thumbnail
    
            $image->storeAs('public/pizzas', $filename . '.' . $extension); // save the original image
    
            Menu::create([
                'name' => $this -> name,
                'description' => $this -> description,
                'image' => 'thumbnails/' . $filename . '-thumbnail.' . $extension,
                'price_small' => $this -> prix1,
                'price_medium' => $this -> prix2,
                'price_large' => $this -> prix3,
            ]); // save the form's information
        });

        return redirect()->route('menu.index');
    }

    public function render()
    {
        return view('livewire.pizzaform');
    }
}
