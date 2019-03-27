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
                  <h3 class="text-center"><a href="">Thunderlabs</a></h3>
                  <h5 class="text-center my-4">Pilih berita atau Kategori :</h5>
                  <table class="table table-bordered table-striped">
                    @section('crud')
                    <thead>
                      &nbsp;&nbsp;&nbsp;
                      <a href="/Berita" class="btn btn-primary">Lihat Tabel Berita</a>

                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                      <a align="left" href="/Kategori" class="btn btn-primary">Lihat Tabel Kategori</a>

                      <br>
                      </br>

                      <h4 class="text-center my-4">Daftar Admin</h4>
                      <tr>
                        <th width="20%">nama admin</th>
                        <th width="20%">email</th>
                        <th width="20%">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($users as $a)
                      <tr>
                        <td>{{ $a->name }}</td>
                        <td>{{ $a->email }}</td>
                        <td>
                          <a href="/User/hapus/{{ $a->id }}" class="btn btn-danger">Hapus</a>
                          <a href="https://mail.google.com" class="btn btn-warning">Hubungi via Email</a>

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
