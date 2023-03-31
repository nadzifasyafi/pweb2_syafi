<?php

namespace App\Http\Controllers;

use App\Models\Deskripsi;
use Illuminate\Http\Request;
use Session;

class DeskripsiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('deskripsi.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('deskripsi.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('id',$request->id);
        Session::flash('nama',$request->nama);
        Session::flash('deskripsi',$request->deskripsi);
        $request->validate([
            'id'=>'required|numeric|unique:deskripsi,id',
            'nama'=>'required',
            'deskripsi'=>'required',
        ],[
            'id.required'=>'ID wajib diisi',
            'id.numeric'=>'ID harus angka',
            'id.unique'=>'ID sudah ada',
            'nama.required'=>'nama wajib diisi',
            'deskripsi.required'=>'deskripsi wajib diisi',
        ]);
        $data = [
            'nim' => $request->nim,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'prodi' => $request->prodi,
        ];
        Deskripsi::create($data);
        return redirect()->to('deskripsi')->with('success','Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Deskripsi::where('id', $id)->first();
        return view('deskripsi.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama'=>'required',
            'deskripsi'=>'required',
        ],[
            'nama.required'=>'nama wajib diisi',
            'deskripsi.required'=>'deskripsi wajib diisi',
        ]);
        $data = [
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ];
        Deskripsi::where('id',$id)->update($data);
        return redirect()->to('deskripsi')->with('success','Berhasil update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Deskripsi::where('id',$id)->delete();
        return redirect()->to('deskripsi')->with('success','Berhasil hapus data');
    }
}
