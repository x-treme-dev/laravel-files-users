<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class FormController extends Controller
{
    // Загрузить файлы-аватары в storage/app/images
    public function index(){
        return view('test.form');
    }

    public function store(Request $request){
        $request->validate([
            'avatar' => 'required|image|mimes:png,jpg,jpeg|max:2048', // Max file size: 10MB
        ]);
    
        $file = $request->file('avatar');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('images', $fileName); // Store file in storage/app/images/ directory
        // редирект назад с выводом сообщения в шаблоне form.blade из сессионной переменной sussess
        return redirect()->back()->with('success', 'File uploaded successfully.');

    }
}
