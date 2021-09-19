<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\chart_of_account;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Homecomponent extends Component
{

    public $ids;   
        public $account_type;
        public $name;

        public $Sub_Chart_OF;
 

   public function resetfeald()

   {
        $this->account_type='Bank';
        $this->name='';

   }

   public function call()

   {
       
    $this->emit('openmodal_update');

   }

   public function find($id)

   {
    $this->resetValidation();
    $this->emit('openmodal_update');
    $char =  chart_of_account::where('id',$id)->first();
    $this->ids = $char->id  ;
    $this->name = $char->Account_Cat  ;
    $this-> account_type = $char->Account_Name  ;

   }
   public function upate()
   {
    $validateData = $this->validate([
        'account_type' => 'required',
        'name' => 'required'

    ],
    [
    'account_type.required' => 'Name is required',
    'name.required' => 'Password is required'
    ]
    );
    $char =  chart_of_account::find($this->ids);
    $char ->update([
        'Account_Name'=> $this->name,
        'Account_Cat'=> $this->account_type,
    ]);


   }
   

   public function store()
   {
        $validateData = $this->validate([
            'account_type' => 'required',
            'name' => 'required'

        ]);


            $char = new chart_of_account;
            $char ->Account_Name = $this->account_type;
            $char ->Account_Cat = $this->name;
            $char ->save();
            $this->emit('closemodal');

            $this-> resetfeald();
   }



    public function render()
    {
       
       $this-> hallChanged();
        $data = chart_of_account::all()  ;
        
        return view('livewire.homecomponent',['char'=>$data])->layout('layouts.base');
    }

    public function open()
    {
        $this->resetValidation();
        $this->account_type='Bank';
        $this->emit('openmodal');
    }
    public function hallChanged()
    {
      
      
      

        if($this->account_type =='Bank')
        {
            $this->emit('hallChanged2'); 
        }
        else
        {
            $this->emit('hallChanged1');  
        }
        
    }
}
