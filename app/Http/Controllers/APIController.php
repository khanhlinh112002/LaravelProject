<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\T_Food;
use App\Models\Type;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use App\Http\Requests\T_Foods;

class APIController extends Controller{
public function getProducts(){
    $products = T_Food::all();
    return response()->json($products);
}
public function getProductsByKeyword(Request $request)
    {
        if($request->keyword == null)
        {
            return DB::all();
        }
        $result = DB::table('t__food')
                ->where('name', 'like', "%$request->keyword%")
                ->get();
        return $result;
    }
}