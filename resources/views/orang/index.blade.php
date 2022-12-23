@extends('orang.layout')

@section('content')
<div class="row mt-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-start">
            <h2>CRUD</h2>
        </div>
        <div class="float-end">
            <a class="btn btn-success"
               href="{{ route('orang.create') }}"> Tambah Orang</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Tgl Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Hobi</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($orang as $item)
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->tgl_lahir }}</td>
        <td>
            @if ($item->jk == 1 )
            Perempuan
            @else
            Laki Laki
            @endif
        </td>
        <td>{{ $item->alamat }}</td>
        <td>
            {{-- @php $hobies = $item->hobi ? $item->hobi : []; @endphp
            @foreach($hobies as $item)
            {{$item}},
            @endforeach --}}
            {{ $item->hobi }}
        </td>
        <td class="text-center">
            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                  action="{{ route('orang.destroy', $item->id) }}"
                  method="POST">
                <a href="{{ route('orang.edit', $item->id) }}"
                   class="btn btn-sm btn-primary">EDIT</a>
                @csrf
                @method('DELETE')
                <button type="submit"
                        class="btn btn-sm btn-danger">HAPUS</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection