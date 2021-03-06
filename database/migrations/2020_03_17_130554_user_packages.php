<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserPackages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_packages', function (Blueprint $table) { 
            
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('package_id');

            $table->primary(['user_id', 'package_id']);
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
         
            $table->foreign('package_id')->references('id')->on('packages')->onDelete('cascade');
            $table->integer('amount');

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_packages');
    }
}
