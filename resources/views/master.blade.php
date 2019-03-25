
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Leaves Dew
Description: A two-column, fixed-width design for 1024x768 screen resolutions.
Version    : 1.0
Released   : 20090426

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>@yield('title')</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css"  />
<script src="{{ asset('vernon.png') }}"></script>
</head>
<style>
/*
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License
*/

body {
	margin: 0;
	padding: 0;
	background: #FEFEFE /*url(images/img01.jpg) repeat-x left top*/;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	color: #66665E;
}


h1, h2, h3 {
	margin: 0;
	text-transform: uppercase;
	font-weight: normal;
	color: #4B8749;
}

h1 { font-size: 44px; }

h2 { font-size: 18px; }

h3 { }

p, ul, ol {
	margin-top: 0;
	line-height: 240%;
	text-align: justify;
}

ul, ol { }

blockquote { }

a { color: #4B8749; }

a:hover { text-decoration: none; }

a img {
	border: none;
}

img.left {
	float: left;
	margin: 7px 30px 0 0;
}

img.right {
	float: right;
	margin: 7px 0 0 30px;
}

hr { display: none; }

.list1 {
}

.list1 li {
	float: left;
	line-height: normal;
}

.list1 li img {
	margin: 0 30px 30px 0;
}

.list1 li.alt img {
	margin-right: 0;
}

#wrapper {
}

/* Header */

#header-wrapper {
}

#header {
	width: 900px;
	height: 50px;
	margin: 0 auto;
	background: url(images/img03.jpg) no-repeat left top;
}

/* Menu */

#menu {
	float: left;
	width: 540px;
	height: 50px;
}

#menu ul {
	margin: 0;
	padding: 0px 0px 0px 5px;
	list-style: none;
	line-height: normal;
}

#menu li {
	display: block;
	float: left;
	background: url(images/img04.gif) no-repeat left 20px;
}

#menu a {
	display: block;
	float: left;
	height: 20px;
	margin-right: 3px;
	padding: 15px 20px;
	text-decoration: none;
	text-transform: uppercase;
	font-size: 12px;
	color: #FFFFFF;
}

#menu a:hover { text-decoration: underline; }

#menu .current_page_item a {
	height: 20px;
 background: #689970;
	color: #FFFFFF;
}

/* Search */

#search {
	float: right;
	width: 305px;
	height: 50px;
}

#search form {
	float: right;
	margin: 0;
	padding: 15px 20px 0 0;
}

#search fieldset {
	margin: 0;
	padding: 0;
	border: none;
}

#search input {
	float: left;
	font: 12px Georgia, "Times New Roman", Times, serif;
	border: none;
}

#search-text {
	width: 135px;
	height: 18px;
	padding: 3px 0 0 5px;
	background: #ECF9E4;
	color: #658453;
}

#search-submit {
	height: 21px;
	margin-left: 12px;
	color: #39561D;
}

/* Page */

#page {
	width: 840px;
	margin: 0 auto;
	padding: 30px 30px 0px 30px;
	background: #FFFFFF;
	border-bottom: 5px #66665E solid;
}

	/** LOGO */

#logo {
	width: 850px;
	height: 300px;
	margin: 0 auto;
	padding-left: 50px;
	background: url(images/vernon.png) no-repeat left top;
}

#logo h1, #logo p {
	margin: 0px;
	line-height: normal;
	font-weight: normal;
	color: #000000;
}

#logo p {
	padding-left: 3px;
	padding-top: 6px;
	text-transform: uppercase;
	font-size: 10px;
}

#logo h1 {
	padding: 60px 0px 0px 0px;
	font-size: 34px;
}

#logo a {
	text-decoration: none;
	color: #000000;
}

/* Content */

#content {
	float: left;
	width: 570px;
}

/* Post */

.post {
	margin-bottom: 25px;
}

.post .title {
	height: 30px;
	color: #42423E;
}

.post .date {
}

.post .meta {
	margin-top: -10px;
	padding: 2px 30px 2px 0px;
	border-bottom: 1px #BDBDBB dotted;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: normal;
	font-size: 10px;
	color: #66665E;
}

.post .meta span {
	display: block;
	margin-top: -10px;
}

.post .meta a { }

.post .entry {
	padding: 10px 0;
}

.post .links {
	margin: 0 250px 0 0;
	padding: 0 0 0 0px;
}

.post .links .comments {
}

.post .links .permalink {
	padding-left: 17px;
}

/* Sidebar */

#sidebar {
	float: right;
	width: 220px;
}

