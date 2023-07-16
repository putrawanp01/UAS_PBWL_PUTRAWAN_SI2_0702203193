@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Edit Data Penerima</h3>
        <form action="{{ url('/penerima/' . $row->id_penerima) }}" method="POST">
            @method('PATCH')
            @csrf
            
            <div class="mb-3">
                <label>NAMA</label>
                <input type="text" class="form-control"name="nama_penerima" value="{{ $row->nama_penerima }}"></>
            </div>
            <div class="mb-3">
                <label>ALAMAT</label>
                <input type="text" class="form-control"name="alamat_penerima" value="{{ $row->alamat_penerima }}"></>
            </div>
            <div class="mb-3">
                <label>JENIS KURBAN</label>
                <input type="text" class="form-control"name="jenis_kurban" value="{{ $row->jenis_kurban }}"></>
            </div>
            <div class="mb-3">
                <input type="submit" value="UPDATE" class="btn btn-primary">
            </div>
        </form>
    </div>

@endsection