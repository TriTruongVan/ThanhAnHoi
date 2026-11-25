<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use App\Models\Supplier;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        $this->command->info("Start seeding a Supplier");

        $suppliers = [
            [
                'name' => 'Đại lý thịt bò A',
                'phone' => '0900000001',
                'address' => 'Đà Nẵng',
            ],
            [
                'name' => 'Đại lý rau củ B',
                'phone' => '0900000002',
                'address' => 'Đà Nẵng',
            ],
            [
                'name' => 'Đại lý hải sản C',
                'phone' => '0900000003',
                'address' => 'Đà Nẵng',
            ],
        ];

        foreach ($suppliers as $supplier) {
            Supplier::updateOrCreate(
                ['name' => $supplier['name']],
                $supplier
            );
        }

        // Lấy nhà cung cấp
        $supplierBeef = Supplier::where('name', 'Đại lý thịt bò A')->first();

        $supplierVegetable = Supplier::where('name', 'Đại lý rau củ B')->first();

        $supplierSeafood = Supplier::where('name', 'Đại lý hải sản C')->first();

        // Gán nguyên liệu cho nhà cung cấp thịt bò
        $supplierBeef->ingredients()->sync(
            Ingredient::whereIn('name', [
                'Thịt bò',
                'Gân bò',
                'Bê non',
                'Thịt dê',
                'Thịt heo',
                'Giò heo',
                'Sườn heo',
                'Cốt lết heo',
            ])->pluck('id')
        );

        // Gán nguyên liệu cho nhà cung cấp rau củ
        $supplierVegetable->ingredients()->sync(
            Ingredient::whereIn('name', [
                'Cà rốt',
                'Cải xanh',
                'Bông cải xanh',
                'Khoai tây',
                'Mướp hương',
                'Hành lá',
                'Hành tây',
                'Cà chua',
                'Dưa leo',
                'Rau thơm',
                'Rau răm',
                'Xà lách',
                'Hoa chuối',
            ])->pluck('id')
        );

        // Gán nguyên liệu cho nhà cung cấp hải sản
        $supplierSeafood->ingredients()->sync(
            Ingredient::whereIn('name', [
                'Tôm',
                'Mực',
                'Cá bớp',
                'Cá mú',
                'Cá chim',
                'Cá diêu hồng',
                'Cá cu',
                'Nghêu',
                'Chíp chíp',
                'Thịt cua',
            ])->pluck('id')
        );

        $this->command->info("Finish seeding a Supplier");
    }
}
