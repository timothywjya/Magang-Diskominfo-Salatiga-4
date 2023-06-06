<?php

namespace App\Http\Controllers;

use App\Models\Gor;
use App\Models\Arena;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Mail\Email;
use App\Mail\EmailNotificationsStatus;
use Illuminate\Support\Facades\Mail;


class MasyarakatArenaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($kode_gor = '')
    {
        if ($kode_gor) {
            $gor = Gor::where('id', $kode_gor)->first();
            if ($gor) {
                $arena = Arena::where('kode_gor', $kode_gor)->get();
                return view('masyarakat.list')->with('nama_gor', $gor->nama_gor)->with('arena', $arena)->with('id', $gor->id);
            } else {
                return abort(403, 'GOR Tidak Ada');
            }
        } else {
            $arena = Arena::all();
            return view('masyarakat.list')->with('nama_gor', 'Semua Arena')->with('arena', $arena);
        }
    }

    public function pinjam($id)
    {
        $arena = Arena::find($id);
        if (!$arena) return redirect()->route('masyarakat.list')
            ->with('error_message', 'Arena dengan id ' . $id . ' tidak ditemukan');
        return view('masyarakat.pinjam', [
            'arena' => $arena
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
        //
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
        //
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

    public function detail(Request $request)
    {
        $id = $request->id;
        $arena = Arena::find($id);
        return view('masyarakat.pinjam', compact('arena'));
    }

    public function simpanpinjaman(Request $request)
    {
        $arena = Arena::find($request->arena_id);
        $dari = $request->waktu_awal;
        $sudah_dipinjam = false;
        foreach ($arena->Peminjaman as $pinjam) {
            $awal = Carbon::parse($pinjam->waktu_awal);
            $akhir = Carbon::parse($pinjam->waktu_akhir);
            $sudah_dipinjam = Carbon::parse($dari)->between($awal, $akhir);
        }

        if ($sudah_dipinjam)
            return redirect(route('detail', ['id' => $request->arena_id]))->withInput($request->input())
                ->with('error', 'Maaf ruangan tersebut telah dipesan pada waktu dan tanggal tersebut, silahkan pilih waktu dan tanggal lain.');

        $pinjam = Peminjaman::insert([
            'nama_peminjam' => $request->nama_peminjam,
            'keperluan' => $request->keperluan,
            'no_hp' => $request->no_hp,
            'waktu_awal' => $request->waktu_awal,
            'waktu_akhir' => $request->waktu_akhir,
            'gor_dipinjam_id' => $request->gor_dipinjam_id,
            'user_peminjam_id' => $request->user_peminjam_id,
            'arena_id' => $request->arena_id
        ]);
        // Mail::to($request->user_gmail)->send(new Email);
        return redirect(route('detail', ['id' => $request->arena_id]))->with('success', 'Request anda sedang diproses');
    }

}
