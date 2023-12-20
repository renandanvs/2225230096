@extends('layout/rena')
@section('content')
<center>
<a href='/' class="tambah">Tambah Data Kehadiran MusMa</a>
<table class=table border="2" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>Nama:</th>
            <th>NIM:</th>
            <th>Kelas:</th>
            <th>Angkatan:</th>
            <th>Aksi:</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $uas)
        <tr>
            <td>{{$uas->Nama}}</td>
            <td>{{$uas->NIM}}</td>
            <td>{{$uas->Kelas}}</td>
            <td>{{$uas->Angkatan}}</td>
            <td>
                <a class='btn btn-warning btn-sm' href="{{url('/UAS/'. $uas->Nama.'/edit')}}">Edit</a> 
                <form onsubmit="return confirm('Yakin?')" class="d-inline" action="{{'/UAS/'. $uas->Nama}}" method="post">
                    @csrf @method('DELETE') 
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</center>
@endsection