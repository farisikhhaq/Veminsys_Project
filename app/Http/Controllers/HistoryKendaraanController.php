<?php

namespace App\Http\Controllers;
use App\Models\HistoryKendaraan;
use Illuminate\Http\Request;

class HistoryKendaraanController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->get('keyword');
        $kendaraan = HistoryKendaraan::all();

        if($keyword){
            $kendaraan = HistoryKendaraan::where("merk","LIKE", "%$keyword%")->get();
            $posts = HistoryKendaraan::orderBy('id_kendaraan', 'desc')->paginate(3); 
        }
        
        $posts = HistoryKendaraan::orderBy('id_kendaraan', 'desc')->paginate(3); 
        return view('HistoryKendaraan.index', compact('kendaraan','posts','keyword'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('HistoryKendaraan.create');
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
        HistoryKendaraan::create($request->all());
        return redirect()->route('HistoryKendaraan.index')
            ->with('success', 'History Kendaraan Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($platnomer)
    {
        $Mahasiswa = HistoryKendaraan::find($platnomer);
        return view('HistoryKendaraan.detail', compact('Mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($platnomer)
    {
        $kendaraan = HistoryKendaraan::find($platnomer);
        return view('HistoryKendaraan.edit', compact('kendaraan'));
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
        HistoryKendaraan::find($platnomer)->update($request->all());
        return redirect()->route('HistoryKendaraan.index')
            ->with('success', 'History Kendaraan Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($platnomer)
    {
        HistoryKendaraan::find($platnomer)->delete();
        return redirect()->route('HistoryKendaraan.index')
            ->with('success', 'History Kendaraan Berhasil Dihapus');
    }
}
