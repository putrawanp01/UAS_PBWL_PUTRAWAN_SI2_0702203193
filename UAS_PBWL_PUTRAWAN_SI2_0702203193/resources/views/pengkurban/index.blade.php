@extends ('layouts.app')

@section('content')
<div class="container">
    <h2 style="text-align: center; align-items: center; font-family:serif;">Pengkurban</h2>
    <a href="{{ url('/pengkurban/create') }}"><button class="btn-sm mb-3" style="box-shadow: 12px 12px 5px rgba(0, 0, 255, .2);" >Tambah Pengkurban</button></a>
    <table class="table table-bordered border-success" style="box-shadow: 12px 12px 5px rgba(0, 0, 255, .2); border: solid 2px black;">
        <tr style="text-align:center;">
            <th>ID</th>
            <th>SOHIBUL KURBAN</th>
            <th>ALAMAT</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        @foreach ($rows as $row)
        <tr>
            <td>{{ $row->id_pengkurban }}</td>
            <td>{{ $row->nama_pengkurban }}</td>
            <td>{{ $row->alamat_pengkurban }}</td>
            <td><a href="{{ url('pengkurban/' . $row->id_pengkurban . '/edit') }}"><button>Edit</button></a></td>
                <td>
                    <form action="{{ url('pengkurban/' . $row->id_pengkurban) }}" method="POST">
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