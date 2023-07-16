<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kurban;
use App\Models\Pengkurban;


class KurbanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct() {
        $this->Kurban = new Kurban();
    }

    public function index()
    {

        $data = [
            'kurban' => $this->Kurban->alldata(),
        ];
        return view('kurban.index', $data); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rows['data_pengkurban'] = Pengkurban::all();
        return view('kurban.create', compact('rows'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Kurban::create([
            'kurban_id_pengkurban' => $request->kurban_id_pengkurban,
            'jenis_kurban' => $request->jenis_kurban,
            'pilihan_kurban' => $request->pilihan_kurban
        ]);

        return redirect('kurban');
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
    public function edit(string $id)
    {
        $row = Kurban::findOrFail($id);
        return view('kurban.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'jenis_kurban'=>'bail|required',
                'pilihan_kurban'=>'required',

            ],
            [
                'jenis_kurban.required'=>'no wajib diisi',
                'pilihan_kurban.required'=>'nama wajib diisi'
            ]
            );

            $row = Kurban::findOrFail($id);
            $row->update([
                'jenis_kurban'=>$request->jenis_kurban,
                'pilihan_kurban'=>$request->pilihan_kurban
            ]);

            return redirect('kurban');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Kurban::findOrFail($id);
        $row->delete();

        return redirect('kurban');
    }
}
