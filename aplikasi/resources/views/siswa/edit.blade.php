@extends('layouts.master')

@section('content')
        <h1>Edit Data Peminjam</h1>
            @if(session('sukses'))
            <div class="alert alert-success" role="alert">
             {{session('sukses')}}
            </div>
            @endif
            <div class="row">
                <div class="col-lg-12">
            <form action="/siswa/{{$siswa->id}}/update" method="POST">
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
                            <button type="submit" class="btn btn-warning">Update</button>
                         </form>
                         </div>
                    </div>
@endsection