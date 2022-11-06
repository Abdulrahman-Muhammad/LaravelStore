<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_size_color', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("product_size_id")->unsigned();
            $table->integer("product_color_id")->unsigned();

            $table->foreign("product_size_id")->references("id")->on('product_sizes');
            $table->foreign("product_color_id")->references("id")->on('product_colors');

            $table->string("quantity");
            $table->decimal("price_two", 10, 2)->nullable();
            $table->decimal("discount", 8, 2)->nullable();


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
        Schema::dropIfExists('product_size_color');
    }
};
