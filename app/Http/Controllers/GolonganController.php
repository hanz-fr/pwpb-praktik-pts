<?php

namespace App\Http\Controllers;

use App\Models\Golongan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;


class GolonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $golongan = DB::table('golongan');
        
        if(request('search')) {
            $golongan->where('nama_golongan', 'like', '%' . request('search') . '%')
            ->orWhere('id', 'like', '%' . request('search') . '%');
        }

        return view('golongan.index', [
            'title' => 'Golongan',
            'active' => 'golongan',
            'golongan' => $golongan->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('golongan.create', [
            'title' => 'Create Golongan',
            'active' => 'golongan'
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
            'id' => 'required|max:11|unique:golongan',
            'nama_golongan' => 'required|max:100',
        ]);

        DB::table('golongan')->insert($validatedData);

        return redirect('/golongan')->with('success', 'Data successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $golongan = DB::table('golongan')->find($id);

        return view('golongan.detail', [
            'title' => 'Golongan Detail',
            'active' => 'golongan',
            'golongan' => $golongan
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
        $golongan = DB::table('golongan')->find($id);

        return view('golongan.update', [
            'title' => 'Edit Golongan',
            'active' => 'golongan',
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
    public function update(Request $request, Golongan $golongan)
    {
        $rules = [
            'nama_golongan' => 'required|max:100',
        ];

        $validatedData = $request->validate($rules);

        Golongan::where('id', $request->id)->update($validatedData);
        
        return redirect('/golongan')->with('success', 'Golongan updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Golongan::destroy($id);

        return redirect('/golongan')->with('success', 'Golongan deleted successfully.');
    }
}
