@extends('layouts.master')

@section('content')
<div class="container">
            @if(session('sukses'))
            <div class="alert alert-success" role="alert">
             {{session('sukses')}}
            </div>
            @endif
    <div class="container">
    <div class="row">
    <div class="col-6">
    <h1>Data Peminjaman Alat</h1>
    </div>
    <div class="col-6">
            <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
        Klik Untuk Meminjam
        </button>        
    </div>

<table class="table table-hover">
    <tr>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>Alat</th>
        <th>Jam Pinjam</th>
        <th>Jam Kembali</th>
        <th>Keterangan</th>
    </tr>
    @foreach($data_siswa as $siswa)
    <tr>
        <td>{{$siswa->nama}}</td>
        <td>{{$siswa->kelas}}</td>
        <td>{{$siswa->jurusan}}</td>
        <td>{{$siswa->nama_alat}}</td>
        <td>{{$siswa->jam_pinjam}}</td>
        <td>{{$siswa->jam_kembali}}</td>
        <td>{{$siswa->keterangan}}</td>
        <td>
        <a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
        <a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Data Mau Dihapus ?')">Delete</a>
        </td>
    </tr>
    @endforeach
    </table>

    </div>
    </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Peminjaman Alat Multimedia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="siswa/create" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama Anda">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kelas</label>
                        <input name="kelas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="kelas">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jurusan</label>
                        <input name="jurusan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jurusan">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Peminjaman Alat</label>
                        <input name="nama_alat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Alat yang mau dipinjam">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Waktu Pinjam</label>
                        <select name="jam_pinjam" multiple class="form-control" id="exampleFormControlSelect2">
                        <option>Jam Pertama</option>
                        <option>Jam Kedua</option>
                        <option>Jam Ketiga</option>
                        <option>Jam Keempat</option>
                        <option>Jam Kelima</option>
                        <option>Jam Keenam</option>
                        <option>Jam Ketuju</option>
                        <option>Jam Kedelapan</option>
                        <option>Jam Kesembilan</option>
                        <option>Jam Kesepuluh</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Waktu Kembali</label>
                        <select name="jam_kembali" multiple class="form-control" id="exampleFormControlSelect2">
                        <option>Jam Pertama</option>
                        <option>Jam Kedua</option>
                        <option>Jam Ketiga</option>
                        <option>Jam Keempat</option>
                        <option>Jam Kelima</option>
                        <option>Jam Keenam</option>
                        <option>Jam Ketuju</option>
                        <option>Jam Kedelapan</option>
                        <option>Jam Kesembilan</option>
                        <option>Jam Kesepuluh</option>
                        </select>
                    </div>
                    <div class="form-group">
    <label for="exampleFormControlTextarea1">Keterangan</label>
    <textarea name="keterangan" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
                    
                    
                    
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary onclick="return confirm('Data Berhasil di simpan')">Submit</button>
                </form>
            </div>
            </div>
        </div>
        </div>
        @endsection
