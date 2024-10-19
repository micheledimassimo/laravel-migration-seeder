<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpParser\Node\NullableType;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 64)->nullable();
            $table->string('departing_from', 64)->nullable();
            $table->string('arriving_at', 64)->nullable();
            $table->time('departing_time')->nullable();
            $table->time('arriving_time')->nullable();
            $table->bigInteger('train_numb')->unique();
            $table->integer('coaches_numb')->unsigned();
            $table->boolean('on_time')->nullable();
            $table->boolean('cancelled')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
