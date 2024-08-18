<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class FormController extends Controller
{
    //
    public function index(){
        return view('test.form');
    }
}
