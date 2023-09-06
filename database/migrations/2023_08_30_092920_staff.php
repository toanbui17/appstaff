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
        //tao bang staff
        Schema::create('staff',function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('position');
            $table->string('place_of_birth');
            $table->year('year_of_birth');
            $table->char('phone',10);
            $table->string('image');
            $table->char('password',50);
            $table->char('created_at',10);
            $table->char('updated_at',10);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //xoa bang staff
        Schema::drop('staff');
    }
};
