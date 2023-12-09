@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        Form Tambah Data
    </div>
    <div class="card-body">
        <form action="{{  route('nasikotaks.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama_nasi">
                    Nama Nasi
                </label>
                <input type="text" name="nama_nasi" class="form-control" value="{{ old('nama_nasi') }}"> 
            </div>
            <div class="form-group">
                <label for="harga_nasi">
                    Harga Nasi
                </label>
                <input type="text" name="harga_nasi" class="form-control" value="{{ old('harga_nasi') }}"> 
            </div>
            <div class="form-group">
                <label for="spesial">
                    Spesial
                </label>
                <input type="text" name="spesial" class="form-control" value="{{ old('spesial') }}"> 
            </div>
            <div class="form-group">
                <label for="jumlah_porsi">
                Jumlah porsi
                </label>
                <input type="text" name="jumlah_porsi" class="form-control" value="{{ old('jumlah_porsi') }}" > 
            </div>
            <div class="form-group">
                <label for="ongkir">
                    Ongkir
                </label>
                <input type="text" name="ongkir" class="form-control" value="{{ old('ongkir') }}"> 
            </div>
            <div class="form-group">
                <label for="status">status</label>
                <select name="status" id="status" class="form-control">
                <option value="Tersedia">Tersedia</option>
                <option value="Kosong">Kosong</option>
                </select>

            </div>

            <div class="form-group">
                <label for="deskripsi">
                    Deskripsi
                </label>
                <textarea  name="deskripsi" id="" cols="30" rows="5" class="form-control" >  </textarea>
            </div>

            <div class="form-group">
                <label for="extra_minum">extra_minum</label>
                <select name="extra_minum" id="extra_minum" class="form-control">
                <option value="1">extra_minum</option>
                <option value="0">Tidak extra_minum</option>
                </select>

            </div>

            <div class="form-group">
                <label for="extra_sendok">extra_sendok</label>
                <select name="extra_sendok" id="extra_sendok" class="form-control">
                <option value="1">extra_sendok</option>
                <option value="0">Tidak extra_sendok</option>
                </select>

            </div>

            <div class="form-group">
                <label for="gambar">gambar</label>
                <input type="file" class="form-control" name="gambar">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>

        </form>
    </div>
</div>

@endsection