<?php

namespace App\Http\Controllers;

use App\Http\Resources\IngredientResource;
use App\Http\Resources\PaginateResource;
use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    public function getAllIngredient(Request $request)
    {
        // 1. Bắt đầu truy vấn bảng nguyên liệu
        $query = Ingredient::query();

        // 2. Nhận thông tin sắp xếp từ Vue
        $sortBy = $request->input('sortBy', 'created_at');
        $sortDir = strtoupper($request->input('sortDir', 'DESC'));

        // 3. Kiểm tra chiều sắp xếp
        if (!in_array($sortDir, ['ASC', 'DESC'])) {
            $sortDir = 'DESC';
        }

        // 4. Chọn cột cần sắp xếp
        switch ($sortBy) {
            case 'name':
                $query->orderBy('name', $sortDir);
                break;

            case 'unit':
                $query->orderBy('unit', $sortDir);
                break;

            default:
                $query->orderBy('id', 'ASC');
                break;
        }

        // 5. Lấy dữ liệu theo trang
        $ingredient = $query->paginate($request->size);

        // 6. Định dạng và trả response
        return $this->okRes(PaginateResource::make($ingredient,IngredientResource::class)
        );
    }

    public function searchIngredient(Request $request)
    {
        $search = $request->search;
        $query = Ingredient::query();
        $query->where("name", "LIKE", "%{$search}%");

        $items = $query->get(["id", "name", "unit"]);

        return $this->okRes(compact("items"));
    }
}
