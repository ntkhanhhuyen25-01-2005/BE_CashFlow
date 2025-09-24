<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            NguoiDungSeeder::class,
            ViTaiKhoanSeeder::class,
            DanhMucGiaoDichSeeder::class,
            PhuongThucThanhToanSeeder::class,
            GiaoDichSeeder::class,
            NganSachSeeder::class,
            KhoanNoSeeder::class,
            GiaoDichDinhKySeeder::class,
            DinhKemSeeder::class,
            BaoCaoTuyChinhSeeder::class,
            ThongBaoSeeder::class,
        ]);
    }
}
