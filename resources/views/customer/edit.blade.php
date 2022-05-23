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
								Edi hhh
							</h3>
						</div>
						
				<form action="/customer/{{$customer->id}}/update" method="POST">
				{{csrf_field()}}
				<div class="form-group">
					<label for="exampleEmail1">Nama Customer</label>
					<input type="text" name="nama_cust" class="form-control" id="exampleEmail1" 
					aria-describedby="emailhelp" placeholder="Nama Customer" value="{{$customer->nama_cust}}">
				</div>
				<div class="form-group">
					<label for="exampleEmail1">Nama Kendaraan</label>
					<input name="nama_kendaraan" type="text" class="form-control" id="exampleEmail1" aria-describedby="emailhelp" placeholder="Kendaraan" value="{{$customer->nama_kendaraan}}">
				</div>
				<div class="form-group">
					<label for="exampleEmail1">Jenis Kendaraan</label>
					<input name="jenis_kendaraan" type="text" class="form-control" id="exampleEmail1" aria-describedby="emailhelp" placeholder="Jenis Kendaraan" value="{{$customer->jenis_kendaraan}}">
				</div>
				<div>
					<label for="exampleEmail1">Telepon</label>
					<input name="telepon" type="text" class="form-control" id="exampleEmail1" aria-describedby="emailhelp" placeholder="Telepon" value="{{$customer->telepon}}">
				</div>
				<div>
					<label for="exampleEmail1">Alamat</label>
					<input name="alamat" type="text" class="form-control" id="exampleEmail1" aria-describedby="emailhelp" placeholder="Alamat" value="{{$customer->alamat}}">
				</div>
				
					<button type="submit" class="btn btn-primary">Update</button>
					
				</div>
			</form>
		</div>
	</div>

</div>
</div>
</div>

@endsection