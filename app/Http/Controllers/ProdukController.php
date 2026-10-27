<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// class ProdukController extends Controller
// {
//     //
//     public function index()
//     {
//         $produk = [
//             ['id' => 1, 'nama' => 'keyboard', 'harga' => 150000, 'stok' => 12],
//             ['id' => 2, 'nama' => 'Mouse', 'harga' => 85000, 'stok' => 0],
//         ];

//         return view('produk.index', compact('produk'));
//     }

//     public function show(int $id) //parameter dari url
//     {
//         abort_unless($id <= 2, 404);
//         return view('produk.show', ['id' => $id]);
//     }

//     public function store(Request $request)
//     {
//         $data = $request->validate(['nama' => 'required|max:100', 'harga' => 'required|integer']);

//         return redirect()->route('produk.index')->with('status', 'Tersimpan');
//     }
// }
class ProdukController extends Controller
{
    public function index()
    {
        return view('produk.product');
    }

    public function show(int $id)
    {
        return view('produk.product', ['id' => $id]);
        // return 'produk' . $id;
    }

    public function showw($id)
    {
        $data = $id;
        return view('produk.show', compact('data'));
    }
}
