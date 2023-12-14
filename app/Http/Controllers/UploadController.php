<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UploadController extends Controller
{
    public function imageUpload(Request $request){
        $dest = 'images/';
        // if (!File::exists(public_path($dest))) {
        //     File::makeDirectory(public_path($dest),0755,true);
        // }
        $file = $request->file('_userAvatarFile');
        $newName = 'UIMG'.date('YmdHis').uniqid().'.jpg';

        // $move = Image::make($file->path())->fit(250,250)->save($dest.$newName);
        $move = $file->move($dest,$newName);

        if (!$move) {
            return response()->json(['status'=>0,'msg'=>'']);
        }else {
            return response()->json(['status'=>1,'msg'=>$newName]);
        }
    }
}
