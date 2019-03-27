<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #25 : Relasi Many To Many Eloquent</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

	<div class="container">
		<div class="card mt-5">
			<div class="card-body">
				<h1 class="text-center"><a href="">Thunderlabs</a></h1>
				<h5 class="text-center my-4">Kategori yang ada</h5>
				<table class="table table-bordered table-striped">

					<thead>
						<a href="/Kategori/tambahKat" class="btn btn-primary">Tambah Kategori</a>
						&nbsp;
						<a href="/home" class="btn btn-primary">Home</a>

						<br>
						</br>
						<tr>
							<th>Nama Kategori</th>
							<th width="15%">Edit</th>
						</tr>
					</thead>
					<tbody>
						@foreach($kategori as $a)
						<tr>
							<td>{{ $a->nama_kategori }}</td>
              <td>
								<a href="/Kategori/edit/{{ $a->id_kategori }}" class="btn btn-warning">Edit</a>
								<a href="/Kategori/hapus/{{ $a->id_kategori }}" class="btn btn-danger">Hapus</a>

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
