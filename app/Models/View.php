<?php

namespace App\Models;

use App\Traits\timeTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class View extends Model
{  
    use timeTrait;
    public function viewable()
    {
        return $this->morphTo();
    }

    public function scopeNewViews($query)
    {
        return $query->where('created_at', '>', $this->last3Months());
    }
    public function scopeMostViewedFiles($query){

            $popular_files=$query->NewViews()->where('viewable_type','App\Models\Files')

            ->select('viewable_id', DB::raw("count(viewable_id) as count"))
            ->groupby('viewable_id')
            ->orderby('count', 'desc')
            ->take(4)
            ->get();
           

            return $popular_files;
    }

}
