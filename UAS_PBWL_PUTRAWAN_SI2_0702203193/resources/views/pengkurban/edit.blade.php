@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Edit Data Pengkurban</h3>
        <form action="{{ url('/pengkurban/' . $row->id_pengkurban) }}" method="POST">
            @method('PATCH')
            @csrf
            
            <div class="mb-3">
                <label>KODE</label>
                <input type="text" class="form-control"name="nama_pengkurban" value="{{ $row->nama_pengkurban }}"></>
            </div>
            <div class="mb-3">
                <label>NAMA</label>
                <input type="text" class="form-control"name="alamat_pengkurban" value="{{ $row->alamat_pengkurban }}"></>
            </div>
            <div class="mb-3">
                <input type="submit" value="UPDATE" class="btn btn-primary">
            </div>
        </form>
    </div>

@endsection