<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
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
        $pegawai = Pegawai::latest();

        if(request('search')) {
            $pegawai->where('nama', 'like', '%' . request('search') . '%')
            ->orWhere('nik', 'like', '%' . request('search') . '%')
            ->orWhere('nip', 'like', '%' . request('search') . '%')
            ->orWhere('jenis_kelamin', 'like', '%' . request('search') . '%')
            ->orWhere('status_nikah', 'like', '%' . request('search') . '%')
            ->orWhere('golongan_id', 'like', '%' . request('search') . '%')
            ->orWhere('agama', 'like', '%' . request('search') . '%');
        }


        return view('pegawai.index', [
            'title' => 'Pegawai',
            'active' => 'pegawai',
            'pegawai' => $pegawai->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $golongan = DB::table('golongan')->get();

        return view('pegawai.create', [
            'title' => 'Create Pegawai',
            'active' => 'pegawai',
            'golongan' => $golongan
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
            'tanggal_lahir' => 'required',
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
        $pegawai = DB::table('pegawai')->find($id);

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
        $pegawai = DB::table('pegawai')->find($id);

        $golongan = DB::table('golongan')->get();

        return view('pegawai.update', [
            'title' => 'Edit Pegawai',
            'active' => 'pegawai',
            'pegawai' => $pegawai,
            'golongan' => $golongan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        $rules = [
            'golongan_id' => 'required',
            'nama' => 'required|max:100',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required|max:100',
            'tanggal_lahir' => 'required',
            'telpon' => 'required|max:12',
            'agama' => 'required|max:15',
            'status_nikah' => 'required',
            'alamat' => 'required',
        ];

        if($request->nik != $pegawai->nik) {
            $rules['nik'] = 'required|max:12';
        }

        if($request->nip != $pegawai->nip) {
            $rules['nip'] = 'required|max:12';
        }

        $validatedData = $request->validate($rules);

        Pegawai::where('id', $pegawai->id)->update($validatedData);

        return redirect('/pegawai')->with('success', 'Pegawai updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pegawai::destroy($id);

        return redirect('/pegawai')->with('success', 'Pegawai deleted successfully.');
    }


    public function kepegawaian()
    {
        $pegawai = Pegawai::latest();

        if(request('search')) {
            $pegawai->where('nama', 'like', '%' . request('search') . '%')
            ->orWhere('nik', 'like', '%' . request('search') . '%')
            ->orWhere('nip', 'like', '%' . request('search') . '%')
            ->orWhere('jenis_kelamin', 'like', '%' . request('search') . '%')
            ->orWhere('golongan_id', 'like', '%' . request('search') . '%');
        }


        return view('kepegawaian.index', [
            'title' => 'Kepegawaian',
            'active' => 'kepegawaian',
            'pegawai' => $pegawai->get()
        ]);
    }
}
