<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\admin\OrderModel;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\admin\OrderDetailModel;

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
        ->select('detail_order.*', 'products.name as product_name')
        ->get();
        // dd($detail_order);
        return view('admin.order.detail',compact('order','detail_order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
