<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->integer('quantity');
            $table->integer('origin_price');
            $table->integer('sale_price');
            $table->integer('discount_percent')->default(0);
            $table->string('thumbnail');
            $table->text('description')->nullable();
            $table->integer('user_id')->referenced('id')->on('users');
            $table->integer('category_id')->referenced('id')->on('categories');
            $table->integer('brand_id')->referenced('id')->on('brands');
            $table->integer('status');
            $table->timestamps();
            $table->softDeletes();
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
}
