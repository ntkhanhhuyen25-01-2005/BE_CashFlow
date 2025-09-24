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
        Schema::create('bao_cao_tuy_chinhs', function (Blueprint $table) {
            $table->id();
            $table->integer('id_nguoi_dung');
            $table->string('ten_bao_cao');
            $table->json('bo_loc')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bao_cao_tuy_chinhs');
    }
};
