<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Barryvdh\DomPDF\Facade\Pdf;
class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('Customer.customers', compact('customers'));
    }

    public function create()
    {
        return view('Customer.customers-input');
    }

    public function store(Request $request)
    {
       $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|file|mimes:png,jpg,jpeg|max:2048',
        ]);

        $gambar = $request->file('gambar');
        $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
        $tujuan_upload = 'img_customers';
        $gambar->move($tujuan_upload, $nama_gambar);

        Customer::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'deskripsi' => $request->deskripsi,
            'gambar' => $nama_gambar,
        ]);

        return redirect('/customer');
    }

    public function edit($id_customers)
    {
        $customer = Customer::find($id_customers);
        return view('Customer.customers-edit', compact('customer'));
    }

    public function update(Request $request, $id_customers)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|file|mimes:png,jpg,jpeg|max:2048',
        ]);

        $customer = Customer::find($id_customers);

        if($request->hasFile('gambar')){

            File::delete('img_customers/'.$customer->gambar);
            $gambar = $request->file('gambar');
            $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
            $tujuan_upload = 'img_customers';
            $gambar->move($tujuan_upload, $nama_gambar);
            $customer->gambar = $nama_gambar;
        }

        $customer->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'deskripsi' => $request->deskripsi,
            'gambar' => $nama_gambar,
        ]);

        return redirect('/customer');
    }

    public function delete($id_customers)
    {
        $customer = Customer::find($id_customers);
        return view('Customer.customers-hapus', compact('customer'));
    }

    public function destroy($id_customers)
    {
        $customer = Customer::find($id_customers);
        File::delete('img_customers/'.$customer->gambar);
        $customer->delete();
        return redirect('/customer');
    }

    public function cetak()
    {
        $customer = Customer::all();
        $pdf = Pdf::loadview('Customer.customers-cetak', compact('customer'));
        return $pdf->download('laporan-customers.pdf');
    }

}
