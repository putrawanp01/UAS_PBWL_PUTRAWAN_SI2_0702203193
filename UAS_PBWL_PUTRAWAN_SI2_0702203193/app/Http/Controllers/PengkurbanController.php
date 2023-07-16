<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengkurban;


class PengkurbanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Pengkurban::all();
        return view('pengkurban.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengkurban.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pengkurban::create([
            'nama_pengkurban' => $request->nama_pengkurban,
            'alamat_pengkurban' => $request->alamat_pengkurban
        ]);

        return redirect('pengkurban');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $row = Pengkurban::findOrFail($id);
        return view('pengkurban.edit', compact('row'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'nama_pengkurban'=>'bail|required',
                'alamat_pengkurban'=>'required'

            ],
            [
                'nama_pengkurban.required'=>'nama wajib diisi',
                'alamat_pengkurban.required'=>'alamat wajib diisi'
            ]
            );

            $row = Pengkurban::findOrFail($id);
            $row->update([
                'nama_pengkurban'=>$request->nama_pengkurban,
                'alamat_pengkurban'=>$request->alamat_pengkurban
            ]);

            return redirect('pengkurban');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Pengkurban::findOrFail($id);
        $row->delete();

        return redirect('pengkurban');
    }
}
