<?php

namespace App\Models;
use Illuminate\Http\Request;
use Illuminate\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Component\HttpFoundation\File\UploadFile;


class Customer extends Model
{    

    private $uploadedFile; 
    private $name;
    private $dbfile = 'public/db.json';
    private $disk; 
    private $avatar;
    
    public function __construct(Request $request, $disk='local'){
        $this->name = $request->input('name');
        $this->email = $request->input('email');
        $this->avatar = $request->input('avatar');
        $this->disk = $disk;
    }

   
    


}
