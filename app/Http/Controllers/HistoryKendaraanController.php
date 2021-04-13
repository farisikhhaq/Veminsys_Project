<?php

namespace App\Http\Controllers;
use App\Models\HistoryKendaraan;
use Illuminate\Http\Request;

class HistoryKendaraanController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->get('keyword');
        $HistoryKendaraan = HistoryKendaraan::all();

        if($keyword){
            $HistoryKendaraan = HistoryKendaraan::where("jenis","LIKE", "%$keyword%")->get();
            $posts = HistoryKendaraan::orderBy('id_kendaraan', 'desc')->paginate(3); 
        }
        
        $posts = HistoryKendaraan::orderBy('id', 'desc')->paginate(3); 
        return view('HistoryKendaraan.index', compact('HistoryKendaraan','posts','keyword'));
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
            'jenis_kendaraan' => 'required',
            'laka_kecelakaan' => 'required',
            'pelanggaran' => 'required',
            'tanggal_kejadian' => 'required',
            'tempat_kejadian' => 'required',
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
        $HistoryKendaraan = HistoryKendaraan::find($platnomer);
        return view('HistoryKendaraan.detail', compact('HistoryKendaraan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($platnomer)
    {
        $HistoryKendaraan = HistoryKendaraan::find($platnomer);
        return view('HistoryKendaraan.edit', compact('HistoryKendaraan'));
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
            'jenis_kendaraan' => 'required',
            'laka_kecelakaan' => 'required',
            'pelanggaran' => 'required',
            'tanggal_kejadian' => 'required',
            'tempat_kejadian' => 'required',
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
