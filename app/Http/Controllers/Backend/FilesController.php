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
        if($file->save()){

            return redirect()->route('admin.files.list')->with('success', 'فایل جدید با موفقیت ذخیره شد ');
        }


    }

    public function edit($file_id){

        if ($file_id && ctype_digit($file_id)) {

            $FileItem = Files::findOrFail($file_id);


            if ($FileItem && $FileItem instanceof Files) {

                return view('admin.files.edit', compact(['FileItem']))->with(['panel_title' => 'ویرایش فایل']);
            }
        }

   
    }

    public function update(Request $request, $file_id)
    {
           
        ($file_id = intval($file_id));

        ($FileItem = Files::findOrFail($file_id));
        
        
        $cover = $request->file('fileItem');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put($cover->getFilename() . '.' . $extension,  File::get($cover));

        //$file = new Files();
        $FileItem->file_title = $request->file_title;
        $FileItem->file_description = $request->file_description;
        $FileItem->file_type = $cover->getClientMimeType();
        $FileItem->file_size = $cover->getClientSize();
        ($FileItem->file_name = $cover->getClientOriginalName());
        //($file->filename = $cover->getFilename() . '.' . $extension);
        if ($FileItem->save()) {

            return redirect()->route('admin.files.list')->with('success', 'فایل  با موفقیت  به روز رسانی شد ');
        }

     
       
}

    public function delete($file_id)
    {


        $file_id = intval($file_id);

        $FileItem = Files::findOrFail($file_id);

        if ($FileItem) {

            $FileItem->delete();

            return redirect()->route('admin.files.list')->with('success', 'فایل مورد نظر با موفقیت حذف شد ');
        }
    }
}
