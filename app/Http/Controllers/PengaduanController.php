<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->role == "masyarakat") {
            $pengaduans = Pengaduan::where('nik', '=', Auth::user()->nik)->get();
        } else {
            $pengaduans = Pengaduan::all();
        }


        return view('pengaduan.index', compact('pengaduans'));
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

        $validateData = $request->validate([
            'nik' => 'required',
            'name' => 'required',
            'email' => 'required',
            'isi_pengaduan' => 'required',
            'foto' => 'required|file|image|mimes:png,jpg',
        ]);

        $extFile = $request->foto->getClientOriginalExtension();
        $nama_file = 'Bukti-' . $request->nik . '-' . time() . '.' . $extFile;

        $request->foto->storeAs('public/uploads', $nama_file);

        //membuat user baru
        $user = User::where('nik', '=', $request->nik)->count();

        if ($user == 0) {

            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'nik' => $request->nik,
                'password' => Hash::make($request->nik),
                'role' => 'masyarakat',
            ]);
        }

        Pengaduan::create([
            'nik' => $request->nik,
            'isi_pengaduan' => $request->isi_pengaduan,
            'foto' => $nama_file,
            'status' => '0',
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function show(Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengaduan $pengaduan)
    {
        //
    }

    public function status(Request $request, $pengaduan_id)
    {
        $pengaduan = Pengaduan::whereId($pengaduan_id)->first();


        $pengaduan->update([
            'status' => $request->status,
        ]);

        return redirect('pengaduan');
    }
}
