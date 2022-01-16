<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function post(Request $request) {
        $produk = new Produk;
        $produk->nama = $request->nama;
        $produk->harga = $request->harga;
        $produk->jumlah = $request->jumlah;
        $produk->deskripsi = $request->deskripsi;

        $produk->save();
        return 
        response()->json([
            "message" => "post method success",
            "data" => $produk
        ]);
    }

    public function get() {
        return 
            Produk::all();
    }

    public function getById($id) {
            $data = Produk::where('id', $id)->get();

            return 
                response()->json([
                    "message" => "Success",
                    "data" => $data
                ]);
    }

    public function put($id, Request $request){
        $produk = Produk::where('id', $id)->first();

        if($produk){
            $produk->nama = $request->nama ? $request->nama : $produk->nama;
            $produk->harga = $request->harga ? $request->harga : $produk->harga;
            $produk->jumlah = $request->jumlah ? $request->jumlah : $produk->jumlah;
            $produk->deskripsi = $request->deskripsi ? $request->deskripsi : $produk->deskripsi;
            return 
                response()->json([
                    "message" => "Put method success ",
                    "data" => $produk
                ]);
        }
        return 
            response()->json([
                "message" => "Put method failed " .$id
            ]);
    }

    public function delete($id){
        $produk = Produk::where('id', $id)->delete();
        if($produk){
            return
                response()->json([
                    "message" => "delete produk id " . $id . " success"
                ]);
        }
    }
}
