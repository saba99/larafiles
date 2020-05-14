<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->BigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            // $table->BigInteger('category_id')->unsigned();
            // $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->text('text');
            $table->string('ticket_id')->unique();
            $table->string('title');
            $table->tinyInteger('priority')->comment('0:low ,1:mid ,2:high');
            $table->tinyInteger('status')->comment('0:created ,1:replied ,2:closed');
            $table->string('File_Path')->nullable();
            $table->tinyInteger('department')->comment('0:support,1:technical,2:financial');
            
            // $table->text('message');
           
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
        Schema::dropIfExists('tickets');
    }
}
