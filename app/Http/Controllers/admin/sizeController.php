<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\sizeModel;
use Illuminate\Http\Request;

class sizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listSize = sizeModel::paginate(10);
        // dd($listSize);
        return view('admin.size.listSize',compact('listSize'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.size.addSize');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      if($request->isMethod('POST')){
        $param = $request->only('name');
        $request->validate([
            'name' => 'required|max:25'
        ],[
            'name.required'=>'bạn không được để trống',
            'name.max:25' => 'không được vượt quá 25 ký tự'
        ]);
        sizeModel::create($param);
        return redirect()->route('size');
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
        $listSize = sizeModel::findOrFail($id);
        return view('admin.size.editSize',compact('listSize'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if($request->isMethod('PUT')){
            $update = sizeModel::find($id);
            $param = $request->only('name');
            $request->validate([
                'name' => 'required|max:25'
            ],[
                'name.required'=>'bạn không được để trống',
                'name.max:25' => 'không được vượt quá 25 ký tự'
            ]);
            $update->update($param);
            return redirect()->route('size')->withErrors('thongbao','them thanh cong');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,string $id)
    {
        if($request->isMethod('DELETE')){
            // dd($id);
            $id1 = sizeModel::findOrFail($id);
            $id1->delete();
            return redirect()->route('size');
        }
    }
}
