<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Grocery;

class GroceryForm extends Component
{
    public $grocery;

    public $groceries;

    protected $rules = [
        'grocery' => 'required|min:3|unique:App\Models\Grocery,name'
    ];

    public function mount()
    {
        $this->groceries = Grocery::all();
    }

    public function AddGrocery()
    {
        $this->validate();

        Grocery::create([
            'name' => $this->grocery,
            'quantity' => 1
        ]);

        return redirect('/');
    }

    public function render()
    {
        return view('livewire.grocery-form');
    }
}
