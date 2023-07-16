@extends ('layouts.app')

@section('content')

<div class="container">
    <h2>Tambah Data Penerima</h2>

    <form action="{{ url('/penerima') }}" method="post">
        @csrf
        <div class="mb-3">
            <label>NAMA</label>
            <input type="text" name="nama_penerima" class="form-control">
        </div>
        <div class="mb-3">
            <label>ALAMAT</label>
            <input type="text" name="alamat_penerima" class="form-control">
        </div>
        <div class="mb-3">
            <label>JENIS KURBAN</label>
            <input type="text" name="jenis_kurban" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" value="SIMPAN" class="btn btn-success">
        </div>
    </form>
</div>
@endsection