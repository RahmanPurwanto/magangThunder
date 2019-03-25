<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #25 : Relasi Many To Many Eloquent</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

		<div class="card mt-5">
			<div class="card-body">
				<h3 class="text-center"><a href="https://www.malasngoding.com">Thunderlabs</a></h3>
				<h5 class="text-center my-4">Kabar berita hari ini</h5>
				<table class="table table-bordered table-striped">
					<thead>
						<a href="/Berita/tambah" class="btn btn-primary">Input Pegawai Baru</a>
            <br>
						</br>
						<tr>
							<th>Judul Berita</th>
							<th>Penulis</th>
							<th>Tanggal</th>
							<th>Isi berita</th>
							<th width="15%">Edit</th>
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
		</div>
	</div>

</body>
</html>
