<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;
use App\Image;

class imageController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth');
    }

    
    function upload(Request $request) {
        $image_path = $request->file('image_path');
        $description= $request->input('description');
        
        $user = \Auth::user();
        $image = new Image();
        $image->user_id = $user->id;
        $image->description = $description;
    }

    function getAll(){



        
    }
    
   
}
