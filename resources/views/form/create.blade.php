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
            <h5>Input Data Sewa Gedung</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">

				
				<div class="panel-body">
					<form action="{{route('form.store')}}" method="POST" role="form">
					{{csrf_field()}}
						<div class="form-group">
							<label>Nama Pemesan</label>
							<input type="text" class="form-control" name="pemesan" placeholder="Input pemesan">
						</div>
						<div class="form-group">
							<label>Nama Pengantin</label>
							<input type="text" class="form-control" name="pengantin" placeholder="Input pengantin">
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<textarea class="form-control" name="alamat" placeholder="Input alamat"></textarea>
						</div>
						<div class="form-group">
							<label>Telepon</label>
							<input type="text" class="form-control" name="telepon" placeholder="Input telepon">
						</div>
						<div class="form-group">
							<label>Tanggal Sewa</label>
							<input type="text" class="form-control" name="tanggal" placeholder="Input tanggal">
						</div>
						<div class="form-group">
							<label>Jenis Kegiatan</label>
							<input type="text" class="form-control" name="jenis" placeholder="Input jenis">
						</div>
						<div class="form-group">
							<label>Waktu Kegiatan</label>
							<input type="text" class="form-control" name="waktu" placeholder="Input waktu">
						</div>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
						

						