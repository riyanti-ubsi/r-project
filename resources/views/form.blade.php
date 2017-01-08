@extends('layouts.app')

@section('content')

<title>Wedding Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/fullcalendar.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

<div id="header">
  <h1><a href="dashboard.html">Wedding Admin</a></h1>
</div>
	<title>Input Data Sewa Gedung Form</title>

<body>
	<form action="{{URL('form')}}" method="POST">
	{{csrf_field()}}
		<table>
			<tr>
				<td>Nama Pemesan</td>
				<td>:</td>
				<td><input type="text" name="pemesan"></td>
			</tr>
			<tr>
				<td>Nama Pengantin</td>
				<td>:</td>
				<td><input type="text" name="pengantin"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><TEXTAREA name="alamat"></TEXTAREA>></td>
			</tr>
			<tr>
				<td>Telepon</td>
				<td>:</td>
				<td><input type="text" name="telepon"></td>
			</tr>
			<tr>
				<td>Tempat</td>
				<td>:</td>
				<td><input type="text" name="tempat"></td>
			</tr>
			<tr>
				<td>Tanggal Sewa</td>
				<td>:</td>
				<td><input type="text" name="tanggal"></td>
			</tr>
			<tr>
				<td>Jenis Kegiatan</td>
				<td>:</td>
				<td><input type="text" name="jenis"></td>
			</tr>
			<tr>
				<td>Waktu Kegiatan</td>
				<td>:</td>
				<td><input type="text" name="waktu"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>
@endsection

