<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use Illuminate\Support\Facades\DB;

class InventoryManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function index()
    {
        $barang = Barang::count();
        $kosong = Barang::where('jumlah', 0)->count();
        $permintaan = Barang::where('status', 'imrequest')->count();
        $rejected = Barang::where('status', 'reject')->count();
        //$data = Barang::all()->paginate(5);
        $data = Barang::paginate(5);
    	return view('im.index')->with([
            'barang' => $barang,
            'kosong' => $kosong,
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
        $data = new Barang;
        return view('im.tambah', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Barang;

        $data->nama_barang = $request->nama_barang;
        $data->jumlah = $request->jumlah;
        if($request->file('image')){
            $file = $request->file('image');
            $nama_file = time().str_replace(" ", "", $file->getClientOriginalName());
            $file->move('img/barang', $nama_file);
            $data->image = $nama_file;
        }
        $data->save();

        return redirect('im')->with('success', "Data berhasil disimpan");
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
        return view('im.detail')->with(['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Barang::findOrFail($id);
        return view('im.edit', compact('data'));
    }

    public function request($id)
    {
        $data = Barang::findOrFail($id);
        return view('im.request', compact('data'));
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
        $data = $request->all();

        $edit = Barang::findOrFail($id);
        $edit->update($data);

        return redirect()->route('im.index');
    }

    public function list(){
        $data = Barang::paginate(5);
        return view('im.list')->with([
            'data' => $data,
        ]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Barang::findOrFail($id);
        $data->delete();

        return redirect()->route('imlist');
    }

    public function search(Request $request)
    {
        $barang = Barang::count();
        $kosong = Barang::where('jumlah', 0)->count();
        $permintaan = Barang::where('status', 'imrequest')->count();
        $rejected = Barang::where('status', 'reject')->count();
        $search = $request->get('search');
        $data = Barang::where('status', 'like', "%".$search."%")->paginate(10);
        return view('im.index')->with([
            'barang' => $barang,
            'kosong' => $kosong,
            'data' => $data,
            'permintaan' => $permintaan,
            'rejected' => $rejected,
        ]);
    }
}
