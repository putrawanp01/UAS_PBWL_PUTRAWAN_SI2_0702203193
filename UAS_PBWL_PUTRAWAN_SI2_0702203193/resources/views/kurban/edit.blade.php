@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Edit Data Kurban</h3>
        <form action="{{ url('/kurban/' . $row->id_kurban) }}" method="POST">
            @method('PATCH')
            @csrf
            
            <div class="mb-3">
                <label>JENIS KURBAN</label>
                <input type="text" class="form-control"name="jenis_kurban" value="{{ $row->jenis_kurban }}"></>
            </div>
            <div class="mb-3">
                <label>GOLONGAN</label>
                <input type="text" class="form-control"name="pilihan_kurban" value="{{ $row->pilihan_kurban }}"></>
            </div>
            <div class="mb-3">
                <input type="submit" value="UPDATE" class="btn btn-primary">
            </div>
        </form>
    </div>

@endsection