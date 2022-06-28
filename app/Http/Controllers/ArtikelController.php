<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{

    public function table () {
        $artikel = Artikel::all();

        return view ('back.artikel.index', ['artikel' => $artikel]);
    }

    public function create() {
        $kategori = Kategori::all();

        return view ('back.artikel.create', ['kategori' => $kategori]);
    }

    public function store(Request $request) {
     $data = $request->all();
     $data['slug'] = Str::slug($request->judul);
     $data['user_id'] = Auth::id();
     $data['views'] = 0;
     $data['gambar_artikel'] = $request->file('gambar_artikel')->store('artikel');

     Artikel::create($data);

     return redirect(route('artikel.table'));

    }

    public function edit($id){
        $artikel = Artikel::find($id);
        $kategori = Kategori::all();

        return view('back.artikel.edit', [
            'artikel' => $artikel,
            'kategori' => $kategori
        ]);
    }

    public function update(Request $request, $id)
    {
        if(empty($request->file('gambar_artikel'))){
            $artikel = Artikel::find($id);
            $artikel->update([
                'judul' => $request->judul,
                'body' => $request->body,
                'slug' => Str::slug($request->judul),
                'kategori_id' => $request->kategori_id,
                'is_active' => $request->is_active,
                'user_id' => Auth::id(),
            ]);
            return redirect()->route('artikel.table')->with(['success' => 'Data Berhasil di update']);
        } else {
            $artikel = Artikel::find($id);
            Storage::delete($artikel->gambar_artikel);
            $artikel->update([
                'judul' => $request->judul,
                'body' => $request->body,
                'slug' => Str::slug($request->judul),
                'kategori_id' => $request->kategori_id,
                'is_active' => $request->is_active,
                'user_id' => Auth::id(),
                'gambar_artikel' => $request->file('gambar_artikel')->store('artikel'),
            ]);
            return redirect()->route('artikel.table')->with(['success' => 'Data Berhasil di update']);
        }
    }

    public function destroy($id)
    {
        $artikel = Artikel::find($id);

        $artikel->delete();

        return redirect()->route('artikel.table')->with(['success' => 'Data Berhasil dihapus']);
    }

}
