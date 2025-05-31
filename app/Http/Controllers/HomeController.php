<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $pengumumans = Pengumuman::with('admin')->published()->latest()->take(3)->get();
        return view('index', compact('pengumumans'));
    }

    public function pengumumanDetail($id)
    {
        $pengumuman = Pengumuman::with('admin')->findOrFail($id);
        $pengumumans = Pengumuman::published()->latest()->take(3)->get();

        return view('includes.Index.blog-detail', compact('pengumuman', 'pengumumans'));
    }

}