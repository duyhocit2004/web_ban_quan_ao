<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\admin\OrderModel;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\admin\OrderDetailModel;
use App\Models\admin\paymentMethodModel;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = DB::table('order',)
        ->join('payment_status' , 'order.payment_status_id' ,'=' ,'payment_status.id')
        ->select('order.*','payment_status.name as namestatus')
        ->orderBy('id','DESC')
        ->paginate(10);
        // dd($list);
        return view('admin.order.list',compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = DB::table('order',)
        ->join('payment_status' , 'order.payment_status_id' ,'=' ,'payment_status.id')
        ->join('payment_method','order.payment_method_id','=','payment_method.id')
        ->select('order.*','payment_status.name as namestatus','payment_method.name as methodname')
        ->orderBy('id','DESC')
        ->Where('order.id' ,'=',$id)
        ->first();
        
        $detail_order = OrderDetailModel::join('products', 'detail_order.products_id', '=', 'products.id')
        ->where('detail_order.order_id', '=', $order->id)
        ->select('detail_order.*', 'products.name as product_name','products.image as product_image')
        ->get();
        // dd($detail_order);
        return view('admin.order.detail',compact('order','detail_order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $listOrder = OrderModel::findOrFail($id);
        $payment_method = paymentMethodModel::get();
        // dd($listOrder);
        return view('admin.order.edit',compact('listOrder','payment_method'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        if($request->isMethod('PUT')){
            // $param = $request->except('_token','_method');
            $list = OrderModel::findOrFail($id);

            $request->validate([
                'username' => 'required|max:100',
                'phone'=>'required|numeric|digits_between:8,10',
                'email' => 'required|email',
                'note' => 'required|max:100'
            ],[
                'username.required' => 'vui lòng nhập',
                'username.max:100' => 'bạn chỉ được đặt tên đối ta 100 kí tự',
                'phone.required' => 'vui lòng nhập số điện thoại',
                'phone.numeric'=>'vui lòng nhập số không được nhập chữ và kí tự đặc biện',
                'phone.digits_between:8,10' => 'không được nhập lớn hơn 10 và bé hơn 8',
                'email.required' => 'vui lòng nhập email',
                'email.email'=>'chỉ có thể nhập được email',
                'note.required'=>'vui lòng nhập',
                'note.max:100'=>'nhập đối ta là 100 kí tự',

            ]);
            $list->update([
                'username' => $request->username,
                'phone'=>$request->phone,
                'email'=>$request->email,
                'note'=> $request->note,
                'payment_method_id'=>$request->payment_method_id,
                'updated_at'=>now()
                
            ]);
            return redirect()->route('Order')->with('errors','thông tin đã được sửa thành công');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
