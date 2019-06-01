<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;
use App\Image;
class userController extends Controller
{
    
     public function __construct()
    {
        $this->middleware('auth');
    }
    
    function profile($idd){
        
        $avatar = Image::find($idd);
     
        return view('user.userProfile',[
           'image' =>  $avatar //paso el objeto image que saque de la base de datos
        ]);
        
    }
    
    public function getImage($fileName) {
        $file = Storage::disk('users')->get($fileName);
        return new Response($file,200);
    }
    
  
    
    
    
}
