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
        Schema::create('giao_diches', function (Blueprint $table) {
            $table->id();
            $table->integer('id_nguoi_dung');
            $table->integer('id_vi_tai_khoan');
            $table->integer('id_danh_muc');
            $table->integer('id_phuong_thuc_thanh_toan')->nullable();
            $table->integer('loai_giao_dich'); // 0: Chi, 1: Thu
            $table->decimal('so_tien', 15, 2);
            $table->text('ghi_chu')->nullable();
            $table->date('ngay_giao_dich');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('giao_diches');
    }
};
