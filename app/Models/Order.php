<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Package;
use App\Models\Files;
use App\Payment;
use App\User;
USE niklasravnsborg\LaravelPdf\Pdf;
class Order extends Model
{
   public function packages(){

    return $this->belongsToMany(Package::class)->withPivot('qty');
   }
    public function files()
    {

        return $this->belongsToMany(Files::class);
    } 

    public function user(){

        return $this->belongsTo(User::class);
    } 

    public function payment(){

        return $this->hasOne(Payment::class);
    }  
public function generateInvoice(){


        $pdf = \PDF::loadView('frontend.invoices.invoice', ['order'=>$this]);
        return $pdf->save(storage_path('app/public/invoices/').$this->id.'pdf');

}

    
}
