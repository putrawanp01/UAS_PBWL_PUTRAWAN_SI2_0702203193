<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penerima;

class PenerimaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Penerima::all();
        return view('penerima.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penerima.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Penerima::create([
            'nama_penerima' => $request->nama_penerima,
            'alamat_penerima' => $request->alamat_penerima,
            'jenis_kurban' => $request->jenis_kurban
        ]);

        return redirect('penerima');
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
        $row = Penerima::findOrFail($id);
        return view('penerima.edit', compact('row'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'nama_penerima'=>'bail|required',
                'alamat_penerima'=>'required',
                'jenis_kurban'=>'required'

            ],
            [
                'nama_penerima.required'=>'nama wajib diisi',
                'alamat_penerima.required'=>'alamat wajib diisi',
                'jenis_kurban.required'=>'jenis wajib diisi'
            ]
            );

            $row = Penerima::findOrFail($id);
            $row->update([
                'nama_penerima'=>$request->nama_penerima,
                'alamat_penerima'=>$request->alamat_penerima,
                'jenis_kurban'=>$request->jenis_kurban
            ]);

            return redirect('penerima');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Penerima::findOrFail($id);
        $row->delete();

        return redirect('penerima');
    }
}
