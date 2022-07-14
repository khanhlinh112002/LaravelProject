<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\T_Food;
use App\Models\Type;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use App\Http\Requests\T_Foods;

class T_FoodController extends Controller
{
    public function index(){
        $new_product = T_Food::all();
        return view('T_Food.index',compact('new_product'));
    }
    public function addForm(){
        return view('T_Food.addForm');
    }
    public function postAdd(T_Foods $request){
        $t_food = new T_Food();
        if ($request->hasFile('inputImage')){
            $file = $request -> file ('inputImage');
            $fileName=$file->getClientOriginalName('inputImage');
            $file->move('source/image/product',$fileName);
        }
        $fileName=null;
        if ($request->file('inputImage')!=null){
            $file_name=$request->file('inputImage')->getClientOriginalName();
        }
        $t_food->name=$request->inputName;
        $t_food->image=$file_name;
        $t_food->description=$request->inputDescription;
        $t_food->price=$request->inputPrice;
        $t_food->discount=$request->inputDiscount;
        $t_food->category=$request->inputCategory;

        $t_food->save();
        return redirect('/food')->with('success', 'Đăng ký thành công');
    }
    public function getCategory(){
        
        return view('T_Food.category');
    }
    public function Category($type){
        $type_product = Type::all();
        $sp_theoloai = T_Food::where('category',$type)->get();
        
        return view('T_Food.category',compact('type_product','sp_theoloai'));
    }
    public function getDetail($id){
        $sanpham = T_Food::find($id);
        return view('T_Food.detail',compact('sanpham'));
    }
}