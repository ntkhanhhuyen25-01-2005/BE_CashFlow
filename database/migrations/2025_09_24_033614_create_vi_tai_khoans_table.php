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
        Schema::create('vi_tai_khoans', function (Blueprint $table) {
            $table->id();
            $table->string('ten_vi');
            $table->string('so_tai_khoan');
            $table->decimal('so_du', 15, 2)->default(0);
            $table->integer('thu_tu_sap_xep')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vi_tai_khoans');
    }
};
