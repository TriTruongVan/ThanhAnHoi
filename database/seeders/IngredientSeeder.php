<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->command->info("Start seeding a Ingredient");
        $ingredient = [           
            [
                'name' => 'Bánh tráng',
                'unit' => 'Gói',
            ],
            [
                'name' => 'Bánh phồng tôm',
                'unit' => 'Gói',
            ],
            [
                'name' => 'Thịt bò',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Thịt heo',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Gân bò',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Chân gà',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Hoa chuối',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Nem nướng',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Kim chi',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Bánh mì',
                'unit' => 'Ổ',
            ],
            [
                'name' => 'Xôi nếp',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Lá chanh',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Xôi đậu xanh',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Hạt sen',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Bánh bao',
                'unit' => 'Cái',
            ],
            [
                'name' => 'Hành lá',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Cà rốt',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Nấm tuyết',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Bắp Mỹ',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Thịt cua',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Trứng cút',
                'unit' => 'Quả',
            ],
            [
                'name' => 'Bắp non',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Nấm hương',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Tóc tiên',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Măng tây',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Nấm đông cô',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Hoành thánh',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Gừng',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Sả',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Tắc',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Bê non',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Nấm kim châm',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Mướp hương',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Cải xanh',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Khoai tây',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Bông cải xanh',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Bơ',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Tỏi',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Thịt dê',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Củ nén',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Bún tươi',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Cá bớp',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Nghêu',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Rau lẩu',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Cá cu',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Lạp xưởng',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Trứng gà',
                'unit' => 'Quả',
            ],
            [
                'name' => 'Thịt xá xíu',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Đậu xanh',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Cơm',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Cá diêu hồng',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Chíp chíp',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Bánh hỏi',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Mỡ hành',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Bánh chưng',
                'unit' => 'Cái',
            ],
            [
                'name' => 'Cá mú',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Nấm mèo',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Bún tàu',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Cá chim',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Giò heo',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Sườn heo',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Cốt lết heo',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Chuối xanh',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Đậu phụ',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Táo đỏ',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Củ sọ',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Lá giang',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Bánh bò bía',
                'unit' => 'Gói',
            ],
            [
                'name' => 'Bột chiên',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Nước cốt dừa',
                'unit' => 'Lít',
            ],
            [
                'name' => 'Tiêu xanh',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Ngũ vị hương',
                'unit' => 'Gói',
            ],
            [
                'name' => 'Bột rau câu',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Sữa',
                'unit' => 'Lít',
            ],
            [
                'name' => 'Đường',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Cà phê',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Caramel',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Sữa chua',
                'unit' => 'Hộp',
            ],
            [
                'name' => 'Trái cây theo mùa',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Nước mắm',
                'unit' => 'Lít',
            ],
            [
                'name' => 'Nước tương',
                'unit' => 'Lít',
            ],
            [
                'name' => 'Dầu ăn',
                'unit' => 'Lít',
            ],
            [
                'name' => 'Muối',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Giấm',
                'unit' => 'Lít',
            ],
            [
                'name' => 'Sa tế',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Mắm nêm',
                'unit' => 'Lít',
            ],
            [
                'name' => 'Mayonnaise',
                'unit' => 'Thùng',
            ],
            [
                'name' => 'Bột chiên xù',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Ram',
                'unit' => 'Hộp',
            ],
            [
                'name' => 'Chả',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Lươn',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Bao tử',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Củ hủ dừa',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Rau càng cua',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Tôm',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Mực',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Hành tây',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Rau răm',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Đậu phộng',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Rau thơm',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Ớt hiểm',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Cà chua',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Dưa leo',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Thịt vịt',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Gà',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Bê non',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Nấm kim châm',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Mướp hương',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Bột chiên',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Hành phi',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Xà lách',
                'unit' => 'Kg',
            ],
            [
                'name' => 'Cá hộp',
                'unit' => 'Hộp',
            ],
            [
                'name' => 'Ớt chuông',
                'unit' => 'Kg',
            ],
        ];
        foreach ($ingredient as $item) {
            Ingredient::updateOrCreate(
                ['name' => $item['name']],
                ['unit' => $item['unit']]
            );
        }
        $this->command->info("Finish seeding a Ingredient");
    }
}
