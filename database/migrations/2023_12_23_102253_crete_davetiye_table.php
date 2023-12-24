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
        Schema::create('davetiye', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kodu');
            $table->string('ureticikodu');
            $table->string('adi');
            $table->string('ureticiadi');
            $table->integer('fiyati');
            $table->integer('ureticifiyati');
            $table->integer('indirimlifiyati');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('davetiye');
    }
};
