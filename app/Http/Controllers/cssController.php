<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Berita;
use App\Kategori;

class cssController extends Controller
{

            public function Rumah()
              {
                return view('Rumah');
              }

            public function welcome()
             {
             return view('welcome');
            }

            public function login()
             {
             return view('login');
            }

            public function index()
              {
                $Berita = Berita::all();
                return view('Tampilan', ['berita' => $Berita]);// view,tabel,variabel
              }

              public function tambah(){
                return view ('berita_tambah');
              }

              public function store(Request $request)
              {
                $this->validate($request,[
                  'judul_berita' => 'required|min:8|max:20',
                  'penulis_berita' => 'required|min:5|max:20',
                  'tanggal_berita' => 'required|date',
                  'isi_berita' => 'required|min:20|max:150'
                  ]);

                Berita::create([
                  'judul_berita' => $request->judul_berita,
                  'penulis_berita' => $request->penulis_berita,
                  'tanggal_berita' => $request->tanggal_berita,
                  'isi_berita' => $request->isi_berita
                ]);

                  return redirect('/home');
                }

              public function edit($id_berita)

              {

                $Berita = Berita::find($id_berita);

                return view('berita_edit', ['berita' => $Berita]);
                }

              public function update($id_berita, Request $request)
              {
                $this->validate($request,[
                  'judul_berita' => 'required|min:8|max:20',
                  'penulis_berita' => 'required|min:5|max:20',
                  'tanggal_berita' => 'required|date',
                  'isi_berita' => 'required|min:20|max:150'

                  ]);

                  $Berita = Berita::find($id_berita);
                  $Berita->judul_berita = $request->judul_berita;
                  $Berita->penulis_berita = $request->penulis_berita;
                  $Berita->tanggal_berita = $request->tanggal_berita;
                  $Berita->isi_berita = $request->isi_berita;

                  $Berita->save();
                  return redirect('/Berita');
                }

      public function delete($id_berita)
        {
          $Berita = Berita::find($id_berita);
          $Berita->delete();
          return redirect()->back();
        }

        public function pivot (Request $request){
          $Berita = new Berita ;
          $Berita->judul_berita = 'angin sejuk';
          $Berita->penulis_berita = 'Rahman';
          $Berita->tanggal_berita = '2000-07-14';
          $Berita->isi_berita = 'Anda pintar';

          $Berita-> save();
          $kategori = Kategori::find([1]);

          $Berita->kategori()->attach($kategori);

          return 'Anda Pintar';

        }
}