#sidebar ul {
	margin: 0;
	padding: 0;
	list-style: none;
	line-height: normal;
}

#sidebar li {
	margin-bottom: 30px;
	padding: 0 0 10px 0px;
}

#sidebar li ul {
}

#sidebar li li {
	margin: 0;
	padding-left: 15px;
	background: url(images/img05.jpg) no-repeat left 5px;
}

#sidebar p {
	margin: 0;
}

#sidebar h2 {
	height: 25px;
	margin: 0 0 10px 0px;
	padding: 8px 0 2px 0px;
	border-bottom: 1px #BDBDBB dotted;
	color: #42423E;
}


#sidebar p {
	line-height: 200%;
}

/* Calendar */

#calendar {
}

#calendar caption {
	padding-bottom: 5px;
	font-weight: bold;
}

#calendar table {
	width: 100%;
	border-collapse: collapse;
	border-bottom: 1px solid #24130F;
	border-left: 1px solid #24130F;
	border-right: 1px solid #24130F;
}

#calendar thead th {
	padding: 5px 0;
	text-align: center;
	border-top: 1px solid #24130F;
	border-left: 1px solid #24130F;
	background: #24130F;
}

#calendar tbody td {
	padding: 5px 0;
	text-align: center;
	border-top: 1px solid #24130F;
	border-left: 1px solid #24130F;
	border-bottom: 1px solid #24130F;
}

#calendar tfoot td {
	padding: 5px;
	border-left: 1px solid #24130F;
	border-bottom: 1px solid #24130F;
}

#calendar tfoot #next {
	border-top: 1px solid #24130F;
	text-align: right;
}

#calendar tfoot #prev {
	border-top: 1px solid #24130F;
}

#calendar .pad {
	border-bottom: 1px solid #24130F;
}

#calendar #today {
	background: #24130F;
}

/* Footer */

#footer {
	width: 900px;
	margin: 0 auto;
	padding: 0;
	height: 50px;
	background: url(images/img04.gif) no-repeat left top;
}

#footer p {
	margin: 0;
	padding: 20px 0;
	text-align: center;
	line-height: normal;
	font-size: 10px;
	color: #66665E;
}

#footer a {
}
</style>
<body>

	<header>

	<nav>
	  <a href="/laravel">Laravel</a>
	  <!-- <a href="#">Home</a>
	  <a href="#">Blog</a> -->
	</nav>
	 </header>

<div id="wrapper">
	<div id="logo">
		<h1><a href="https://www.loker.id/profile/vernon-office">Vernon </a></h1>
		<p><em> PT ThunderLabs Indonesia <!-- <a href="http://www.freecsstemplates.org/">Free CSS Templates</a> --></em></p>
	</div>
	<hr />

  @include('layouts/menu')
	<!-- end #logo -->

<!-- title.blade.php -->
	 <!-- <div id="header">
		 <div id="menu">
			<ul>
				<li><a href="#">Home</a></li>
				<li class="current_page_item"><a href="#">blog</a></li>
				<li><a href="#">Photos</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Links</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</div>  -->
		<!-- end #menu -->
		<!-- <div id="search">
			<form method="get" action="">
				<fieldset>
				<input type="text" name="s" id="search-text" size="15" />
				<input type="submit" id="search-submit" value="Search" />
				</fieldset>
			</form>
		</div> -->
		<!-- end #search-->
	<!-- </div> -->
	<!-- end #header -->
	<!-- end #header-wrapper -->

