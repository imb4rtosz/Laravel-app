
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoffeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coffee', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('type');
            $table->string('size');
            $table->string('name');
            // $table->json('additives');
            
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coffee');
    }
}

