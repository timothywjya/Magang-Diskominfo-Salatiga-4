<?php

namespace App\Http\Controllers;

use App\Models\Gor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gor = Gor::all();
        return view('gor.index', [
            'gor' => $gor
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gor.create');
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
            'nama_gor' => 'required',
            'jumlah_tempat' => 'required',
            'alamat_gedung' => 'required',
            'spesifikasi_gedung' => 'required',
            'fungsi_gedung' => 'required',
            'foto_gedung' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:10000',
        ]);
        $foto_gedung = $request->file('foto_gedung');
        $nama_foto = $request->nama_gor.$request->alamat_gedung.".jpg";
        $foto_gedung->move(storage_path('app/public/foto'),$nama_foto);
        $request->file('foto_gedung')->getClientOriginalName();
        Gor::create([
            'nama_gor'=> $request->nama_gor,
            'jumlah_tempat'=> $request->jumlah_tempat,
            'alamat_gedung'=> $request->alamat_gedung,
            'spesifikasi_gedung'=> $request->spesifikasi_gedung,
            'fungsi_gedung' => $request->fungsi_gedung,
            'foto_gedung' => $nama_foto
        ]);
        return redirect()->route('gor.index')
            ->with('success_message', 'Berhasil menambah GOR baru');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gor = Gor::findOrFail($id);
        if (!$gor) return redirect()->route('gor.index')
            ->with('error_message', 'Gor dengan id'.$id.' tidak ditemukan');

        return view('gor.info', compact('gor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gor = Gor::find($id);
        if (!$gor) return redirect()->route('gor.index')
            ->with('error_message', 'GOR dengan id'.$id.' tidak ditemukan');
        return view('gor.edit', [
            'gor' => $gor
        ]);
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

        $gor = Gor::find($id);
        $gor->nama_gor = $request->nama_gor;
        $gor->jumlah_tempat = $request->jumlah_tempat;
        $gor->alamat_gedung = $request->alamat_gedung;
        $gor->spesifikasi_gedung = $request->spesifikasi_gedung;
        $gor->fungsi_gedung = $request->fungsi_gedung;
        $gor->save();
        return redirect()->route('gor.index')
            ->with('success_message', 'Berhasil mengubah GOR');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gor = Gor::find($id);
        if ($gor) $gor->delete();
        return redirect()->route('gor.index')
            ->with('success_message', 'Berhasil menghapus GOR');
    }

    public function download($foto_gedung)
    {
        $gor = Gor::where('foto_gedung', $foto_gedung)->firstOrFail();
        $pathToFile = storage_path('app/public/foto/'. $gor->foto_gedung);
        return response()->download($pathToFile);
    }
}
