<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::all();

        return view('pages.berita', compact('berita'));
    }
    public function detail_berita(Request $request)
    {
        $berita = Berita::where('id', $request->id)
        ->where('berita_tag_id', NULL)
        ->first();
        return view('pages.detail_berita', compact('berita'));
    }

    public function detail()
    {
        return view('pages.detail_berita', []);
    }
}