<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Wisata;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
	    $prods = Event::paginate(10);
	    return view('event/index', ['list' => $prods]);
    }

    public function index2(){
      $prods = Event::paginate(3);
    //   $recs = Rekomendasi::paginate(8);
	    return view('Dashboard', [
            'list' => $prods]);
    }

    public function index3($id){
      $prods = Event::where('id', $id)->first();
	    return view('detailEvent')->with('list', $prods);
    }

  public function create()
  {
	    return view('event.form', [
	      'title' => 'Tambah',
	      'method' => 'POST',
	      'action' => 'event/create'
    ]);
  }

  public function store(Request $request)
  {
	    $prod = new Event;
	    $prod->judul = $request->judul;
	    $prod->lokasi = $request->lokasi;
        $prod->tanggal = $request->tanggal;
        $prod->detail = $request->detail;
            #$prod->gambar = $request->gambar;
        $file = $request->file('img');
            //make sure yo have image folder inside your public
        // $path = $request->file('img')->store(
        //         'post-images', 'public'
        // );
        // $prod->img = $path;

        $destination_path = 'image/';
        $profileImage = date("Ymd").".".$file->getClientOriginalName();
        $file->move($destination_path, $profileImage);
            //save the link of thumbnail into myslq database
        $prod->img = $destination_path . $profileImage;
        $prod->save();
	    return redirect('/event')->with('msg', 'Tambah berhasil');
  }

  public function show($id)
  {
	    return Event::find($id);
  }

  public function edit($id)
  {
	    return view('event.form', [
	      'title' => 'Edit',
	      'method' => 'POST',
	      'action' => "event/$id",
	      'data' => Event::find($id)
    ]);
  }

  public function update(Request $request, $id)
  {
        $prod= Event::where('id',$id)->first();
	      $prod->judul = $request->judul;
	      $prod->lokasi = $request->lokasi;
        $prod->tanggal = $request->tanggal;
        $prod->detail = $request->detail;
        $file = $request->file('img');
        //make sure yo have image folder inside your public
        $destination_path = 'image/';
        $profileImage = date("Ymd").".".$file->getClientOriginalName();
        $file->move($destination_path, $profileImage);
        //save the link of thumbnail into myslq database
        $prod->img = $destination_path . $profileImage;
	      $prod->save();
	      return redirect()->route('tabel')->with('msg', 'Edit berhasil');
  }

  public function destroy($id)
  {
	    #Event::destroy($id);
        #$prod= Event::where('id',$id)->first();
        #$prod->delete();
    // atau
	    $prod = Event::find($id);
	    $prod->delete();
	    return redirect('/event')->with('msg', 'Hapus berhasil');
  }


    public function filterRecommend(Request $request){
        #$w = Rekomendasi::query();
        $prods = Event::paginate(3);
        $data = Wisata::paginate(8);
        #$w = Rekomendasi::all()->sortByDesc($request->total_ulasan);
        #$w = Rekomendasi::where('total_ulasan', $total_ulasan>40)->paginate(2);
        $w = Wisata::orderByDesc("total_ulasan")->get();
        return view('Dashboard',[
            "title" => "Home",
            'data' => $w,
            'list' => $prods,
            'tour' => $data,
            'mark' => 'Rekomendasi'
    ]);
    }

    public function filterPopular(Request $request){
        #$w = Rekomendasi::query();
        $prods = Event::paginate(3);
        $data = Wisata::paginate(8);
        #$w = Rekomendasi::all()->sortByDesc($request->total_rating);
        #$w = Rekomendasi::where('total_rating', $total_rating>3.0)->paginate(2);
        $w = Wisata::orderByDesc("total_rating")->get();
        return view('Dashboard',[
            "title" => "Home",
            'data' => $w,
            'list' => $prods,
            'tour' => $data,
        ]);
    }
}

