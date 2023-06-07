<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use App\Models\Review;
use App\Models\Event;
use App\Models\Rekomendasi;
use Illuminate\Http\Request;

class dashboardAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function search(Request $request){
        $w = Wisata::query();
        $prods = Event::paginate(3);

        $w->when($request->nama, function($query) use ($request){
            return $query->where('nama', 'like', '%'.$request->nama. '%');
        });

        $w->when($request->tipe, function($query) use ($request){
            return $query->whereTipe($request->tipe);
        });

        return view('DashboardAdmin',[
            "title" => "Home",
            'list' => $prods,
            'tour' => $w->paginate(10)->withQueryString()
        ]);
    }
    public function index(){
        $data = Wisata::paginate(8);
        $prods = Event::paginate(3);

	    return view('DashboardAdmin', [
            'list' => $prods,
            "title" => "Home",
            "active" => "Home",
            "tour" => $data,

        ]);
    }



    /**
     * Display the specified resource.
     */
    public function show(Wisata $wisata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Wisata $wisata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wisata $wisata)
    {
        //
    }



    public function detail($id)
    {
        $data = Wisata::where('id', $id)->first();
        $review = Review::where('id_wisata', $id)->paginate(4);

        return view('detailWisataAdmin', [
            "tour" => $data,
            "review" => $review
        ]);
    }


    public function store(Request $request, $id, $nama)
    {
        //$data = Wisata::where('id', $id)->first();
        $validatedata = $request->validate([
            //'id_wisata' => 'required',
            //'nama_wisata' => 'required',
            //'nama_user' => 'required',
            'komentar' => 'required',
            'rating' => 'required',
            //'komentar' => 'required',
        ]);


        $data = Wisata::where('id', $id)->first();
        $review = Review::where('id_wisata', $id)->paginate(4);
        $r = new Review;
        $r->id_wisata = $id;
        $r->nama_wisata = $nama;
        $r->nama_user = "Akmal";
        $r->rating = $request->rating;
        $r->komentar = $request->komentar;

        //Update total rating
        $w = Wisata::find($id);
        $w->total_ulasan = $w->total_ulasan + 1;
        $w->total_rating = ($w->total_rating + $r->rating)/$w->total_ulasan;


        $w->save();
        $r->save();
        return view('detailWisataAdmin', [
            "tour" => $data,
            "review" => $review
        ]);
    }
}
