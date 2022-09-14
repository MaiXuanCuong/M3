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
        /*
        name: varchar 255
        price: interger
        description: text
        */
        Schema::create('products', function (Blueprint $table) {
            $table->id();//id - increment - bigInt(20)
            $table->string('name',255);
            $table->integer('price');
            $table->text('description');
            $table->timestamps();//created_at, updated_at
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
    }
};
