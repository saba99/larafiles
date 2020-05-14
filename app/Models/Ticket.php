<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\User;

use Illuminate\Support\Facades\Storage;

use App\Reply;

class Ticket extends Model
{
    protected $fillable = [
        'user_id', 'category_id', 'ticket_id', 'title', 'priority', 'message', 'status','text'
    ];

    protected $attribute=[
        'status'=>0
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getPriorityAttribute($value)
    {

        return ['پایین', 'متوسط', 'بالا'][$value];
    }

    public function getStatusNameAttribute()
    {

        return ['باز', 'پاسخ داده شده', 'بسته'][$this->Status];
    }

    // public function getCreatedAtAttribute($value)
    // {

    //     $time = new \Verta($value);

    //     return $time->formatJalaliDatetime();
    // }

    public function hasFile()
     {

         return !is_null($this->File_Path);
     }

     public function file()
    {

         return $this->hasFile() ? Storage::url($this->File_Path) : null;
     }

     public function replies()
    {

         return $this->hasMany(Reply::class);
     }

     public function isCreated()
     {

         return $this->status === 0;
    }

     public function replied()
     {

        $this->status = 1;

         $this->save();
     }

     public function close()
     {

        $this->status = 2;

         $this->save();
     }

     public function isClosed()
     {

         return $this->status === 2;
     }

}
