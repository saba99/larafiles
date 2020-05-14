<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ticket;

class Reply extends Model
{
    protected $fillable = ['text', 'ticket_id'];


    public function repliable()
    {

        return $this->morphTo();
    }

    public function getCreatedAtAttribute($value)
    {
    }

    public function ticket()
    {

        return $this->belongsTo(Ticket::class);
    }
}
