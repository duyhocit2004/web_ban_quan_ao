<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\admin\contactModel;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class contactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = DB::table('contact')->paginate(10);
        
        return view('admin.contact.listContact',compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.contact.addContact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->isMethod('POST')){
            $param = $request->except('token_');
            $request->validate([
                'name' => 'required|max:255',
                'phone' => 'required|digits_between:8,10',
                'topic' => 'required|max:100',
                'message'=> 'required|max:255',
            ]);

            contactModel::create($param);
            return redirect()->route('contact')->withErrors(['error' => 'Bạn thêm thành công']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
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
