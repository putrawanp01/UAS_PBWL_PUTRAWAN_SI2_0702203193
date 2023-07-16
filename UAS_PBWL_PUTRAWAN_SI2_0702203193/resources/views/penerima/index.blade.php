@extends ('layouts.app')

@section('content')
<div class="container">
    <h2 style="text-align: center; align-items: center; font-family:serif;">Penerima</h2>
    <a href="{{ url('/penerima/create') }}"><button class="btn-sm mb-3" style="box-shadow: 12px 12px 5px rgba(0, 0, 255, .2);" >Tambah Penerima</button></a>
    <table class="table table-bordered border-success" style="box-shadow: 12px 12px 5px rgba(0, 0, 255, .2); border: solid 2px black;">
        <tr style="text-align:center;">
            <th>ID</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>JENIS KURBAN</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        @foreach ($rows as $row)
        <tr>
            <td>{{ $row->id_penerima }}</td>
            <td>{{ $row->nama_penerima}}</td>
            <td>{{ $row->alamat_penerima }}</td>
            <td>{{ $row->jenis_kurban }}</td>
            <td><a href="{{ url('penerima/' . $row->id_penerima . '/edit') }}"><button>Edit</button></a></td>
                <td>
                    <form action="{{ url('penerima/' . $row->id_penerima) }}" method="POST">
                        @method('DELETE')
                        @csrf 
                        <button onclick="return confirm('Apakah anda yakin?')">Delete</button>
                    </form>
                </td>
        </tr> 
        @endforeach
    </table>
</div>
@endsection