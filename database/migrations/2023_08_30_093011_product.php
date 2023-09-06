<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //tao bang product
        Schema::create('product',function(Blueprint $table){
            $table->id();
            $table->string('name_pd');
            $table->integer('quantity_pd');
            $table->integer('sold_pd');
            $table->string('image_pd');
            $table->float('price_pd');
            $table->string('describe_pd');
            $table->char('created_at',10);
            $table->char('updated_at',10);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //xoa bang product
        Schema::drop('product');
    }
};
