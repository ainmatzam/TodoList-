<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	  Schema::create('senarais', function (Blueprint $table) {
		  $table->id();
		$table->timestamps();	  
            $table->string('name')->nullable();
	    $table->string('description')->nullable();
	    $table->foreignId('user_id')->nullable();
	});




		

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('senarais');
    }
};