<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 


class RegisterController extends Controller
{   
  
    //
    public function store(Request $request)
{
    $validated = $request->validate([
        'surname' => 'required|max:30',
        'name' => 'required|max:30',
        'patronymic' => 'required|max:30',
        'email' => 'required',
         'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg'
    ]);
  
    $path = $request->file('avatar')->store('uploads');
 
   
       return view('test.register', ['path' => $path]);
 
}
    


}
