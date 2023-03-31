<?php

namespace App\Http\Controllers;

use App\Models\Booxing;
use Illuminate\Http\Request;

class booxingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Booxing::all();
        // dd($booxing);
       return view('booxing.index', compact ('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('booxing.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $data=[
                'id' => $request->id,
                'nama'=>$request->nama,
                'alamat'=>$request->alamat,
                'no_hp'=>$request->no_hp,
                'paket'=>$request->paket,
                'tgl_booxing'=>$request->tgl_booxing,
            ];
            // dd($data);
            booxing::create($data);
            // booxing::create($request->except(['_token','submit']));
        return redirect()->to('booxing')->with('sucess','Berhasil menambahkan data');
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
    public function edit($id)
    {
       $data=booxing::where('id',$id)->first();
       return view('booxing.edit')->with('data',$data);
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
        booxing::where('id',$id)->delete();
        return redirect()->to('booxing')->with('success','Data berhasil dihapus');
    }
}
