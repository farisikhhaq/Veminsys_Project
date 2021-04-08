<?php

namespace App\Http\Controllers;

use App\Models\cekkendaraan;
use Illuminate\Http\Request;

class CekKendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->get('keyword');
        $kendaraan = cekkendaraan::all();

        if($keyword){
            $kendaraan = cekkendaraan::where("merk","LIKE", "%$keyword%")->get();
            $posts = cekkendaraan::orderBy('id_kendaraan', 'desc')->paginate(3); 
        }
        
        $posts = cekkendaraan::orderBy('id_kendaraan', 'desc')->paginate(3); 
        return view('CekKendaraan.index', compact('kendaraan','posts','keyword'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CekKendaraan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'platnomer' => 'required',
            'namakendaraan' => 'required',
            'no_mesin' => 'required',
            'selinder' => 'required',
            'merk' => 'required',
            'type' => 'required',
            'warna' => 'required',
            'bahan_bakar' => 'required',
            'kilometer' => 'required',
            'tahun' => 'required',
        ]);
        cekkendaraan::create($request->all());
        return redirect()->route('CekKendaraan.index')
            ->with('success', 'Kendaraan Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($platnomer)
    {
        $Mahasiswa = cekkendaraan::find($platnomer);
        return view('CekKendaraan.detail', compact('Mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($platnomer)
    {
        $kendaraan = cekkendaraan::find($platnomer);
        return view('CekKendaraan.edit', compact('kendaraan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $platnomer)
    {
        $request->validate([
            'platnomer' => 'required',
            'no_mesin' => 'required',
            'selinder' => 'required',
            'merk' => 'required',
            'type' => 'required',
            'warna' => 'required',
            'bahan_bakar' => 'required',
            'kilometer' => 'required',
            'tahun' => 'required',
        ]);
        cekkendaraan::find($platnomer)->update($request->all());
        return redirect()->route('CekKendaraan.index')
            ->with('success', 'Kendaraan Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($platnomer)
    {
        cekkendaraan::find($platnomer)->delete();
        return redirect()->route('CekKendaraan.index')
            ->with('success', 'Kendaraan Berhasil Dihapus');
    }

}
