<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
          $users = User::get();
          return view('Login', ['list' => $users]);
    }

    public function create()
    {
          return view('Register', [
            'title' => 'Tambah',
            'method' => 'POST',
            'action' => 'Login'
      ]);
    }

    public function store(Request $request)
    {
          $user = new User;
          $user->username = $request->username;
          $user->gender = '';
          $user->email = $request->email;
          $user->password = Hash::make($request->password);
          $user->foto = NULL;
          $user->save();
          return redirect('Login')->with('msg', 'Register berhasil');
    }

    public function loginPage(){
      return view('Login');

    }

    // public function login(Request $request){

    //   Session::flash('email', $request->email);

    //   $request->validate([
    //         'email' => 'required',
    //         'password' => 'required'
    //   ],[
    //         'email.required' => 'Email wajib diisi',
    //         'password.required' => 'Password wajib diisi'

    //   ]);

    //   $infologin = [
    //         'email'=>$request->email,
    //         'password'=>$request->password
    //   ];

    //   if(Auth::attempt($infologin)){
    //         return redirect('Dashboard')->withErrors('Berhasil Login');

    //   } else {
    //         return 'gagal';

    //   }

    // }



    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('/Home');
        }

        return back()->withErrors([
            'password' => 'Wrong username or password',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function profile($id){
        $data=User::where('id',$id)->first();
        // dd($data);
        return view('UserProfile')->with('data',$data);

    }

    public function updateprofile(Request $request, string $id)
    {
        $w = User::find($id);
        $w->username = $request->username;
        $w->gender = $request->gender;
        $w->email = $request->email;
        $w->password = Hash::make($request->password);

        $file = $request->file('foto');
        //make sure yo have image folder inside your public
        $destination_path = 'image/';
        $profileImage = date("Ymd").".".$file->getClientOriginalName();
        $file->move($destination_path, $profileImage);
        //save the link of thumbnail into myslq database
        $w->foto = $destination_path . $profileImage;

        $w->save();

        return redirect()->back();

    }
}
