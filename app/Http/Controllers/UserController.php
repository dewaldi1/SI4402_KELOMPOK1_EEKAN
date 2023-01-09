<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detail_product;
use App\Models\transactions;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function Home(){
        $daftarProduk = DB::table('detail_products')->orderBy('id', 'DESC')->limit(3)->get();
        return view('home', compact(['daftarProduk']));
    }
    public function Shop(){
        $daftarProduk = detail_product::all();
        return view('shop', compact(['daftarProduk']));
    }
    public function detail($id){
        $detailIkan = detail_product::find($id);
        $listIkan = DB::table('detail_products')->orderBy('id', 'ASC')->limit(4)->get();
        return view('detail', compact(['detailIkan'], ['listIkan']));
    }
    public function About(){
        return view('about');
    }
    public function Cart(){
        return view('cart');
    }
    public function riwayat(){
        $riwayat = transactions::all();
        return view('riwayat', compact(['riwayat']));
    }
    public function Checkout($id){
        $checkout = detail_product::find($id);
        return view('checkout', compact(['checkout']));
    }
    public function CheckoutTransaction(Request $request){
        $ekstensi = $request->file('pembayaran')->clientExtension();
        $nama = $request->name.'-'.now()->timestamp.'.'.$ekstensi;
        $request->file('pembayaran')->storeAs('images', $nama);
        $request['pembayaran'] = $nama;
        $createTransaction = transactions::create([
            'name' => $request->name,
            'produk' => $request->produk,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'alamatPengiriman' => $request->alamatPengiriman,
            'kurir' => $request->kurir,
            'metodePembayaran' => $request->metodePembayaran,
            'pembayaran' => $request->pembayaran,
            'hargaTotal' => $request->hargaTotal,
            'pembayaran' => $nama,
            'status' => 'Pending',
        ]);
        if($createTransaction){
            return redirect('/success');
        } 
    }
    public function success(){
        return view('succes');
    }
}
