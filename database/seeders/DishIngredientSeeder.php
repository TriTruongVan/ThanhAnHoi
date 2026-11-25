<?php

namespace Database\Seeders;

use App\Models\Dish;
use App\Models\DishIngredient;
use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DishIngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->command->info("Start seeding a DishIngredient");
        $dishIngredient = [
            // 1. Lươn đùm - bánh tráng chiên
            [
                'dish_id' => 1,
                'ingredients' => [
                    'Lươn' => 1.5,
                    'Bánh tráng' => 2,
                    'Hành lá' => 0.1,
                    'Gừng' => 0.1,
                    'Tỏi' => 0.05,
                    'Dầu ăn' => 0.5,
                    'Muối' => 0.02,
                ],
            ],

            // 2. Bao tử phá lấu - ram chả - BPT
            [
                'dish_id' => 2,
                'ingredients' => [
                    'Bao tử' => 1.5,
                    'Ngũ vị hương' => 0.05,
                    'Nước cốt dừa' => 0.5,
                    'Bột chiên' => 0.2,
                    'Dầu ăn' => 0.5,
                    'Bánh phồng tôm' => 2,
                    'Ram' => 1,
                    'Chả' => 0.5,
                ],
            ],

            // 3. Gỏi hải sản tươi - BPT
            [
                'dish_id' => 3,
                'ingredients' => [
                    'Tôm' => 0.8,
                    'Mực' => 0.8,
                    'Hành tây' => 0.3,
                    'Rau răm' => 0.1,
                    'Đậu phộng' => 0.2,
                    'Bánh phồng tôm' => 2,
                    'Nước mắm' => 0.1,
                    'Đường' => 0.1,
                    'Tắc' => 0.1,
                ],
            ],

            // 4. Gỏi bò tái chanh
            [
                'dish_id' => 4,
                'ingredients' => [
                    'Thịt bò' => 1,
                    'Hành tây' => 0.3,
                    'Rau thơm' => 0.1,
                    'Ớt hiểm' => 0.05,
                    'Đậu phộng' => 0.2,
                    'Nước mắm' => 0.1,
                    'Tắc' => 0.15,
                    'Đường' => 0.1,
                ],
            ],

            // 5. Gỏi củ hủ dừa tôm thịt - BPT
            [
                'dish_id' => 5,
                'ingredients' => [
                    'Củ hủ dừa' => 1,
                    'Tôm' => 0.7,
                    'Thịt heo' => 0.5,
                    'Bánh phồng tôm' => 2,
                    'Đậu phộng' => 0.15,
                    'Nước mắm' => 0.1,
                    'Đường' => 0.1,
                    'Tắc' => 0.1,
                    'Hành phi' => 0.1,
                ],
            ],

            // 6. Gỏi bò bóp thấu - ram chả - BPT
            [
                'dish_id' => 6,
                'ingredients' => [
                    'Thịt bò' => 1,
                    'Ram' => 1,
                    'Chả' => 0.5,
                    'Bánh phồng tôm' => 2,
                    'Hành tây' => 0.2,
                    'Rau thơm' => 0.1,
                    'Nước mắm' => 0.1,
                    'Đường' => 0.1,
                    'Tắc' => 0.1,
                ],
            ],

            // 7. Gỏi Thái - ram chả
            [
                'dish_id' => 7,
                'ingredients' => [
                    'Tôm' => 0.5,
                    'Thịt heo' => 0.5,
                    'Chả' => 0.3,
                    'Ram' => 1,
                    'Hành tây' => 0.2,
                    'Ớt hiểm' => 0.05,
                    'Nước mắm' => 0.1,
                    'Đường' => 0.1,
                    'Tắc' => 0.1,
                ],
            ],

            // 8. Xà lách trộn bò
            [
                'dish_id' => 8,
                'ingredients' => [
                    'Thịt bò' => 0.8,
                    'Xà lách' => 0.5,
                    'Cà chua' => 0.3,
                    'Dưa leo' => 0.3,
                    'Mayonnaise' => 0.2,
                    'Giấm' => 0.1,
                    'Dầu ăn' => 0.05,
                    'Đường' => 0.05,
                ],
            ],

            // 9. Xà lách trộn cá hộp
            [
                'dish_id' => 9,
                'ingredients' => [
                    'Xà lách' => 0.5,
                    'Cà chua' => 0.3,
                    'Trứng cút' => 15,
                    'Cá hộp' => 2,
                    'Mayonnaise' => 0.2,
                    'Giấm' => 0.05,
                ],
            ],

            // 10. Gỏi rau càng cua - ram chả - BPT
            [
                'dish_id' => 10,
                'ingredients' => [
                    'Rau càng cua' => 0.5,
                    'Tôm' => 0.5,
                    'Thịt heo' => 0.5,
                    'Ram' => 1,
                    'Chả' => 0.3,
                    'Đậu phộng' => 0.15,
                    'Bánh phồng tôm' => 2,
                    'Nước mắm' => 0.1,
                    'Đường' => 0.1,
                ],
            ],

            // 11. Gỏi gân bò trộn - BPT
            [
                'dish_id' => 11,
                'ingredients' => [
                    'Gân bò' => 1,
                    'Hành tây' => 0.2,
                    'Rau thơm' => 0.1,
                    'Bánh phồng tôm' => 2,
                    'Nước mắm' => 0.1,
                    'Đường' => 0.1,
                    'Tắc' => 0.1,
                ],
            ],

            // 12. Chân gà rút xương
            [
                'dish_id' => 12,
                'ingredients' => [
                    'Chân gà' => 2,
                    'Sả' => 0.2,
                    'Tắc' => 0.3,
                    'Gừng' => 0.1,
                    'Tỏi' => 0.1,
                    'Ớt hiểm' => 0.05,
                    'Đường' => 0.1,
                    'Nước mắm' => 0.1,
                ],
            ],

            // 13. Gỏi hoa chuối - ram chả
            [
                'dish_id' => 13,
                'ingredients' => [
                    'Hoa chuối' => 0.8,
                    'Tôm' => 0.5,
                    'Thịt heo' => 0.5,
                    'Ram' => 1,
                    'Chả' => 0.3,
                    'Đậu phộng' => 0.15,
                    'Nước mắm' => 0.1,
                    'Đường' => 0.1,
                    'Tắc' => 0.1,
                ],
            ],

            // 14. Kim chi thịt nướng - ram chả, nem
            [
                'dish_id' => 14,
                'ingredients' => [
                    'Thịt heo' => 1.2,
                    'Kim chi' => 0.5,
                    'Nem nướng' => 0.5,
                    'Ram' => 1,
                    'Chả' => 0.3,
                    'Bánh tráng' => 2,
                    'Tỏi' => 0.05,
                    'Dầu ăn' => 0.1,
                ],
            ],

            // 15. Súp tôm chả
            [
                'dish_id' => 15,
                'ingredients' => [
                    'Tôm' => 0.5,
                    'Cà rốt' => 0.3,
                    'Nấm tuyết' => 0.15,
                    'Bắp Mỹ' => 0.3,
                    'Trứng gà' => 3,
                    'Bột chiên' => 0.15,
                    'Hành lá' => 0.05,
                    'Muối' => 0.02,
                ],
            ],

            // 16. Súp thập cẩm
            [
                'dish_id' => 16,
                'ingredients' => [
                    'Tôm' => 0.3,
                    'Thịt cua' => 0.3,
                    'Cà rốt' => 0.3,
                    'Bắp Mỹ' => 0.3,
                    'Nấm hương' => 0.1,
                    'Trứng gà' => 3,
                    'Bột chiên' => 0.15,
                ],
            ],

            // 17. Súp tôm cua
            [
                'dish_id' => 17,
                'ingredients' => [
                    'Tôm' => 0.5,
                    'Thịt cua' => 0.5,
                    'Trứng cút' => 15,
                    'Cà rốt' => 0.2,
                    'Trứng gà' => 2,
                    'Bột chiên' => 0.15,
                ],
            ],

            // 18. Súp tôm bắp non
            [
                'dish_id' => 18,
                'ingredients' => [
                    'Tôm' => 0.6,
                    'Bắp non' => 0.5,
                    'Nấm hương' => 0.15,
                    'Trứng gà' => 2,
                    'Bột chiên' => 0.15,
                    'Hành lá' => 0.05,
                ],
            ],

            // 19. Súp tóc tiên
            [
                'dish_id' => 19,
                'ingredients' => [
                    'Tóc tiên' => 0.05,
                    'Nấm hương' => 0.1,
                    'Nấm tuyết' => 0.1,
                    'Tôm' => 0.3,
                    'Trứng gà' => 3,
                    'Bột chiên' => 0.15,
                ],
            ],

            // 20. Súp gà măng tây
            [
                'dish_id' => 20,
                'ingredients' => [
                    'Măng tây' => 0.3,
                    'Nấm đông cô' => 0.15,
                    'Trứng gà' => 2,
                    'Bột chiên' => 0.15,
                ],
            ],

            // 21. Súp hoành thánh
            [
                'dish_id' => 21,
                'ingredients' => [
                    'Hoành thánh' => 0.8,
                    'Thịt heo' => 0.3,
                    'Tôm' => 0.3,
                    'Nấm hương' => 0.1,
                    'Hành lá' => 0.05,
                ],
            ],

            // 22. Súp cua gà
            [
                'dish_id' => 22,
                'ingredients' => [
                    'Thịt cua' => 0.4,
                    'Trứng cút' => 15,
                    'Trứng gà' => 2,
                    'Cà rốt' => 0.2,
                    'Bột chiên' => 0.15,
                ],
            ],

            // 23. Gà hấp xôi chiên
            [
                'dish_id' => 23,
                'ingredients' => [
                    'Xôi nếp' => 1.5,
                    'Lá chanh' => 0.05,
                    'Gừng' => 0.1,
                    'Muối' => 0.03,
                    'Dầu ăn' => 0.3,
                ],
            ],

            // 24. Gà bó xôi
            [
                'dish_id' => 24,
                'ingredients' => [
                    'Gà' => 1,
                    'Xôi nếp' => 2,
                    'Đậu xanh' => 0.3,
                    'Dầu ăn' => 0.5,
                    'Muối' => 0.03,
                ],
            ],

            // 25. Gà chiên mắm, xôi phồng
            [
                'dish_id' => 25,
                'ingredients' => [
                    'Gà' => 1,
                    'Xôi nếp' => 1.5,
                    'Nước mắm' => 0.15,
                    'Tỏi' => 0.1,
                    'Đường' => 0.1,
                    'Ớt hiểm' => 0.03,
                    'Dầu ăn' => 0.5,
                ],
            ],

            // 26. Gà rô ty bánh bao chiên
            [
                'dish_id' => 26,
                'ingredients' => [
                    'Gà' => 1,
                    'Bánh bao' => 10,
                    'Ngũ vị hương' => 0.05,
                    'Tỏi' => 0.1,
                    'Đường' => 0.1,
                    'Dầu ăn' => 0.3,
                ],
            ],

            // 27. Gà lên mâm xôi đậu
            [
                'dish_id' => 27,
                'ingredients' => [
                    'Gà' => 1,
                    'Đậu xanh' => 0.5,
                    'Xôi đậu xanh' => 1.5,
                    'Hành lá' => 0.1,
                    'Gừng' => 0.1,
                    'Muối' => 0.03,
                ],
            ],

            // 28. Gà lên mâm xôi hạt sen
            [
                'dish_id' => 28,
                'ingredients' => [
                    'Gà' => 1,
                    'Hạt sen' => 0.4,
                    'Xôi nếp' => 1.5,
                    'Gừng' => 0.1,
                    'Muối' => 0.03,
                ],
            ],

            // 29. Gà quay - bánh bao chiên
            [
                'dish_id' => 29,
                'ingredients' => [
                    'Gà' => 1,
                    'Bánh bao' => 10,
                    'Ngũ vị hương' => 0.05,
                    'Tỏi' => 0.1,
                    'Đường' => 0.1,
                    'Dầu ăn' => 0.2,
                ],
            ],

            // 30. Gà lên mâm 2 món
            [
                'dish_id' => 30,
                'ingredients' => [
                    'Gà' => 1,
                    'Xôi nếp' => 1,
                    'Gừng' => 0.1,
                    'Lá chanh' => 0.05,
                    'Muối' => 0.03,
                    'Hành lá' => 0.05,
                ],
            ],

            // 31. Đùi gà rô ty - bánh bao chiên
            [
                'dish_id' => 31,
                'ingredients' => [
                    'Gà' => 1,
                    'Bánh bao' => 10,
                    'Ngũ vị hương' => 0.05,
                    'Tỏi' => 0.1,
                    'Đường' => 0.1,
                    'Dầu ăn' => 0.3,
                ],
            ],

            // 32. Gà hấp lá chanh
            [
                'dish_id' => 32,
                'ingredients' => [
                    'Gà' => 1,
                    'Lá chanh' => 0.1,
                    'Gừng' => 0.1,
                    'Muối' => 0.03,
                ],
            ],

            // 33. Gà nướng lá chanh
            [
                'dish_id' => 33,
                'ingredients' => [
                    'Gà' => 1,
                    'Lá chanh' => 0.1,
                    'Tỏi' => 0.1,
                    'Muối' => 0.03,
                    'Dầu ăn' => 0.1,
                ],
            ],

            // 34. Gà nướng muối ớt
            [
                'dish_id' => 34,
                'ingredients' => [
                    'Gà' => 1,
                    'Muối' => 0.05,
                    'Ớt hiểm' => 0.1,
                    'Tỏi' => 0.1,
                    'Dầu ăn' => 0.1,
                ],
            ],

            // 35. Vịt quay Bắc Kinh
            [
                'dish_id' => 35,
                'ingredients' => [
                    'Thịt vịt' => 2,
                    'Bánh tráng' => 2,
                    'Hành tây' => 0.3,
                    'Gừng' => 0.1,
                    'Tỏi' => 0.1,
                    'Đường' => 0.1,
                    'Nước tương' => 0.1,
                ],
            ],

            // 36. Bò nhúng ớt
            [
                'dish_id' => 36,
                'ingredients' => [
                    'Thịt bò' => 1.5,
                    'Ớt hiểm' => 0.15,
                    'Sả' => 0.15,
                    'Gừng' => 0.1,
                    'Tỏi' => 0.1,
                    'Rau lẩu' => 1,
                ],
            ],

            // 37. Bò nhúng giấm
            [
                'dish_id' => 37,
                'ingredients' => [
                    'Thịt bò' => 1.5,
                    'Giấm' => 0.3,
                    'Bánh tráng' => 2,
                    'Rau lẩu' => 1,
                    'Nước mắm' => 0.15,
                    'Đường' => 0.1,
                    'Tỏi' => 0.05,
                ],
            ],

            // 38. Bò thui - Bê non xào sả ớt
            [
                'dish_id' => 38,
                'ingredients' => [
                    'Thịt bò' => 0.8,
                    'Bê non' => 0.8,
                    'Sả' => 0.15,
                    'Ớt hiểm' => 0.05,
                    'Tỏi' => 0.1,
                    'Dầu ăn' => 0.1,
                ],
            ],

            // 39. Bò bê non cuộn
            [
                'dish_id' => 39,
                'ingredients' => [
                    'Thịt bò' => 0.8,
                    'Bê non' => 0.8,
                    'Nấm kim châm' => 0.4,
                    'Tỏi' => 0.05,
                    'Dầu ăn' => 0.1,
                    'Nước tương' => 0.1,
                ],
            ],

            // 40. Bò bê non hấp mướp
            [
                'dish_id' => 40,
                'ingredients' => [
                    'Thịt bò' => 0.8,
                    'Bê non' => 0.8,
                    'Mướp hương' => 0.8,
                    'Gừng' => 0.1,
                    'Hành lá' => 0.1,
                ],
            ],

            // 41. Bò cuốn cải
            [
                'dish_id' => 41,
                'ingredients' => [
                    'Thịt bò' => 1.5,
                    'Cải xanh' => 0.8,
                    'Mắm nêm' => 0.15,
                    'Tỏi' => 0.1,
                    'Ớt hiểm' => 0.05,
                    'Đường' => 0.05,
                ],
            ],

            // 42. Bò bít tết - khoai tây chiên
            [
                'dish_id' => 42,
                'ingredients' => [
                    'Thịt bò' => 1.5,
                    'Khoai tây' => 1,
                    'Bơ' => 0.15,
                    'Tỏi' => 0.1,
                    'Tiêu xanh' => 0.05,
                    'Dầu ăn' => 0.1,
                ],
            ],

            // 43. Bò lúc lắc - khoai tây chiên
            [
                'dish_id' => 43,
                'ingredients' => [
                    'Thịt bò' => 1.5,
                    'Khoai tây' => 1,
                    'Hành tây' => 0.3,
                    'Ớt chuông' => 0.3,
                    'Bơ' => 0.1,
                    'Tỏi' => 0.1,
                ],
            ],

            // 44. Bò xào bơ xanh
            [
                'dish_id' => 44,
                'ingredients' => [
                    'Thịt bò' => 1.5,
                    'Bông cải xanh' => 0.8,
                    'Bơ' => 0.2,
                    'Tỏi' => 0.1,
                    'Dầu ăn' => 0.1,
                ],
            ],

            // 45. Dê hấp cung đình
            [
                'dish_id' => 45,
                'ingredients' => [
                    'Thịt dê' => 1.8,
                    'Sả' => 0.2,
                    'Gừng' => 0.15,
                    'Rau lẩu' => 0.5,
                    'Muối' => 0.03,
                ],
            ],

            // 46. Dê um nén
            [
                'dish_id' => 46,
                'ingredients' => [
                    'Thịt dê' => 1.8,
                    'Củ nén' => 0.2,
                    'Sả' => 0.15,
                    'Ớt hiểm' => 0.05,
                    'Bánh mì' => 10,
                    'Dầu ăn' => 0.1,
                ],
            ],

            // 47. Mực hấp gừng
            [
                'dish_id' => 47,
                'ingredients' => [
                    'Mực' => 1.5,
                    'Gừng' => 0.15,
                    'Hành lá' => 0.1,
                    'Nước tương' => 0.1,
                ],
            ],

            // 48. Mực chiên xù
            [
                'dish_id' => 48,
                'ingredients' => [
                    'Mực' => 1.5,
                    'Bột chiên xù' => 0.3,
                    'Trứng gà' => 2,
                    'Dầu ăn' => 0.5,
                ],
            ],

            // 49. Mực tươi nướng
            [
                'dish_id' => 49,
                'ingredients' => [
                    'Mực' => 1.5,
                    'Sa tế' => 0.1,
                    'Tỏi' => 0.1,
                    'Dầu ăn' => 0.1,
                    'Muối' => 0.03,
                ],
            ],

            // 50. Mực um sa tế
            [
                'dish_id' => 50,
                'ingredients' => [
                    'Mực' => 1.5,
                    'Sa tế' => 0.15,
                    'Sả' => 0.15,
                    'Tỏi' => 0.1,
                    'Đường' => 0.05,
                ],
            ],

            // 51. Mực nhúng ớt
            [
                'dish_id' => 51,
                'ingredients' => [
                    'Mực' => 1.5,
                    'Ớt hiểm' => 0.15,
                    'Sả' => 0.15,
                    'Rau lẩu' => 1,
                    'Gừng' => 0.1,
                ],
            ],

            // 52. Mực độn
            [
                'dish_id' => 52,
                'ingredients' => [
                    'Mực' => 1.5,
                    'Thịt heo' => 0.4,
                    'Nấm mèo' => 0.1,
                    'Bún tàu' => 0.1,
                    'Hành lá' => 0.05,
                    'Dầu ăn' => 0.2,
                ],
            ],

            // 53. Mực chiên mắm
            [
                'dish_id' => 53,
                'ingredients' => [
                    'Mực' => 1.5,
                    'Nước mắm' => 0.15,
                    'Tỏi' => 0.1,
                    'Ớt hiểm' => 0.05,
                    'Đường' => 0.1,
                    'Dầu ăn' => 0.4,
                ],
            ],

            // 54. Mực cơm chiên mắm
            [
                'dish_id' => 54,
                'ingredients' => [
                    'Mực' => 1.5,
                    'Nước mắm' => 0.15,
                    'Tỏi' => 0.1,
                    'Đường' => 0.1,
                    'Dầu ăn' => 0.4,
                ],
            ],

            // 55. Mực cơm hấp sốt Thái
            [
                'dish_id' => 55,
                'ingredients' => [
                    'Mực' => 1.5,
                    'Tắc' => 0.15,
                    'Ớt hiểm' => 0.05,
                    'Tỏi' => 0.05,
                    'Đường' => 0.05,
                    'Nước mắm' => 0.1,
                ],
            ],

            // 56. Tôm chiên hỏa tiễn
            [
                'dish_id' => 56,
                'ingredients' => [
                    'Tôm' => 1.2,
                    'Khoai tây' => 0.8,
                    'Bột chiên xù' => 0.3,
                    'Trứng gà' => 2,
                    'Dầu ăn' => 0.5,
                ],
            ],

            // 57. Tôm càng xanh hấp sả
            [
                'dish_id' => 57,
                'ingredients' => [
                    'Tôm' => 1.8,
                    'Sả' => 0.2,
                    'Gừng' => 0.1,
                    'Muối' => 0.03,
                ],
            ],

            // 58. Tôm chiên cốm xanh
            [
                'dish_id' => 58,
                'ingredients' => [
                    'Tôm' => 1.5,
                    'Bột chiên' => 0.3,
                    'Trứng gà' => 2,
                    'Dầu ăn' => 0.5,
                ],
            ],

            // 59. Tôm sú hấp sả
            [
                'dish_id' => 59,
                'ingredients' => [
                    'Tôm' => 1.8,
                    'Sả' => 0.2,
                    'Gừng' => 0.1,
                    'Muối' => 0.03,
                ],
            ],

            // 60. Tôm nướng xiên
            [
                'dish_id' => 60,
                'ingredients' => [
                    'Tôm' => 1.5,
                    'Tỏi' => 0.1,
                    'Dầu ăn' => 0.1,
                    'Muối' => 0.03,
                ],
            ],

            // 61. Tôm đất rang muối
            [
                'dish_id' => 61,
                'ingredients' => [
                    'Tôm' => 1.5,
                    'Muối' => 0.1,
                    'Tỏi' => 0.1,
                    'Ớt hiểm' => 0.05,
                    'Dầu ăn' => 0.2,
                ],
            ],

            // 62. Tôm chiên xù
            [
                'dish_id' => 62,
                'ingredients' => [
                    'Tôm' => 1.5,
                    'Bột chiên xù' => 0.3,
                    'Trứng gà' => 2,
                    'Dầu ăn' => 0.5,
                ],
            ],

            // 63. Tôm chiên giòn
            [
                'dish_id' => 63,
                'ingredients' => [
                    'Tôm' => 1.5,
                    'Bột chiên' => 0.2,
                    'Dầu ăn' => 0.5,
                    'Muối' => 0.03,
                ],
            ],

            // 64. Tôm rim me
            [
                'dish_id' => 64,
                'ingredients' => [
                    'Tôm' => 1.5,
                    'Đường' => 0.1,
                    'Tỏi' => 0.1,
                    'Dầu ăn' => 0.1,
                    'Nước mắm' => 0.1,
                ],
            ],

            // 65. Tôm cuộn bò bía
            [
                'dish_id' => 65,
                'ingredients' => [
                    'Tôm' => 1,
                    'Bánh bò bía' => 2,
                    'Bột chiên' => 0.2,
                    'Trứng gà' => 2,
                    'Dầu ăn' => 0.4,
                ],
            ],

            // 66. Tôm hữu
            [
                'dish_id' => 66,
                'ingredients' => [
                    'Tôm' => 1.5,
                    'Nước cốt dừa' => 0.3,
                    'Nước mắm' => 0.1,
                    'Đường' => 0.1,
                    'Tỏi' => 0.05,
                ],
            ],

            // 67. Tôm rang sả
            [
                'dish_id' => 67,
                'ingredients' => [
                    'Tôm' => 1.5,
                    'Sả' => 0.2,
                    'Tỏi' => 0.1,
                    'Ớt hiểm' => 0.05,
                    'Dầu ăn' => 0.1,
                ],
            ],

            // 68. Bò kho - bánh mì
            [
                'dish_id' => 68,
                'ingredients' => [
                    'Thịt bò' => 1.5,
                    'Cà rốt' => 0.5,
                    'Khoai tây' => 0.5,
                    'Bánh mì' => 10,
                    'Gừng' => 0.1,
                    'Tỏi' => 0.1,
                    'Ngũ vị hương' => 0.05,
                ],
            ],

            // 69. Bò hầm tiêu xanh - bánh mì
            [
                'dish_id' => 69,
                'ingredients' => [
                    'Thịt bò' => 1.5,
                    'Tiêu xanh' => 0.1,
                    'Bánh mì' => 10,
                    'Tỏi' => 0.1,
                    'Gừng' => 0.1,
                ],
            ],

            // 70. Gân bò hầm - bánh mì
            [
                'dish_id' => 70,
                'ingredients' => [
                    'Gân bò' => 1.8,
                    'Bánh mì' => 10,
                    'Gừng' => 0.1,
                    'Tỏi' => 0.1,
                    'Tiêu xanh' => 0.05,
                ],
            ],

            // 71. Giò hầm bắc trân - bánh mì
            [
                'dish_id' => 71,
                'ingredients' => [
                    'Giò heo' => 1.8,
                    'Bánh mì' => 10,
                    'Gừng' => 0.1,
                    'Tỏi' => 0.1,
                ],
            ],

            // 72. Cari bò largu - bánh mì
            [
                'dish_id' => 72,
                'ingredients' => [
                    'Thịt bò' => 1.5,
                    'Khoai tây' => 0.5,
                    'Cà rốt' => 0.5,
                    'Nước cốt dừa' => 0.5,
                    'Bánh mì' => 10,
                    'Tỏi' => 0.1,
                ],
            ],

            // 73. Cari sườn nấu nấm - bánh mì
            [
                'dish_id' => 73,
                'ingredients' => [
                    'Sườn heo' => 1.5,
                    'Nấm hương' => 0.2,
                    'Nấm đông cô' => 0.2,
                    'Khoai tây' => 0.4,
                    'Nước cốt dừa' => 0.3,
                    'Bánh mì' => 10,
                ],
            ],

            // 74. Cari cốt lết - bánh mì
            [
                'dish_id' => 74,
                'ingredients' => [
                    'Cốt lết heo' => 1.5,
                    'Khoai tây' => 0.5,
                    'Cà rốt' => 0.3,
                    'Nước cốt dừa' => 0.4,
                    'Bánh mì' => 10,
                ],
            ],

            // 75. Sườn non um chuối - bánh mì
            [
                'dish_id' => 75,
                'ingredients' => [
                    'Sườn heo' => 1.5,
                    'Chuối xanh' => 0.8,
                    'Đậu phụ' => 0.5,
                    'Bánh mì' => 10,
                    'Sả' => 0.1,
                    'Gừng' => 0.1,
                ],
            ],

            // 76. Vịt hầm táo - bánh mì
            [
                'dish_id' => 76,
                'ingredients' => [
                    'Thịt vịt' => 1.8,
                    'Táo đỏ' => 0.2,
                    'Bánh mì' => 10,
                    'Gừng' => 0.1,
                ],
            ],

            // 77. Vịt nấu đậu - bánh mì
            [
                'dish_id' => 77,
                'ingredients' => [
                    'Thịt vịt' => 1.8,
                    'Đậu phụ' => 0.5,
                    'Cà rốt' => 0.3,
                    'Bánh mì' => 10,
                ],
            ],

            // 78. Vịt nấu nấm - bánh mì
            [
                'dish_id' => 78,
                'ingredients' => [
                    'Thịt vịt' => 1.8,
                    'Nấm hương' => 0.2,
                    'Nấm đông cô' => 0.2,
                    'Bánh mì' => 10,
                    'Gừng' => 0.1,
                ],
            ],

            // 79. Vịt hầm giả cầy - bánh mì
            [
                'dish_id' => 79,
                'ingredients' => [
                    'Thịt vịt' => 1.8,
                    'Sả' => 0.15,
                    'Gừng' => 0.15,
                    'Bánh mì' => 10,
                    'Nước mắm' => 0.1,
                ],
            ],

            // 80. Vịt tiềm - bánh mì
            [
                'dish_id' => 80,
                'ingredients' => [
                    'Thịt vịt' => 1.8,
                    'Táo đỏ' => 0.1,
                    'Hạt sen' => 0.2,
                    'Nấm hương' => 0.1,
                    'Bánh mì' => 10,
                ],
            ],

            // 81. Gà tiềm hạt sen - bánh mì
            [
                'dish_id' => 81,
                'ingredients' => [
                    'Gà' => 2,
                    'Hạt sen' => 0.4,
                    'Táo đỏ' => 0.1,
                    'Nấm hương' => 0.1,
                    'Bánh mì' => 10,
                    'Gừng' => 0.1,
                ],
            ],

            // 82. Gà hầm củ sọ - bánh mì
            [
                'dish_id' => 82,
                'ingredients' => [
                    'Gà' => 2,
                    'Củ sọ' => 0.8,
                    'Bánh mì' => 10,
                    'Gừng' => 0.1,
                    'Hành lá' => 0.1,
                    'Muối' => 0.03,
                ],
            ],

            // 83. Lẩu cá bớp - Bún tươi
            [
                'dish_id' => 83,
                'ingredients' => [
                    'Cá bớp' => 1.8,
                    'Bún tươi' => 1.5,
                    'Lá giang' => 0.3,
                    'Cà chua' => 0.3,
                    'Sả' => 0.2,
                    'Ớt hiểm' => 0.05,
                    'Rau lẩu' => 1.5,
                    'Nước mắm' => 0.1,
                ],
            ],

            // 84. Lẩu hải sản - Bún tươi
            [
                'dish_id' => 84,
                'ingredients' => [
                    'Tôm' => 0.5,
                    'Mực' => 0.5,
                    'Nghêu' => 0.8,
                    'Bún tươi' => 1.5,
                    'Cà chua' => 0.3,
                    'Sả' => 0.2,
                    'Ớt hiểm' => 0.05,
                    'Rau lẩu' => 1.5,
                ],
            ],

            // 85. Lẩu bò - Bún tươi
            [
                'dish_id' => 85,
                'ingredients' => [
                    'Thịt bò' => 1.2,
                    'Gân bò' => 0.5,
                    'Bún tươi' => 1.5,
                    'Sả' => 0.2,
                    'Gừng' => 0.1,
                    'Cà rốt' => 0.3,
                    'Rau lẩu' => 1.5,
                    'Nước mắm' => 0.1,
                ],
            ],

            // 86. Lẩu nấm gà - Bún tươi
            [
                'dish_id' => 86,
                'ingredients' => [
                    'Gà' => 1.5,
                    'Nấm kim châm' => 0.3,
                    'Nấm đông cô' => 0.2,
                    'Nấm hương' => 0.2,
                    'Nấm mèo' => 0.1,
                    'Bún tươi' => 1.5,
                    'Rau lẩu' => 1,
                    'Gừng' => 0.1,
                ],
            ],

            // 87. Lẩu gà lá giang - Bún tươi
            [
                'dish_id' => 87,
                'ingredients' => [
                    'Gà' => 1.8,
                    'Lá giang' => 0.4,
                    'Bún tươi' => 1.5,
                    'Sả' => 0.2,
                    'Ớt hiểm' => 0.05,
                    'Rau lẩu' => 1,
                    'Gừng' => 0.1,
                ],
            ],

            // 88. Lẩu cá cu - Bún tươi
            [
                'dish_id' => 88,
                'ingredients' => [
                    'Cá cu' => 1.8,
                    'Bún tươi' => 1.5,
                    'Cà chua' => 0.3,
                    'Sả' => 0.2,
                    'Ớt hiểm' => 0.05,
                    'Rau lẩu' => 1.5,
                    'Nước mắm' => 0.1,
                ],
            ],

            // 89. Cơm dương châu
            [
                'dish_id' => 89,
                'ingredients' => [
                    'Cơm' => 2,
                    'Lạp xưởng' => 0.3,
                    'Trứng gà' => 5,
                    'Tôm' => 0.3,
                    'Thịt xá xíu' => 0.4,
                    'Cà rốt' => 0.2,
                    'Đậu xanh' => 0.2,
                    'Hành lá' => 0.1,
                    'Dầu ăn' => 0.2,
                ],
            ],

            // 90. Cơm chiên hải sản
            [
                'dish_id' => 90,
                'ingredients' => [
                    'Cơm' => 2,
                    'Tôm' => 0.4,
                    'Mực' => 0.4,
                    'Cà rốt' => 0.2,
                    'Đậu xanh' => 0.2,
                    'Trứng gà' => 4,
                    'Hành lá' => 0.1,
                    'Dầu ăn' => 0.2,
                ],
            ],

            // 91. Cơm chiên trứng
            [
                'dish_id' => 91,
                'ingredients' => [
                    'Cơm' => 2,
                    'Trứng gà' => 6,
                    'Hành lá' => 0.1,
                    'Dầu ăn' => 0.2,
                    'Muối' => 0.03,
                ],
            ],

            // 92. Cá diêu hồng chiên xù
            [
                'dish_id' => 92,
                'ingredients' => [
                    'Cá diêu hồng' => 2,
                    'Bột chiên xù' => 0.3,
                    'Trứng gà' => 2,
                    'Gừng' => 0.1,
                    'Nước mắm' => 0.1,
                    'Dầu ăn' => 0.6,
                ],
            ],

            // 93. Nghêu hấp sả
            [
                'dish_id' => 93,
                'ingredients' => [
                    'Nghêu' => 2,
                    'Sả' => 0.3,
                    'Ớt hiểm' => 0.05,
                    'Gừng' => 0.1,
                    'Tắc' => 0.1,
                ],
            ],

            // 94. Chíp chíp hấp sả
            [
                'dish_id' => 94,
                'ingredients' => [
                    'Chíp chíp' => 2,
                    'Sả' => 0.3,
                    'Ớt hiểm' => 0.05,
                    'Gừng' => 0.1,
                    'Tắc' => 0.1,
                ],
            ],

            // 95. Bánh hỏi thịt nướng
            [
                'dish_id' => 95,
                'ingredients' => [
                    'Bánh hỏi' => 1.5,
                    'Thịt heo' => 1.2,
                    'Mỡ hành' => 0.2,
                    'Hành lá' => 0.1,
                    'Nước mắm' => 0.15,
                    'Đường' => 0.1,
                    'Tỏi' => 0.05,
                    'Rau lẩu' => 0.5,
                ],
            ],

            // 96. Heo quay bánh hỏi
            [
                'dish_id' => 96,
                'ingredients' => [
                    'Thịt heo' => 1.5,
                    'Bánh hỏi' => 1.5,
                    'Mỡ hành' => 0.2,
                    'Hành lá' => 0.1,
                    'Rau lẩu' => 0.5,
                    'Nước mắm' => 0.1,
                ],
            ],

            // 97. Heo quay bánh chưng
            [
                'dish_id' => 97,
                'ingredients' => [
                    'Thịt heo' => 1.8,
                    'Bánh chưng' => 2,
                    'Dầu ăn' => 0.4,
                    'Nước mắm' => 0.1,
                ],
            ],

            // 98. Bánh bao bánh vạc
            [
                'dish_id' => 98,
                'ingredients' => [
                    'Tôm' => 0.5,
                    'Thịt heo' => 0.3,
                    'Bột chiên' => 0.5,
                    'Hành lá' => 0.1,
                    'Tỏi' => 0.05,
                    'Nước mắm' => 0.1,
                    'Đường' => 0.05,
                    'Dầu ăn' => 0.1,
                ],
            ],

            // 99. Cá mú hấp xì dầu
            [
                'dish_id' => 99,
                'ingredients' => [
                    'Cá mú' => 2,
                    'Nước tương' => 0.15,
                    'Gừng' => 0.15,
                    'Hành lá' => 0.15,
                    'Tỏi' => 0.05,
                    'Dầu ăn' => 0.1,
                ],
            ],

            // 100. Cá mú hấp thập cẩm
            [
                'dish_id' => 100,
                'ingredients' => [
                    'Cá mú' => 2,
                    'Nấm hương' => 0.15,
                    'Thịt heo' => 0.3,
                    'Bún tàu' => 0.1,
                    'Nấm mèo' => 0.1,
                    'Cà rốt' => 0.2,
                    'Gừng' => 0.1,
                    'Hành lá' => 0.1,
                    'Nước tương' => 0.1,
                ],
            ],

            // 101. Cá cu hấp
            [
                'dish_id' => 101,
                'ingredients' => [
                    'Cá cu' => 2,
                    'Gừng' => 0.15,
                    'Hành lá' => 0.1,
                    'Nước tương' => 0.1,
                    'Tỏi' => 0.05,
                ],
            ],

            // 102. Cá chim hấp
            [
                'dish_id' => 102,
                'ingredients' => [
                    'Cá chim' => 2,
                    'Nấm mèo' => 0.1,
                    'Bún tàu' => 0.1,
                    'Gừng' => 0.15,
                    'Hành lá' => 0.1,
                    'Nước tương' => 0.1,
                ],
            ],

            // 103. Bao tử phá lấu
            [
                'dish_id' => 103,
                'ingredients' => [
                    'Bao tử' => 1.8,
                    'Ngũ vị hương' => 0.05,
                    'Nước cốt dừa' => 0.5,
                    'Gừng' => 0.1,
                    'Tỏi' => 0.1,
                    'Nước tương' => 0.1,
                    'Đường' => 0.1,
                ],
            ],

            // 104. Bao tử hầm tiêu
            [
                'dish_id' => 104,
                'ingredients' => [
                    'Bao tử' => 1.8,
                    'Tiêu xanh' => 0.15,
                    'Gừng' => 0.1,
                    'Hành lá' => 0.1,
                    'Muối' => 0.03,
                    'Nước mắm' => 0.1,
                ],
            ],

            // 105. Kem plan
            [
                'dish_id' => 105,
                'ingredients' => [
                    'Trứng gà' => 15,
                    'Sữa' => 1,
                    'Đường' => 0.3,
                    'Caramel' => 0.3,
                ],
            ],

            // 106. Sữa chua
            [
                'dish_id' => 106,
                'ingredients' => [
                    'Sữa chua' => 10,
                    'Sữa' => 0.5,
                    'Đường' => 0.1,
                ],
            ],

            // 107. Đông sương
            [
                'dish_id' => 107,
                'ingredients' => [
                    'Bột rau câu' => 0.1,
                    'Đường' => 0.3,
                    'Nước cốt dừa' => 0.5,
                    'Cà phê' => 0.1,
                ],
            ],

            // 108. Trái cây
            [
                'dish_id' => 108,
                'ingredients' => [
                    'Trái cây theo mùa' => 2,
                ],
            ],
        ];
        foreach ($dishIngredient as $item) {
            $dish = Dish::find($item['dish_id']);

            if (!$dish) {
                $this->command->warn(
                    "Không tìm thấy món ăn ID: " . $item['dish_id']
                );
                continue;
            }

            foreach ($item['ingredients'] as $ingredientName => $quantity) {
                $ingredient = Ingredient::where('name', $ingredientName)->first();

                if (!$ingredient) {
                    $this->command->warn(
                        "Không tìm thấy nguyên liệu: " . $ingredientName
                    );
                    continue;
                }

                DishIngredient::updateOrCreate(
                    [
                        'dish_id' => $dish->id,
                        'ingredient_id' => $ingredient->id,
                    ],
                    [
                        'quantity_per_table' => $quantity,
                    ]
                );
            }
        }
        
        $this->command->info("Finish seeding a DishIngredient");
    }
}
