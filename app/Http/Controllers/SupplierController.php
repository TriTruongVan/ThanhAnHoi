<?php

namespace App\Http\Controllers;

use App\Http\Resources\SupplierResource;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function getAllSupplier()
    {
        $supplier = Supplier::with('ingredients')->get();

        return $this->okRes(SupplierResource::collection($supplier));
    }
}
