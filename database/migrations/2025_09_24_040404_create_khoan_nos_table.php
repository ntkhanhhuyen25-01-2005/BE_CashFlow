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
        Schema::create('khoan_nos', function (Blueprint $table) {
            $table->id();
            $table->integer('id_nguoi_dung');
            $table->string('ten_khoan_no');
            $table->decimal('so_tien_no', 15, 2);
            $table->date('ngay_vay');
            $table->date('ngay_tra_du_kien')->nullable();
            $table->date('ngay_tra_thuc_te')->nullable();
            $table->text('ghi_chu')->nullable();
            $table->integer('trang_thai'); // 0: Dang no, 1: Da tra het, 2: Da qua han
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('khoan_nos');
    }
};
