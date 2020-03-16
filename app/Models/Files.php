<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    protected  $fillable = ['file_title', 'file_name', 'file_description', 'file_type', 'file_size'];
}
