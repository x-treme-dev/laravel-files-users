<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{   
    private $surname;
    private $name;
    private $patronimic;
    private $email;
    private $pathToFile;
    // Загрузить файлы-аватары в storage/app/images
    public function index(){
        return view('test.form');
    }

    public function store(Request $request){
        $request->validate([
            'surname' => 'required|max:20',
            'name' => 'required|max:20',
            'patronymic'=> 'required|max:20',
            'email' => 'required',
            'avatar' => 'required|image|mimes:png,jpg,jpeg|max:2048', // Max file size: 10MB
        ]);
       
        // создать массив из входных данных и затем json
        $user = [
            'surname' => $request->input('surname'),
            'name' => $request->input('name'),
            'patronymic' => $request->input('patronymic'),
            'email' => $request->input('email'),
        ];
        $json = json_encode($user);
        // сохранить json в storage/app/users/
        Storage::disk('local')->put('users/'.time(). '_user.json', $json);
        
        // сохранить файл аватара 
        $file = $request->file('avatar');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('images', $fileName); // Store file in storage/app/images/ directory
      
        // редирект назад с выводом сообщения в шаблоне form.blade из сессионной переменной sussess
        return redirect()->back()->with('success', 'File uploaded successfully.');

    }
}
