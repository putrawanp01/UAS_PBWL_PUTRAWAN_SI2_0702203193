@extends ('layouts.app')

@section('content')
<div class="container">
    <h2 style="text-align: center; align-items: center; font-family:serif;">Kurban</h2>
    <a href="{{ url('/kurban/create') }}"><button class="btn-sm mb-3" style="box-shadow: 12px 12px 5px rgba(0, 0, 255, .2);" >Tambah Kurban</button></a>
    <table class="table table-bordered border-success" style="box-shadow: 12px 12px 5px rgba(0, 0, 255, .2);">
        <tr style="text-align:center;">
            <th>ID</th>
            <th>SOHIBUL KURBAN</th>
            <th>JENIS KURBAN</th>
            <th>GOLONGAN</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        @foreach ($kurban as $row)
        <tr>
            <td>{{ $row->id_kurban }}</td> 
            <td>{{ $row->nama_pengkurban }}</td>
            <td>{{ $row->jenis_kurban }}</td>
            <td>{{ $row->pilihan_kurban }}</td>
            <td><a href="{{ url('kurban/' . $row->id_kurban . '/edit') }}"><button>Edit</button></a></td>
                <td>
                    <form action="{{ url('kurban/' . $row->id_kurban) }}" method="POST">
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