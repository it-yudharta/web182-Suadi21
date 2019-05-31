<!DOCTYPE html>
<html>
    <head>
      <title></title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
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
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama Anda">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kelas</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="kelas">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jurusan</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jurusan">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Peminjaman Alat</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Alat yang mau dipinjam">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Waktu Pinjam</label>
                        <select multiple class="form-control" id="exampleFormControlSelect2">
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
                        <select multiple class="form-control" id="exampleFormControlSelect2">
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
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
                    
                    
                    
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            </div>
        </div>
        </div>
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>
