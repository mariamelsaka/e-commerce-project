<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class TestController extends Controller
{
    public function getUploadView(){
        return view('tests.upload-file');
    }

    public function doUpload(Request $request){
        $rules=[
            'file'=>'required|image|max:2048|mimes:jpg,png,jpeg'
        ];

        $validator=Validator::make($request->all(),$rules);
        if($validator->fails()){
            return redirect('/tests/upload-file')->withErrors($validator->errors());
        }

        $file=$request->file('file');
      $ext=$file->getClientOriginalExtension();//getClientOriginalExtension btgeeb extentison of pic
       $newName=sha1(time()) . "." .$ext;//sha1 tashfeer el time
        Storage::disk('public')->put($newName,File::get($file));
        //public dah mawgood f confg file f filesystem.php 3and disks
        //dah ana bghayar el path ele h3ml uplaod lel pic fe folder mo3ayan

        //put($newName,File::get($file)); de zay move ht5od el old name  ele
        // f $file w t7to f $newName w upload f public

    }
}
