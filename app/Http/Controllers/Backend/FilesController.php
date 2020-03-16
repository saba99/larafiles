<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;
use App\Models\Files;
//use Symfony\Component\HttpFoundation\File\File as FileFile;


use Illuminate\Support\Facades\Storage;


use Illuminate\Support\Str;

class FilesController extends Controller
{
    public function index(){
         

        $files=Files::all();
        return view('admin.files.list',compact(['files']))->with('panel_title','لیست فایل ها');
    }

    public function create(){

        return view('admin.files.create')->with('panel_title','ایجاد فایل جدید');
    }

    public function store(Request $request){


        //dd($request->all());
        $this->validate($request,[
              
            'file_title'=>'required',
            'file_description'=>'required',
            'fileItem'=>'required'
        ],[


            'file_title.required'=>'وارد کردن عنوان فایل الزامی می باشد ',
            'file_description.required'=>'وارد کردن توضیحات فایل ضروری است',
            'fileItem.required'=>'انتخاب فایل ضروری است ',
        ]);
        /*$newFileData = [


            'file_title' => $request->input('file_title'),
            'file_description' => $request->input('file_description'),

            'file_type' => $request->file('fileItem')->getMimeType(),

            'file_size' => $request->file('fileItem')->getClientSize(),
              
        ];
        //dd($newFileData);
        $new_file_name=str::random(45).'.'.$request->file('fileItem')->getClientOriginalExtension();
        //$result=$request->file('fileItem')->storeAs('images',$new_file_name);
                
         $result=$request->file('fileItem')->move(public_path('images'),$new_file_name);

         if($result instanceof \Symfony\Component\HttpFoundation\File\File ){


           ($x=($newFileData['file_name']=$new_file_name));

                    ($y=isset($x) ? $x : ' ');
         //dd($newFileData);

                (Files::create([$newFileData ,$x]));
       
      
         }*/
        $cover = $request->file('fileItem');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put($cover->getFilename() . '.' . $extension,  File::get($cover));

        $file = new Files();
        $file->file_title = $request->file_title;
        $file->file_description = $request->file_description;
        $file->file_type = $cover->getClientMimeType();
        $file->file_size= $cover->getClientSize();
        ($file->file_name = $cover->getClientOriginalName());
        //($file->filename = $cover->getFilename() . '.' . $extension);
        dd($file->save());

        
        
        

    }

    public function edit($file_id){

        if ($file_id && ctype_digit($file_id)) {

            $userItem = Files::findOrFail($file_id);


            if ($userItem && $userItem instanceof Files) {

                return view('admin.files.edit', compact(['fileItem']))->with(['panel_title' => 'ویرایش فایل']);
            }
        }

   
    }
}
