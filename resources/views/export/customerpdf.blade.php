<table class="table" style="border:1px solid #ddd">
	<thead>
		<tr>
			<th>Nama Customer</th>
			<th>Nama Kendaraan</th>
			<th>Jenis Kendaraan</th>
			<th>Montir</th>
		</tr>
	</thead>
	<tbody>
		@foreach($customer as $cs)
		<tr>
			<td> {{$cs->nama_cust}} </td>
			<td> {{$cs->nama_kendaraan}} </td>
			<td> {{$cs->idjenis}} </td>
			<td> {{$cs->idmontir}} </td>
		</tr>
		@endforeach
	</tbody>
</table>