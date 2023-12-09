@extends('layouts.admin')


@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3>
            Daftar Menu
        </h3>
        <a href="{{ route('nasikotak.create')}}" class="btn btn-primary">Tambah Data</a>
    </div>
    <div class="card-body">
        <div class="table-respons">
            <table class="table table-border">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Menu</th>
                        <th>Gambar Produk</th>
                        <th>Harga</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                @forelse ($nasikotaks as $nasikotak)
    <tr>
        <td>
            {{ $loop->iteration }}
        </td>
        <td>
            {{ $nasikotak->nama_nasi }}
        </td>
        <td>
            <img src="{{ Storage::url($nasikotak->gambar) }}" width="200" alt="">
        </td>
        <td>{{ $nasikotak->harga_nasi }}</td>
        <td>{{ $nasikotak->status }}</td>
        <td>
            <a href="{{ route('nasikotaks.edit', $nasikotak->id) }}" class="btn btn-sm btn-warning">Edit</a>
            <form onclick="return confirm ('anda yakin ingin menghapus data?') " class="d-inline" action="{{ route('nasikotaks.destroy', $nasikotak->id) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>

    </tr>
    @empty 
    <tr>
        <td colspan="6" class="text-center">Data Kosong</td>
    </tr>
    @endforelse

                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection