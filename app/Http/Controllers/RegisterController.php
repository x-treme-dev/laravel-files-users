<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Http\Request;

class RegisterController extends Controller
{   
    public $path;
    //
    public function store(Request $request)
{
    $validated = $request->validate([
        'surname' => 'required|max:30',
        'name' => 'required|max:30',
        'patronymic' => 'required|max:30',
        'email' => 'required',
    ]);
 
       

    if($request->hasFile('avatar')){
        $this->path=$request->file('avatar')->store('images');
     }
        

        


   
  
 
    return view('test.register') -> with('path', $this->path);
}
    


}
