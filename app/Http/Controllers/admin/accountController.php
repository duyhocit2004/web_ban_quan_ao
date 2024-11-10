<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\admin\accountModel;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\admin\roleModel;

class accountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

            $list = DB::table('account')
            ->join('role','account.role_id','=','role.id')
            ->select('account.*','role.name as roleName')->Where('role_id','=',2)->paginate(10);
        // dd($list);
        return view('admin.account.listAccountAdmin',compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $role = roleModel::get();
        return view('admin.account.addAccount',compact('role'));
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
    public function show()
    {
        $list = DB::table('account')
        ->join('role','account.role_id','=','role.id')
        ->select('account.*','role.name as roleName')->Where('role_id','=',1)->paginate(10);
    // dd($list);
    return view('admin.account.listAccountUser',compact('list'));
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
