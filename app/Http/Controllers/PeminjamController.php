<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailNotifications;
use App\Mail\EmailNotificationsStatus;

class PeminjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjaman = Peminjaman::where('user_peminjam_id', Auth::User()->id)->get();
        return view('masyarakat.Peminjaman', [
            'peminjaman' => $peminjaman
        ]);
    }

    public function indexadmin()
    {
        $data = Peminjaman::all();
        return view('request.index', [
            'data' => $data
        ]);
    }
    public function proses($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        if (!$peminjaman) return redirect()->route('request.index')
            ->with('error_message', 'Peminjaman dengan id'.$id.' tidak ditemukan');

        return view('request.proses', compact('peminjaman'));
    }

    public function konfirmasistore(Request $request, $id)
    {
        Peminjaman::find($id)->update([
            'status' => $request->status
        ]);
        // Mail::to($request->user_gmail)->send(new EmailNotificationsStatus);
        $request->session()->flash('message1');
        return redirect()->route('indexadmin')
            ->with('success_message', 'Berhasil mengubah data');
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
}
