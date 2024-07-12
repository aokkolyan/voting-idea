<?php

namespace App\Http\Livewire;


use App\Models\Idea;
use Livewire\Livewire;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class CreateIdea extends Component
{
    public $title ;
    public $category = 1;
    public $description;

    protected $rules = [
        'title' => 'required|min:4',
        'category' => 'required|integer',
        'description' => 'required|min:4',
    ];


    public function CreateIdea()
    {
        if(Auth()->check()){
            $this->validate();
            Idea::create([
                'user_id'     => Auth::id(),
                'title'       => $this->title,
                'category_id' => $this->category,
                'status_id'   => 1,
                'description' => $this->description,
            ]); 
            
            session()->flash('sucess_message',"Idea created successfully");

            $this->reset();

            return redirect()->route('idea.index');
        }
        abort(Response::HTTP_FORBIDDEN);
        
    }




    public function render()
    {
        return view('livewire.create-idea',[
            'categories' => Category::all(),
        ]);
    }
}
