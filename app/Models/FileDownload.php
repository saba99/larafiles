<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FileDownload extends Model
{    
   protected $fillable=['file_id', 'download_count'];

   protected $guarded=['file_id'];


}
