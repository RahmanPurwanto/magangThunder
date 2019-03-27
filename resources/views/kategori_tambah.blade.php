<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Tutorial Laravel #21 : CRUD Eloquent Laravel - www.malasngoding.com</title>

        <script type="text/javascript" src="js/jquery.js"></script>
	       <script type="text/javascript" src="js/jquery-ui/jquery-ui.js"></script>
	       <link rel="stylesheet" type="text/css" href="js/jquery-ui/jquery-ui.css">
	       <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <style>

    .input-tanggal{
    	padding: 10px;
    	font-size: 14pt;
    }
  </style>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Kategori - <strong>Tambah Kategori</strong> - <a href="https://www.malasngoding.com/category/laravel" target="_blank">Thunderlabs</a>
                </div>
                <div class="card-body">
                    <a href="/Kategori" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>

                    <form method="post" action="/Kategori/KaStore">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Nama Kategori</label>
                            <input type="text" name="nama_kategori" class="form-control" placeholder="Nama Kategori ..">

                            @if($errors->has('nama_kategori'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_kategori')}}
                                </div>
                            @endif

                        </div>


                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </body>

  <script type="text/javascript">
	$(document).ready(function(){
		$('.input-tanggal').datepicker();
	});
</script>
</html>
