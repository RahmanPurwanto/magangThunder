<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Berita;
use App\Kategori;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $User = User::all();
        return view('home', ['users' => $User]);
    }

    public function deleteUser($id)
          {
            $User = User::find($id);
            $User->delete();
            return redirect()->back();
          }
}
