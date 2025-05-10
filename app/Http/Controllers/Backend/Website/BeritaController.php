<?php

namespace App\Http\Controllers\Backend\Website;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\KategoriBerita;
use Illuminate\Http\Request;
use App\Http\Requests\BeritaRequest;
use ErrorException;
use Session;
use Str;
use Auth;

class BeritaController extends Controller
{
    public function index()
    {
        $kategori = KategoriBerita::where('is_active', '0')->get();
        $berita = Berita::where('is_active', '0')->latest()->get();
        return view('backend.website.content.berita.index', compact('kategori', 'berita'));
    }

    public function filterByCategory($id)
    {
        $kategori = KategoriBerita::where('is_active', '0')->get();
        $berita = Berita::where('kategori_id', $id)->where('is_active', '0')->latest()->get();
        $selectedCategory = KategoriBerita::find($id);
        return view('backend.website.content.berita.index', compact('kategori', 'berita', 'selectedCategory'));
    }

    public function create()
    {
        $kategori = KategoriBerita::where('is_active', '0')->get();
        return view('backend.website.content.berita.create', compact('kategori'));
    }

    public function store(BeritaRequest $request)
    {
        try {
            $image = $request->file('thumbnail');
            $nama_image = time() . "_" . $image->getClientOriginalName();
            $tujuan_upload = 'public/images/berita';
            $image->storeAs($tujuan_upload, $nama_image);

            $slug = Str::slug($request->title);

            $berita = new Berita;
            $berita->title = $request->title;
            $berita->slug = $slug;
            $berita->content = $request->content;
            $berita->kategori_id = $request->kategori_id;
            $berita->thumbnail = $nama_image;
            $berita->created_by = Auth::id();
            $berita->is_active = '0';
            $berita->save();

            Session::flash('success', 'Berita Berhasil ditambah!');
            return redirect()->route('backend-berita.index');
        } catch (ErrorException $e) {
            throw new ErrorException($e->getMessage());
        }
    }

    public function edit($id)
    {
        $kategori = KategoriBerita::where('is_active', '0')->get();
        $berita = Berita::find($id);
        return view('backend.website.content.berita.edit', compact('kategori', 'berita'));
    }

    public function update(BeritaRequest $request, $id)
    {
        try {
            if ($request->thumbnail) {
                $image = $request->file('thumbnail');
                $nama_image = time() . "_" . $image->getClientOriginalName();
                $tujuan_upload = 'public/images/berita';
                $image->storeAs($tujuan_upload, $nama_image);
            }

            $berita = Berita::find($id);
            $berita->title = $request->title;
            $berita->slug = $berita->slug;
            $berita->content = $request->content;
            $berita->kategori_id = $request->kategori_id;
            $berita->thumbnail = $nama_image ?? $berita->thumbnail;
            $berita->is_active = $request->is_active;
            $berita->save();

            Session::flash('success', 'Berita Berhasil diupdate!');
            return redirect()->route('backend-berita.index');
        } catch (ErrorException $e) {
            throw new ErrorException($e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $berita = Berita::findOrFail($id);
            if ($berita->thumbnail && Storage::exists('public/images/berita/' . $berita->thumbnail)) {
                Storage::delete('public/images/berita/' . $berita->thumbnail);
            }
            $berita->delete();

            Session::flash('success', 'Berita berhasil dihapus!');
            return redirect()->route('backend-berita.index');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
