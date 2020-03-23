<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


use App\Models\Package;

use App\Traits\Categorizable;
use Carbon\Carbon;

class Files extends Model
{   
    
     

    protected  $fillable = ['file_title', 'file_name', 'file_description', 'file_type', 'file_size'];

      


    public function packages(){


        return $this->belongsToMany(Package::class, 'file_package','files_id','package_id');
    }

    public function categories()
    {


        return $this->morphToMany(Category::class, 'categorizable');
    }

    protected  $uploads = '/storage/';


    public function  getFile_NameAttributes($photo)
    {

        return $this->uploads . $photo;
    }

    /*public function getFileTypeAttributes(){


        $types=[

            'application/pdf'=>'PDF',
            'image/png'=>'PNG',
              'image/jpeg'=>'JPEG',

        ];
        return $types[$this->attributes['file_type']];
         //return $this->attributes['file_type'] = $types($value);   

    }*/

    public function scopePopular($query){

      return  $query->orderBy('file_download_count','desc');

    }

    public function updateDownloadCounts()
    { 

        $isDownloadExistsForToday=FileDownload::where('file_id',$this->file_id)->whereDate('created_at',Carbon::today());

        if($isDownloadExistsForToday  && $isDownloadExistsForToday instanceof FileDownload){

            $isDownloadExistsForToday->increment('download_count');

           
        }else{  

            $file=new Files;
              FileDownload::create([

                'file_id' => $this->file_id,
                //'file_id'=>$file->id,
                'download_count' => 1,
                'created_at' => Carbon::now()


            ]);   
           
        }

    }
}
