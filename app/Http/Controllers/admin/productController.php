<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\admin\categoryModel;
use App\Models\admin\ProductsModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;


class productController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(isset($_SESSION['account_admin'])){
            $list = DB::table('products')
            ->join('categories' , 'products.category_id' , '=','categories.id')
            ->select('products.*','categories.name as name_categories')->paginate(10);
            ;
            // var_dump($list);
            return view('admin.product.list',compact('list'));
        }else{
            return view('admin.auth.login');
        }
    }
       

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = categoryModel::get();
        return view('admin.product.add',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        
        if($request->isMethod('POST')){
            // dd($request->all());
            $request->validate([
                'name' => 'required|max:255',
                'price' => 'required|max:255',
                'image' => 'required|max:255',
                'quantity' => 'required|max:255|min:1',
                'material' => 'required|max:255',   
                'title' => 'required|max:255',   
                
            ],[
                'name.required' => "bạn chưa nhập tên sản phẩm",
                'name.max:255' => "ky tự đối ta là 255",
                'price.required'=> "bạn chưa nhập giá",
                'quantity.required' => "bạn chưa số lượng",
                'quantity.max:255'=> 'số lượng đối ta là 255',
                'quantity.min:1'=>'số lượng thấp nhất là 1',
                'material.required'=> "bạn chưa nhập chất liệu",
                'title.required'=> "bạn chưa nhập tiêu đề cho sản phẩm",
                'title.max:255'=> "tiêu đề sản phẩm đối ta là 255 ký tự",
            ]);
            if($request->hasFile('image')){
                $pathfile = $request->file('image')->store('image/product','public');
            }else{
                $pathfile = null;
            }
            

            ProductsModel::create([
                'name'=>$request->name,
                'color_id'=> null,
                'size_id' => null,
                'price'=>$request->price,
                'category_id' => $request->categories_id,
                'title' => $request->title,
                'image' => $pathfile,
                'quantity'=>$request->quantity,
                'code_products' => "DH". rand(1, 200),
                'availability'=> $request->quantity > 0 ? 2 : 1 ,
                'material' => $request->material ,
                'created_at' => now(),
                'updated_at'=>null,
            ]);
            return redirect()->route('product')->with('success', 'Sản phẩm đã được thêm thành công!');
            

            
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = categoryModel::get();
        $list = ProductsModel::find($id);
        
        return view('admin.product.edit',compact('list','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if($request->isMethod('PUT')){
           
            $param = $request->except('token_');
           $product = ProductsModel::findOrFail($id);
            $request->validate([
                'name' => 'required|max:255',
                'price' => 'required|max:255',
                'image' => 'required|max:255',
                'quantity' => 'required|max:255|min:1',
                'material' => 'required|max:255',   
                'title' => 'required|max:255',   
                
            ],[
                'name.required' => "bạn chưa nhập tên sản phẩm",
                'name.max:255' => "ky tự đối ta là 255",
                'price.required'=> "bạn chưa nhập giá",
                'quantity.required' => "bạn chưa số lượng",
                'quantity.max:255'=> 'số lượng đối ta là 255',
                'quantity.min:1'=>'số lượng thấp nhất là 1',
                'material.required'=> "bạn chưa nhập chất liệu",
                'title.required'=> "bạn chưa nhập tiêu đề cho sản phẩm",
                'title.max:255'=> "tiêu đề sản phẩm đối ta là 255 ký tự",
            ]);
            if($request->hasFile('image')){
                if($product->image){
                    Storage::delete($product->image);
                }
                $pathfile = $request->file('image')->store('image/product','public');
            }else{
                $pathfile = null;
            }
            

            $product->update([
                'name'=>$request->name,
                'color_id'=> null,
                'size_id' => null,
                'price'=>$request->price,
                'category_id' => $request->categories_id,
                'title' => $request->title,
                'image' => $pathfile,
                'quantity'=>$request->quantity,
                'code_products' => "DH". rand(1, 200),
                'availability'=> $request->quantity > 0 ? 2 : 1 ,
                'material' => $request->material ,
                'updated_at'=>now(),
            ]);
            return redirect()->route('product')->with('success', 'Sản phẩm đã được thêm thành công!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request ,string $id)
    {
        if($request->isMethod('DELETE')){
            $list = ProductsModel::find($id);
            if($request->has('image')){
                $imagePath = $request->image;
                Storage::disk('public/storage/')->exists($imagePath);
            }
            $list->delete();
            return redirect()->route('product');
        }
    }
}
 