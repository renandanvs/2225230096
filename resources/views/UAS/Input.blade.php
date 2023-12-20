@extends('layout/rena')
@section('content')

<center>
<form class="nanda" method="POST" action="/UAS">
    @csrf
    <h1 class="rena">Data Kehadiran MusMa</h1>
    <div class="mb-3">
        <label for="Nama" class="form-label">Nama:</label>
        <input type="text" id="Nama" name="Nama" class="form-control" placeholder="Nama" value="{{Session::get('Nama')}}">
    </div> 
    <div class="mb-3">
        <label for="NIM" class="form-label">NIM:</label>
        <input type="numeric" id="NIM" name="NIM" class="form-control" placeholder="NIM" value="{{Session::get('NIM')}}">
    </div> 
    <div class="mb-3">
        <label for="Kelas" class="form-label">Kelas:</label>
        <input type="text" id="Kelas" name="Kelas" class="form-control" placeholder="Kelas" value="{{Session::get('Kelas')}}">
    </div> 
    <div class="mb-3">
        <label for="Angkatan" class="form-label">Angkatan:</label>
        <input type="numeric" id="Angkatan" name="Angkatan" class="form-control" placeholder="Angkatan" value="{{Session::get('Angkatan')}}">
    </div> 
    <div class="mb-3">
        <input type="submit" name="reg" class="btn" value="SUBMIT">
    </div> 
</form>
</center>
@endsection