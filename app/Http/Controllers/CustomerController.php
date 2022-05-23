<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\CustomerExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class CustomerController extends Controller
{
	public function index()
	{
		$data_customer = \App\Customer::all();

		return view('customer.index', ['data_customer' => $data_customer]);
	}
	public function create(Request $request)
	{
		///samakan dengan authcontroller
		$user = new \App\User;
		$user->role = 'customer';
		$user->name = $request->nama_cust;
		$user->email = $request->email;
		$user->password = bcrypt('123456789');
		$user->save();

		$request->request->add(['user_id' => $user->id]);

		$customer = \App\Customer::create($request->all());
		return redirect('/customer')->with('sukses', 'Berhasil');
	}
	public function edit($id)
	{
		$customer = \App\Customer::find($id);
		return view('/customer/edit', ['customer' => $customer]);
	}
	public function update(Request $request, $id)
	{
		$customer = \App\Customer::find($id);
		$customer->update($request->all());
		return redirect('/customer')->with('sukses', 'Berhasil');
	}
	public function delete($id)
	{
		$customer = \App\Customer::find($id);
		$customer->delete($customer);
		return redirect('/customer')->with('sukses', 'Berhasil');
	}
	public function exportexcel()
	{
		return Excel::download(new CustomerExport, 'Customer.xlsx');
	}
	public function exportpdf()
	{
		$customer = \App\Customer::all();
		$pdf = PDF::loadView('export.customerpdf', ['customer' => $customer]);
		return $pdf->download('customer.pdf');
	}
}
