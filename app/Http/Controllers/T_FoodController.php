<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\T_Food;
use App\Models\Type;

use App\Http\Requests\Requests;

class T_FoodController extends Controller
{
    public function index(){
        $vegetable = T_Food::all();
        return view('T_Food.index',compact('vegetable'));
    }
    public function addForm(){
        return view('T_Food.addForm');
    }
    public function postAdd(Request $request){
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
    public function getCategory($type){
        $type_product = T_Food::where('category',$type)->get();
        return view('T_Food.category',compact('type_product'));
    }
    public function Category($type){
        $type_product = Type::all();
        // $sp_theoloai = T_Food::where('category',$type)->get();
        
        return view('T_Food.category',compact('type_product'));
    }
    public function getDetail(Request $request){
        $sanpham = T_Food::where('id',$request->id)->first();
        return view('T_Food.detail',compact('sanpham'));
    }
}
