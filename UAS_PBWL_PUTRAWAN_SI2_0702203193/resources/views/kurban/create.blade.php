@extends ('layouts.app')

@section('content')

<div class="container">
    
    <h2>Tambah Data Kurban</h2>

    <form action="{{ url('/kurban') }}" method="post">
        @csrf
        <div class="mb-3">
            <label>SOHIBUL KURBAN</label>
            <select class="form-control" name="kurban_id_pengkurban" id="">
                @foreach ($rows['data_pengkurban'] as $row)
                <option value="{{ $row->id_pengkurban }}">{{ $row->nama_pengkurban }}</option>\
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>JENIS KURBAN</label>
            <input type="text" name="jenis_kurban" class="form-control">
        </div>
        <div class="mb-3">
            <label>GOLONGAN</label>
            <input type="text" name="pilihan_kurban" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" value="SIMPAN" class="btn btn-success">
        </div>
    </form>
</div>
@endsection