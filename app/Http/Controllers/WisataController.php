<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use App\Http\Requests\StoreWisataRequest;
use App\Http\Requests\UpdateWisataRequest;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
  {
        // $wisatas = Wisata::get();
        // return view('wisata.index', ['list' => $wisatas]);
  }

  public function create()
  {
    //     return view('wisata.form', [
    //       'title' => 'Tambah',
    //       'method' => 'POST',
    //       'action' => 'wisata'
    // ]);
  }

  public function store(Request $request)
  {
        // $wisata = new Wisata;
        // $wisata->nama = $request->nama;
        // $wisata->ket = $request->ket;
        // $wisata->lokasi = $request->lokasi;
        // $wisata->tipe = $request->tipe;
        // $wisata->save();
        // return redirect('/wisata')->with('msg', 'Tambah berhasil');
  }

  public function show($id)
  {
        return Wisata;
  }

  public function edit($id)
  {
    //     return view('create', [
    //       'title' => 'Edit',
    //       'method' => 'PUT',
    //       'action' => "wisata/$id",
    //       'data' => Wisata::find($id)
    // ]);
  }

  public function update(Request $request, $id)
  {
        // $wisata = Wisata::find($id);
        // $wisata->nama = $request->nama;
        // $wisata->ket = $request->ket;
        // $wisata->lokasi = $request->lokasi;
        // $wisata->tipe = $request->tipe;
        // $wisata->save();
        // return redirect('/wisata')->with('msg', 'Edit berhasil');
  }

  public function destroy($id)
  {

    // atau
        /* $prod = Product::find($id);
        $prod->delete(); */
        // Wisata::destroy($id);
        // return redirect('/wisata')->with('msg', 'Hapus berhasil');
  }
}
