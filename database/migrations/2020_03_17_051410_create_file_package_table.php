<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilePackageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_package', function (Blueprint $table) {

           $table->unsignedBigInteger('files_id');
           $table->unsignedBigInteger('package_id');
            

            $table->primary(['files_id', 'package_id']);

            $table->foreign('files_id')->references('id')->on('files')->onDelete('cascade');
            
            $table->foreign('package_id')->references('id')->on('packages')->onDelete('cascade');

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
        Schema::dropIfExists('file_package');
    }
}
