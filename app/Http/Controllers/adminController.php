<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detail_product;
use App\Models\transactions;


class adminController extends Controller
{
    public function Dashboard(){
        $CountDT = detail_product::count();
        $sumTransaction = transactions::sum('hargaTotal');
        $sumPending = transactions::where('status', 'Pending')->count();
        $sumSedangDiproses = transactions::where('status', 'Sedang diproses')->count();
        $sumSedangDikirim = transactions::where('status', 'Sedang dikirim')->count();
        $sumTerkirim = transactions::where('status', 'terkirim')->count();
        return view('admin.dashboard', compact(['CountDT'], ['sumTransaction'], ['sumPending'], ['sumSedangDiproses'], ['sumSedangDikirim'], ['sumTerkirim']));
    }
    public function daftarIkan(){
        $listIkan = detail_product::all();
        return view('admin.daftarIkan', compact(['listIkan']));
    }
    public function daftarTransaction(){
        $listTransactions = transactions::all();
        return view('admin.daftarTransactions', compact(['listTransactions']));
    }
    public function detailTransactions($id){
        $detailTransactions = transactions::find($id);
        return view('admin.detailTransactions', compact(['detailTransactions']));
    }
    public function buktiPembayaran($id){
        $buktiPembayaran = transactions::find($id);
        return view('admin.buktiPembayaran', compact(['buktiPembayaran']));
    }
    public function editStatus($id){
        $editStatus = transactions::find($id);
        return view('admin.editStatus', compact(['editStatus']));
    }
    public function konfirmasiStatus (Request $request, $id){
        $editStatus = transactions::find($id);
        $editStatus->update($request->except('_token'));
        return redirect('/admin/transaction');
    }
    public function tambahIkan(){
        return view('admin.tambahIkan');
    }
    public function insertIkan(Request $request){
        $ekstensi = $request->file('gambar')->clientExtension();
        $nama = $request->name.'-'.now()->timestamp.'.'.$ekstensi;
        $request->file('gambar')->storeAs('foto', $nama);
        $request['gambar'] = $nama;
        $insertIkan = detail_product::create([
            'name' => $request->name,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'gambar' => $nama,
        ]);
        if($insertIkan){
            return redirect('/admin/daftarIkan');
        }
    }
    public function editIkan($id){
        $listIkan = detail_product::find($id);
        return view('admin.editIkan', compact(['listIkan']));
    }
    public function updateIkan(Request $request, $id){
        $updateIkan = detail_product::find($id);
        $updateIkan->update($request->except('_token'));
        return redirect('/admin/daftarIkan');
    }
    public function deleteIkan($id){
        $deleteIkan = detail_product::find($id);
        $deleteIkan->delete();
        return redirect('/admin/daftarIkan');
    }
}
