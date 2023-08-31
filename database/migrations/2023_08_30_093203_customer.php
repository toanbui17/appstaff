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
        //tao  bang customer
        Schema::create('customer',function(Blueprint $table){
            $table->id();
            $table->string('name_kh');
            $table->string('email_kh');
            $table->string('position_kh');
            $table->string('place_of_birth_kh');
            $table->year('year_of_birth_kh');
            $table->char('phone_kh',10);
            $table->string('image_kh');
            $table->date('created_at');
            $table->date('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //xoa bang customer
        Schema::drop('customer');
    }
};
