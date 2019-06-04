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
    
  
    public function uploadAvatar(Request $request)
    {
        $user = \Auth::user();
        $id = $user->id;

               
        $image_path = $request->file('image_path');

        if ($image_path) {
            $user->image= $image_path->getClientOriginalName();

        }else {
            return redirect()->route('profile',['id'=>$id]);
        }


        $user->update();
        return redirect()->route('profile',['id'=>$id]);
     
    }
    
    
}
