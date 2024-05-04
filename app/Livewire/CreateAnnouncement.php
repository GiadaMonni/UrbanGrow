<?php

namespace App\Livewire;

use App\Models\Announcements;
use Livewire\Component;

class CreateAnnouncement extends Component
{
    public $title;
    public $body;
    public $price;

    protected $rules=[
        'title'=>'required|min:4',
        'body'=>'required|min:10',
        'price'=>'required|numeric'
    ];

    protected $message=[
        'required'=>'Il campo :attribute è richiesto',
        'min'=>'Il campo :attribute è troppo corto',
        'numeric'=>'Il campo :attribute deve essere un numero'
        
    ];

    public function store()
    {
        Announcements::create([
            'title'=>$this->title,
            'body'=>$this->body,
            'price'=>$this->price,
        ]);
        $this->cleanForm();
    }

    public function update($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function cleanForm()
    {
            $this->title = '';
            $this->body = '';
            $this->price = '';
    }
    public function render()
    {
        return view('livewire.create-announcement');
    }
}
