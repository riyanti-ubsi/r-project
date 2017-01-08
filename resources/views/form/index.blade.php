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
            <h5> Data Sewa Gedung</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>id</th>
						<th>Pemesan</th>
						<th>Pengantin</th>
						<th>Alamat</th>
						<th>Telepon</th>
						<th>Tempat</th>
						<th>Tanggal Sewa</th>
						<th>Waktu Kegiatan</th>
						<th>Jenis Kegiatan</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				@foreach ($form as $data)
					<tr>
						<td>{{$data->id}}</td>
						<td>{{$data->pemesan}}</td>
						<td>{{$data->pengantin}}</td>
						<td>{{$data->alamat}}</td>
						<td>{{$data->telepon}}</td>
						<td>{{$data->tempat}}</td>
						<td>{{$data->tanggal_sewa}}</td>
						<td>{{$data->jenis_kegiatan}}</td>
						<td>{{$data->waktu_kegiatan}}</td>
						<td>
							<a href="{{route('form.edit', $data->id)}}" class="btn btn-primary">Edit</a>
							<a href="{{route('form.show', $data->id)}}" class="btn btn-primary">Lihat</a>
							<form action="{{route('form.destroy', $data->id)}}" method="POST">
							{{csrf_field()}}
							<input type="hidden" name="_method" value="delete">
							<input type="submit" value="Hapus" class="btn btn-danger">
							</form>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection