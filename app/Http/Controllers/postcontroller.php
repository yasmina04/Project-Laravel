<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;

class postcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Wisata::paginate(10);
        if (request()->segment(1)=='api') return response()->json([
            "error" => false,
            "list" => $data,
        ]);
        return view ('wisata.index',['list' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('wisata.form', [
            'title' => 'Tambah',
            'method' => 'POST',
            'action' => 'wisata'
            ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedata = $request->validate([
            'nama' => 'required|min:4',
            'ket' => 'required',
            'lokasi' => 'required',
            'tipe' => 'required',
            'maps' => 'required',
            'detail' => 'required',
            'img' => 'required|image|file'
        ]);

        $path = $request->file('img')->store(
            'post-images', 'public'
        );



        $w = new Wisata;
        $w->nama = $request->nama;
        $w->ket = $request->ket;
        $w->lokasi = $request->lokasi;
        $w->tipe = $request->tipe;
        $w->maps = $request->maps;
        $w->detail = $request->detail;
        $w->total_rating = 0;
        $w->total_ulasan = 0;
        $w->img = $path;

        $w->save();
        return redirect('/wisata');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Wisata::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {

        return view('wisata.edit', [
            'title' => 'Edit',
            'method' => 'PUT',
            'action' => "wisata/$id",
            'data' => Wisata::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedata = $request->validate([
            'nama' => 'required|min:4',
            'ket' => 'required',
            'lokasi' => 'required',
            'tipe' => 'required',
            'maps' => 'required',
            'detail' => 'required',
            'img' => 'required|image|file'
        ]);

        $path = $request->file('img')->store(
            'post-images', 'public'
        );

        if($request->oldimage){
            Storage::delete($request->oldimage);
        }

        $w = Wisata::find($id);
        $w->nama = $request->nama;
        $w->ket = $request->ket;
        $w->lokasi = $request->lokasi;
        $w->tipe = $request->tipe;
        $w->maps = $request->maps;
        $w->detail = strip_tags($request->detail);
        $w->img = $path;

        $w->save();
        return redirect('/wisata');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $del = Wisata::findOrfail($id);

        if(isset($del->img)&&file_exists('storage/'.$del->img)){
            unlink('storage/'.$del->img);
        }

        Wisata::destroy($id);
        return redirect('/wisata');
    }


}
