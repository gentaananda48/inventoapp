<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use Illuminate\Support\Facades\DB;

class GeneralManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::count();
        $oldrequest = Barang::where('status', 'pmrequest')->count();
        $permintaan = Barang::where('status', 'gmrequest')->count();
        $rejected = Barang::where('status', 'reject')->count();
        //$data = Barang::all()->paginate(5);
        $data = Barang::where('status', 'pmrequest')->paginate(5);
    	return view('gm.index')->with([
            'barang' => $barang,
            'oldrequest' => $oldrequest,
            'data' => $data,
            'permintaan' => $permintaan,
            'rejected' => $rejected,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Barang::findOrFail($id);
        return view('gm.detail')->with(['data'=> $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Barang::findOrFail($id);
        $data = $request->all();

        $edit = Barang::findOrFail($id);
        $edit->update($data);

        return redirect()->route('gm.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function list(){
        $data = Barang::where('status', 'pmrequest')->paginate(5);
        return view('gm.list')->with([
            'data' => $data,
        ]);
    }
}
