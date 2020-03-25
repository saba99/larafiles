<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Files;
use App\User; 

use App\Models\Category;
use Nicolaslopezj\Searchable\SearchableTrait;
class Package extends Model
{

    protected $fillable=['package_title','package_price', 'package_description'];



    public function files(){


        return $this->belongsToMany(Files::class,'file_package','package_id','files_id');
    } 


    public function users(){


        return $this->belongsToMany(User::class,'user_packages')->withPivot(['amount']);
    }  


    public function categories(){


        return $this->morphToMany(Category::class,'categorizable');
    }
    use SearchableTrait;
    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [

            'packages.package_description' => 2,
            'packages.package_title' => 2,


        ],

    ];
    
}
