<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai = DB::table('pegawai')->get();

        return view('pegawai.index', [
            'title' => 'Pegawai',
            'active' => 'pegawai',
            'pegawai' => $pegawai,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pegawai.create', [
            'title' => 'Create Pegawai',
            'active' => 'pegawai',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nip' => 'required|max:12',
            'nik' => 'required|max:12',
            'nama' => 'required|max:100',
            'golongan_id' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required|max:100',
            'tanggal_lahir' => 'required|date',
            'telpon' => 'required|max:12',
            'agama' => 'required|max:15',
            'status_nikah' => 'required',
            'alamat' => 'required',
        ]);

        DB::table('pegawai')->insert($validatedData);

        return redirect('/pegawai')->with('success', 'Data successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pegawai = DB::table('pegawai')->where('id', $id)->get();

        return view('pegawai.detail', [
            'title' => 'Pegawai Detail',
            'active' => 'pegawai',
            'pegawai' => $pegawai
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