<!-- content.blade.php -->
	<div id="page">
		@yield('content')
		<!-- <div id="content">
			<div class="post">
				<h2 class="title">Selamat Datang di PT ThunderLabs Indonesia</h2>
				<p class="meta">monday, 11-03-2019<br />
					<span>Posted by <a href="#">Rahman Purwanto</a></span></p>
				<div class="entry">
					<p><strong>Thunderlabs indonesia</strong> merupakan divisi turunan dari
						 <a href="https://halomalang.com/read/2018/03/vernon-staff-accounting?">Vernon</a>,
						begitu juga dengan  <a href="https://halomalang.com/">
						Halomalang</a> yang berdiri sejak 1 Maret 2012 dan kami berkomitmen untuk menyajikan
						berita tentang lifestyle yang terjadi di seputar Malang Raya. Dari awal kami mencoba
						untuk menampung keinginan pemilik bisnis yang ada di Malang Raya serta para pembaca
						website kami. Bagi para pemilik bisnis, Halomalang.com dapat menjadi solusi beriklan
						dan promo bisnis. Sedangkan bagi pembaca, Halomalang.com merupakan tempat untuk
						mendapatkan informasi tentang Malang Raya, khususnya ranah lifestyle.Tagline kami
						"Dari Ngalamers Untuk Kita Semua" merupakan simbol bahwa halomalang.com tidak bisa
						lepas dari kontribusi para pembaca dan klien, yang kami beri julukan Ngalamers.
						Kontribusi dari Ngalamers inilah yang selanjutnya menjadi kekuatan kami untuk
						terus menyajikan informasi lifestyle ter-aktual di Malang Raya.
						 <p class="links"><a href="#" class="comments">Comments (64)</a> &nbsp;&nbsp;&nbsp; <a href="#" class="permalink">Full article</a></p>
				</div>
			</div>


			<div class="post">
				<h2 class="title">Lorem ipsum sed aliquam</h2>
				<p class="meta">Sunday, April 26, 2009 7:27 AM <br />
					<span>Posted by <a href="#">Someone</a></span></p>
				<div class="entry">
					<p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec   consectetuer. Donec ipsum. Proin imperdiet est. Phasellus <a href="#">dapibus semper urna</a>. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis. Donec ut ante. In id eros.</p>
					<p class="links"><a href="#" class="comments">Comments (64)</a> &nbsp;&nbsp;&nbsp; <a href="#" class="permalink">Full article</a></p>
				</div>
			</div>
			<div class="post">
				<h2 class="title">Lorem ipsum sed aliquam</h2>
				<p class="meta">Sunday, April 26, 2009 7:27 AM <br />
					<span>Posted by <a href="#">Someone</a></span></p>
				<div class="entry">
					<p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Phasellus <a href="#">dapibus semper urna</a>. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. </p>
					<p class="links"><a href="#" class="comments">Comments (64)</a> &nbsp;&nbsp;&nbsp; <a href="#" class="permalink">Full article</a></p>
				</div>
			</div>
		</div> -->
		 <!-- end #content -->

@include('layouts/sidebar')
<!-- sidebar.blade.php -->
		<!-- <div id="sidebar">
			<ul>
				<li>
					<h2>HaloMalang</h2>
					<p>Halomalang.com merupakan tempat untuk
					mendapatkan informasi tentang Malang Raya.</p>
				</li>
				<li>
					<h3>Jasa layanan Informasi</h3><br>
					<ul>
						<li><a href="https://halomalang.com/">Halomalang.com</a></li>
						<li><a href="https://halomalang.com/news?tags=news">Halomalang News</a></li>
						<li><a href="https://halomalang.com/vlog">Halomalang Vlog</a></li>
						<li><a href="https://halomalang.com/events">Halomalang Event</a></li>
						<li><a href="https://halomalang.com/kuliner">Halomalang Kuliner</a></li>
						<li><a href="https://halomalang.com/wisata">Halomalang Wisata</a></li>
						<li><a href="https://halomalang.com/ngalamers">Halomalang Ngalamers</a></li>
						<li><a href="https://halomalang.com/promo">Halomalang Promo</a></li>
						<li><a href="https://halomalang.com/cari-kerja">Halomalang Promo</a></li>
						<li><a href="https://halomalang.com/bioskop">Halomalang Bioskop</a></li>
					</ul>
				</li>
				<li>
					<h2>Turpis nulla</h2>
					<ul>
						<li><a href="#"></a><a href="#">Nec metus sed donec</a></li>
						<li><a href="#">Magna lacus bibendum mauris</a></li>
						<li><a href="#">Velit semper nisi molestie</a></li>
						<li><a href="#">Eget tempor eget nonummy</a></li>
						<li><a href="#">Nec metus sed donec</a></li>
						<li><a href="#"></a><a href="#">Nec metus sed donec</a></li>
						<li><a href="#">Magna lacus bibendum mauris</a></li>
						<li><a href="#">Velit semper nisi molestie</a></li>
						<li><a href="#">Eget tempor eget nonummy</a></li>
						<li><a href="#">Nec metus sed donec</a></li>
					</ul>
				</li>
			</ul>
		</div> -->
		<!-- end #sidebar-->

		<div style="clear: both;">&nbsp;
    </div>
	</div>
	<!-- end #page -->

  @include('layouts/footer')

	<!-- <div id="footer">
		<p>Copyright (c) <a href="https://thunderlab.id/">PT Thunderlabs Indonesia</a>.</p>
	</div> -->
	<!-- end #footer -->
</div>
 <!-- <div align=center>This template  downloaded form
<a href='http://all-free-download.com/free-website-templates/'>free website templates</a>
</div> -->
</body>
</html>
