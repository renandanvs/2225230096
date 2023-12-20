@extends('layout/rena')
@section('content')
<center>
<h1>Edit Data Kehadiran MusMa</h1>
<form method="POST" action="{{'/UAS', $data->Nama}}">
    @csrf
    <div class="mb-3">
        <label for="Nama" class="form-label">Nama:</label>
        <input type="text" id="Nama" name="Nama" class="form-control" placeholder="Nama" value="{{$data->Nama}}">
    </div> 
    <div class="mb-3">
        <label for="NIM" class="form-label">NIM:</label>
        <input type="numeric" id="NIM" name="NIM" class="form-control" placeholder="NIM" value="{{$data->NIM}}">
    </div> 
    <div class="mb-3">
        <label for="Kelas" class="form-label">Kelas:</label>
        <input type="text" id="Kelas" name="Kelas" class="form-control" placeholder="Kelas" value="{{$data->Kelas}}">
    </div> 
    <div class="mb-3">
        <label for="Angkatan" class="form-label">Angkatan:</label>
        <input type="numeric" id="Angkatan" name="Angkatan" class="form-control" placeholder="Angkatan" value="{{$data->Angkatan}}">
    </div> 
    <div class="mb-3">
        <a class="btn btn-secondary" href="/UAS">Edit</a>
        <a class="btn btn-secondary" href="/UAS">Kembali</a>
    </div> 
</form>
</center>
@endsection