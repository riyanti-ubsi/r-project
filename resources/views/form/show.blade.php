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

<div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Data Sewa Gedung</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
            <thead>
            <tr>
			<tr>
				<td>ID</td>
				<td>:</td>
				<td>{{$form->id}}</td>
			</tr>
			<tr>
				<td>Nama Pemesan</td>
				<td>:</td>
				<td>{{$form->pemesan}}</td>
			</tr>
			<tr>
				<td>Nama Pengantin</td>
				<td>:</td>
				<td>{{$form->pengantin}}</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>{{$form->alamat}}</td>
			</tr>
			<tr>
				<td>Telepon</td>
				<td>:</td>
				<td>{{$form->telepon}}</td>
			</tr>
			<tr>
				<td>Tempat</td>
				<td>:</td>
				<td>{{$form->tempat}}</td>
			</tr>
			<tr>
				<td>Tanggal Sewa</td>
				<td>:</td>
				<td>{{$form->tanggal_sewa}}</td>
			</tr>
			<tr>
				<td>Jenis Kegiatan</td>
				<td>:</td>
				<td>{{$form->jenis_kegiatan}}</td>
			</tr>
			<tr>
				<td>Waktu Kegiatan</td>
				<td>:</td>
				<td>{{$form->waktu_kegiatan}}</td>
			</tr>
			
		</table>
		</div>
	</div>
</div>
</div>
</div>
@endsection