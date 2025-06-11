<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Keranjang;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    public function index()
    {
        $keranjang = Keranjang::where('user_id', auth()->id())->get();
        return view('user.keranjang.index', compact('keranjang'));
    }

    public function addItem(Request $request)
    {
        $keranjang = new Keranjang();
        $keranjang->user_id = auth()->id();
        $keranjang->produk_id = $request->produk_id;
        $keranjang->jumlah = $request->jumlah;
        $keranjang->save();

        return redirect()->route('keranjang.index');
    }

    public function removeItem($id)
    {
        $keranjang = Keranjang::findOrFail($id);
        $keranjang->delete();

        return redirect()->route('keranjang.index');
    }
}
