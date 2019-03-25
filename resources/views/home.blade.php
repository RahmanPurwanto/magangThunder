@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Selamat Datang Bos</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Apa yang ada inginkan ?!

                </div>


                <div class="card mt-5">
                <div class="card-body">
                  <h3 class="text-center"><a href="https://www.malasngoding.com">Thunderlabs</a></h3>
                  <h5 class="text-center my-4">Kabar berita hari ini</h5>
                  <table class="table table-bordered table-striped">
                    @section('crud')
                    <thead>
                      &nbsp;&nbsp;&nbsp;
                      <a href="/Berita/tambah" class="btn btn-primary">Tambah Berita Baru</a>
                      <br>
                      </br>
                      <tr>
                        <th width="20%">Judul Berita</th>
                        <th width="15%">Penulis</th>
                        <th width="15%">Tanggal</th>
                        <th>Isi berita</th>
                        <th width="25%">Pilihan</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($berita as $a)
                      <tr>
                        <td>{{ $a->judul_berita }}</td>
                        <td>{{ $a->penulis_berita }}</td>
                          <td>{{ $a->tanggal_berita }}</td>
                          <td>{{ $a->isi_berita }}</td>
                        <td>
                          <a href="/Berita/edit/{{ $a->id_berita }}" class="btn btn-warning">Edit</a>
                          <a href="/Berita/hapus/{{ $a->id_berita }}" class="btn btn-danger">Hapus</a>

                        </td>
                      </tr>
                      @endforeach
                    </tbody>

                  </table>

                </div>
                @endsection
              </div>


            </div>
        </div>
    </div>
</div>
@endsection
