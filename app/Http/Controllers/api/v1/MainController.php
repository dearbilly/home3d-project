<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Color;
use App\Models\Pattern;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function main(){
        $categories = Category::select([
            "id",
            "name",
        ])->get();

        $categories_with_furnitures = Category::select([
            DB::raw('categories.id AS category_id'),
            DB::raw('categories.name AS category_name'),
            DB::raw('furniture.id AS furniture_id'),
            DB::raw('furniture.name AS furniture_name'),
            "furniture.category_id",
            "furniture.obj_file",
        ])->leftJoin('furniture', 'furniture.category_id', '=', 'categories.id')->get();

        $colors = Color::select([
            "id",
            "color_name",
        ])->get();

        $colors_with_palette = Color::select([
            DB::raw('colors.id AS color_id'),
            'colors.color_name',
            'palette.color_id',
            DB::raw('palette.color_name AS palette_name'),
        ])->leftJoin('palette, pallete.color_id', '=', 'color.id');


        $pattens = Pattern::select([
            "id",
            "name",
            "obj_file",
        ])->get();

        return response()->json([
            "categories" => $categories,
            "categories_with_furnitures" => $categories_with_furnitures,
            "colors" => $colors,
            "colors_with_palette" => $colors_with_palette,
            "pattens" => $pattens,
        ]);
    }

    public function getContents(){
        
    }
}
