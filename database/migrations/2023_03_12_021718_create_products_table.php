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
        Schema::create('brands', function (Blueprint $table) {
            $table->increments('id'); //category's id
            $table->string('name');//category's name
            $table->longText('description');
            $table->string('image_path');
            $table->timestamps();
        }); 

        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('color');
            $table->string('image_path');
            $table->double('price');
            $table->longText('description');
            $table->integer('release_year');

            $table->timestamps();


            $table->unsignedInteger('brand_id');
            $table->foreign('brand_id')
                    ->references('id')
                    ->on('brands')
                    ->onDelete('cascade');
                    //->onDelete('set null');
           

        });
      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('products');
        Schema::dropIfExists('brands');
       
       
    }
};
