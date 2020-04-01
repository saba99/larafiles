<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Book;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;




class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    

        $books=Book::all();
        return view('admin.books.index',compact(['books']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {     

        //dd($request->all());
        $this->validate(request(),[
            
          'title'=>'required|max:250',
          //'type'=>'required',
          'description'=>'required',
          'image'=>'required|mimes:jpeg,png,jpg',
          'path'=>'required|mimes:txt,doc,pdf',
          'price'=>'required|numeric'

        ],[
                'title.required'=>'لطفا عنوان مطلب مورد نظر خود را انتخاب نمایید',
                'title.max'=>'تعداد کاراکتر های موردنظر باید حداکثر   250کاراکتر باشد ',
               'description.required'=>'لطفا توضیحات مطلب مورد نظر خود را وارد نمایید',
               //'type.required'=>'وارد کردن نوع ضروری است ',
               'image.required'=>'قرار دادن تصویر ضروری است',
               'images.mimes'=>'نوع تصویر باید jpg,jpeg,png باشد ',
               'path.required'=>'مسیر تصویر ضروری است ',
               'path.mimes'=>'نوع مسیر فایل باید txt,pdf,doc باشد ',
               'price.required'=>'وارد کردن قیمت ضروری است ',
               'price.numeric'=>'قیمت باید عددی باشد '


          ]);

        

       ($file=$request->file('image'));

        if($request->hasFile('image')){


            $fileType = $file->getClientMimeType();
           
            ($imageUrl=$this->uploadImage($file));

        }
        Book::create(array_merge($request->all(),['image'=>$imageUrl,'type'=>$fileType]));

        return redirect('administrator/books/create');

    }  
    public function uploadImag(Request $request){
          if ($files = $request->file('image')) {
    // Define upload path
    $destinationPath = public_path('/images/'); // upload path
    // Upload Original Image           
    $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
    $files->move($destinationPath, $profileImage);

    $insert['image'] = "$profileImage";
    // Save In Database
    $imagemodel = new Book();
    $imagemodel->image = "$profileImage";
    $imagemodel->save();
}
return back()->with('success', 'Image Upload successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bookItem=Book::findOrFail($id);

        return view('admin.books.edit',compact(['bookItem']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book=Book::findOrFail($id);
     //$book->update($request->all());

        $file = $request->file('image');
        if ($request->hasFile('image')) {
            ($imageUrl = $this->uploadImage($file));
        } else {
            $imageUrl = $request->image;
        }
        $file1 = $request->file('path');
        if ($request->hasFile('path')) {
           ($sourceUrl = $this->uploadSource($file1));
        } else {
            $sourceUrl = $request->path;
        }
        $book->update(array_merge($request->all(), ['image' => $imageUrl], ['path' => $sourceUrl]));
       

     return redirect('/administrator/books');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $books=Book::findOrFail($id);

        $books->delete();

        return back();
    }

    private function uploadImage($file)
    {
        $imagePath = "\upload\images";
        $filename = time() . '.' . $file->getClientOriginalName();
        $file = $file->move(public_path($imagePath), $filename);
        return $filename;
    }

    private function uploadSource($file1)
    {

        $sourcePath = "\upload\sources";
        $filename1 =  time() . '.' . $file1->getClientOriginalName();
        $file1 = $file1->move(public_path($sourcePath), $filename1);
        return $filename1;
    }

 
}
