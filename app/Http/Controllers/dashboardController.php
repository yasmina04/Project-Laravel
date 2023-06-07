<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Wisata;
use App\Models\Review;
use App\Models\Event;
use App\Models\Rekomendasi;
class dashboardController extends Controller
{
    public function index(){
        $data = Wisata::paginate(8);
        $prods = Event::paginate(3);
        $recs = Rekomendasi::paginate(8);
        if (request()->segment(1)=='api') return response()->json([
            'list' => $prods,
            "title" => "Home",
            "active" => "Home",
            "tour" => $data,
            "data" => $recs,
        ]);
	    return view('Dashboard', [
            'list' => $prods,
            "title" => "Home",
            "active" => "Home",
            "tour" => $data,
            "data" => $recs,
        ]);
    }

    public function search(Request $request){
        $data = Wisata::paginate(8);
        $prods = Event::paginate(3);
        $recs = Rekomendasi::paginate(8);

        $w = Wisata::query();

        $w->when($request->nama, function($query) use ($request){
            return $query->where('nama', 'like', '%'.$request->nama. '%');
        });

        $w->when($request->tipe, function($query) use ($request){
            return $query->whereTipe($request->tipe);
        });

        return view('Dashboard',[
            "title" => "Home",
            'tour' => $w->paginate(10)->withQueryString(),
                'list' => $prods,
                "title" => "Home",
                "active" => "Home",

                "data" => $recs,

        ]);
    }

    public function detail($id)
    {
        $data = Wisata::where('id', $id)->first();
        $review = Review::where('id_wisata', $id)->paginate(4);

        return view('detailWisata', [
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
        return view('detailWisata', [
            "tour" => $data,
            "review" => $review
        ]);
    }

}
