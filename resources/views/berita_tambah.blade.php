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
                    CRUD Data Berita - <strong>Tambah Berita</strong> - <a href="https://www.malasngoding.com/category/laravel" target="_blank">Thunderlabs</a>
                </div>
                <div class="card-body">
                    <a href="/Berita" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>

                    <form method="post" action="/Berita/store">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Judul Berita</label>
                            <input type="text" name="judul_berita" class="form-control" placeholder="Judul Berita ..">

                            @if($errors->has('judul_berita'))
                                <div class="text-danger">
                                    {{ $errors->first('judul_berita')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Penulis Berita</label>
                            <input type="text" name="penulis_berita" class="form-control" placeholder="Penulis Berita ..">

                             @if($errors->has('penulis_berita'))
                                <div class="text-danger">
                                    {{ $errors->first('penulis_berita')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Tanggal :</label>
                            <input type="date" name="tanggal_berita" class="input-tanggal">
                             @if($errors->has('tanggal_berita'))
                                <div class="input-tanggal">
                                    {{ $errors->first('tanggal_berita')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Isi Berita :</label>
                            <textarea name="isi_berita" class="form-control" placeholder="Isi Berita .."></textarea>

                             @if($errors->has('isi_berita'))
                                <div class="text-danger">
                                    {{ $errors->first('isi_berita')}}
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
