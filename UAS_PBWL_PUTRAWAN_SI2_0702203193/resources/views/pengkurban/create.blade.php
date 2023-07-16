@extends ('layouts.app')

@section('content')

<div class="container">
    <h2>Tambah Data Pengkurban</h2>

    <form action="{{ url('/pengkurban') }}" method="post">
        @csrf
        <div class="mb-3">
            <label>NAMA</label>
            <input type="text" name="nama_pengkurban" class="form-control">
        </div>
        <div class="mb-3">
            <label>ALAMAT</label>
            <input type="text" name="alamat_pengkurban" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" value="SIMPAN" class="btn btn-success">
        </div>
    </form>
</div>
@endsection