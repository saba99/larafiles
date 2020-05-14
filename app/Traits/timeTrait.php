<?php  

namespace App\Traits;

use Carbon\Carbon;

trait timeTrait{

public function last3Months(){

$now=Carbon::now();

$last3Months=$now->subMonths(3);


return $last3Months;


}

}
