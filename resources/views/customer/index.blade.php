<!--//ini untuk manggil master-->
@extends('layout.master')
@section('content')
	<div class="main">
	<div class="main-content">
		<div class="content-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-tittle">
								Data Customer
							</h3>
						</div>
						<div class="col-6" align="center">
					
						<button type="button" class="btn btn-info float-left" class="btn-remove" data-toggle="modal" data-target="#exampleModal" > 
						<i class="lnr lnr-plus-circle"></i>
						</button>
						</div>
						<div class="panel-body">
							<table class="table table-hover">
								<thead class="thead-dark">

								<tr>
									<th>Nama Customer</th>
									<th>Nama Kendaraan</th>
									<th>Jenis Kendaraan</th>
									<th>Telepon</th>
									<th>Alamat</th>
									<th>Aksi</th>
								</tr>

								@foreach($data_customer as $customer)
								<tr>
									<td> {{$customer->nama_cust}} </td>
									<td> {{$customer->nama_kendaraan}} </td>
									<td> {{$customer->jenis_kendaraan}} </td>
									<td> {{$customer->telepon}} </td>
									<td> {{$customer->alamat}} </td>
									<td>
										<a href="/customer/{{$customer->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
										<a href="/customer/{{$customer->id}}/delete" class="btn btn-danger btn-sm">Delete</a>
									</td>
								</tr>
								@endforeach
						</table>
						<a href="/customer/exportpdf" class="btn btn-sm btn-primary" align="right">Export PDF</a> &nbsp
						<a href="/customer/exportexcel" class="btn btn-sm btn-primary" align="right">Export excel</a>
						</div>
							<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
										<h5 class="modal-tittle" id="exampleModalLabel">Modal Tittle</h5>
								

									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">
										&times;
										</span>
									</button>
								</div>
								<div class="modal-body">
									<!--ini pembuatan form-->
									<form action="/customer/create" method="POST">
										{{csrf_field()}}
										<div class="form-group">
											<label for="exampleEmail1">Nama Customer</label>
											<input type="text" name="nama_cust" class="form-control" id="exampleEmail1" 
											aria-describedby="emailhelp" placeholder="Nama Customer">
										</div>
										<div class="form-group">
											<label for="exampleEmail1">Email</label>
											<input type="text" name="email" class="form-control" id="exampleEmail1" 
											aria-describedby="emailhelp" placeholder="Email">
										</div>

										<div class="form-group">
											<label for="exampleEmail1">Nama Kendaraan</label>
											<input name="nama_kendaraan" type="text" class="form-control" id="exampleEmail1" aria-describedby="emailhelp" placeholder="Kendaraan">
										</div>
										<div class="form-group">
											<label for="exampleEmail1">Jenis Kendaraan</label>
											<input name="jenis_kendaraan" type="text" class="form-control" id="exampleEmail1" aria-describedby="emailhelp" placeholder="Jenis Kendaraan">
										</div>
										<div>
											<label for="exampleEmail1">Telepon</label>
											<input name="telepon" type="text" class="form-control" id="exampleEmail1" aria-describedby="emailhelp" placeholder="Telepon">
										</div>
										<div>
											<label for="exampleEmail1">Alamat</label>
											<input name="alamat" type="text" class="form-control" id="exampleEmail1" aria-describedby="emailhelp" placeholder="Alamat">
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<button type="submit" class="btn btn-primary">Submit</button>
											
										</div>
									</form>
								</div>
							</div>

						</div>
					</div>
				</thead>
			</table>
		</div>
	</div>
</div>
</div>
</div>
</div>
</div>


@endsection
















<!--ini untuk deklarasi konten-->
@section('content1')

<!--ini untuk kondisional section-->
@if(session('sukses'))
<div class="alert alert-success" role="alert">
	Berhasil
</div>
@endif
<div class="row">
	<div class="col-6">
		<h1>Data Customer</h1>
	</div>
	<!--ini untuk menampilkan top up pegawai-->
	<div class="col-6">
		<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal"> 
		Tambah Customer
		</button>
		
		
	</div>




	<table class="table table-hobver">
		  <thead class="thead-dark">

		<tr>
			<th>Nama Customer</th>
			<th>Nama Kendaraan</th>
			<th>Jenis Kendaraan</th>
			<th>Montir</th>
			<th>Aksi</th>
		</tr>

		@foreach($data_customer as $customer)
		<tr>
			<td> {{$customer->nama_cust}} </td>
			<td> {{$customer->nama_kendaraan}} </td>
			<td> {{$customer->idjenis}} </td>
			<td> {{$customer->idmontir}} </td>
			<td>
				<a href="/customer/{{$customer->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
				<a href="/customer/{{$customer->id}}/delete" class="btn btn-danger btn-sm">Delete</a>
			</td>
		</tr>
		@endforeach
</table>
<a href="/customer/exportpdf" class="btn btn-sm btn-primary" align="right">Export PDF</a> &nbsp
<a href="/customer/exportexcel" class="btn btn-sm btn-primary" align="right">Export excel</a>
</div>
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
				<h5 class="modal-tittle" id="exampleModalLabel">Modal Tittle</h5>
		

			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">
				&times;
				</span>
			</button>
		</div>
		<div class="modal-body">
			<!--ini pembuatan form-->
			<form action="/customer/create" method="POST">
				{{csrf_field()}}
				<div class="form-group">
					<label for="exampleEmail1">Nama Customer</label>
					<input type="text" name="nama_cust" class="form-control" id="exampleEmail1" 
					aria-describedby="emailhelp" placeholder="Nama Customer">
				</div>
				<div class="form-group">
					<label for="exampleEmail1">Nama Kendaraan</label>
					<input name="nama_kendaraan" type="text" class="form-control" id="exampleEmail1" aria-describedby="emailhelp" placeholder="Kendaraan">
				</div>
				<div class="form-group">
					<label for="exampleEmail1">Jenis Kendaraan</label>
					<input name="idjenis" type="text" class="form-control" id="exampleEmail1" aria-describedby="emailhelp" placeholder="Jenis Kendaraan">
				</div>
				<div>
					<label for="exampleEmail1">Montir</label>
					<input name="idmontir" type="text" class="form-control" id="exampleEmail1" aria-describedby="emailhelp" placeholder="Nama Montir">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Submit</button>
					
				</div>
			</form>
		</div>
	</div>

</div>

		@endsection
