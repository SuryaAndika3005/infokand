<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Menampilkan Halaman Utama (Welcome) 
     * Halaman ini kini merangkap sebagai area manajemen bagi user yang sudah login.
     */
    public function index()
    {
        // Ambil 6 proyek terbaru untuk ditampilkan di bagian Featured Websites
        $featured_projects = Project::latest()->limit(6)->get();
        
        $myProject = null;
        // Jika user sudah login, ambil data proyek miliknya sendiri berdasarkan nama author
        if (Auth::check()) {
            $myProject = Project::where('author', Auth::user()->name)->first();
        }

        return view('welcome', compact('featured_projects', 'myProject'));
    }

    /**
     * Menampilkan Halaman Galeri Semua Proyek dengan fitur Search dan Sort.
     */
    public function projects(Request $request)
    {
        $search = $request->query('search');
        $sort = $request->query('sort');

        $query = Project::query();

        // Fitur Pencarian berdasarkan Judul Proyek atau Nama Mahasiswa (Author)
        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', '%' . $search . '%')
                  ->orWhere('author', 'like', '%' . $search . '%');
            });
        }

        // Fitur Pengurutan
        if ($sort == 'name') {
            $query->orderBy('title', 'asc'); // Urutkan A-Z berdasarkan Judul
        } else {
            $query->latest(); // Default: Proyek terbaru yang diupload
        }

        $all_projects = $query->get();
        
        // Cek proyek milik sendiri agar bisa ditampilkan secara khusus di halaman galeri jika login
        $myProject = null;
        if (Auth::check()) {
            $myProject = Project::where('author', Auth::user()->name)->first();
        }

        return view('projects', compact('all_projects', 'myProject', 'search', 'sort'));
    }

    /**
     * Menyimpan Proyek baru ke database (Fitur Add Project).
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'website_url' => 'required|url',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048', 
        ]);

        // Validasi: 1 Mahasiswa hanya boleh memiliki 1 Project di galeri
        $exists = Project::where('author', Auth::user()->name)->exists();
        if ($exists) {
            return back()->withErrors(['error' => 'Anda sudah memiliki website di galeri.']);
        }

        // Proses Simpan File Thumbnail ke folder storage/app/public/thumbnails
        $thumbnailPath = null;
        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        Project::create([
            'author' => Auth::user()->name,
            'title' => $request->title,
            'description' => $request->description,
            'website_url' => $request->website_url,
            'thumbnail' => $thumbnailPath,
        ]);

        // Setelah upload, kembali ke halaman utama
        return redirect()->route('home')->with('success', 'Website Anda berhasil dipublikasikan!');
    }

    /**
     * Memperbarui data Proyek yang sudah ada (Fitur Edit Project).
     */
    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        
        // Keamanan: Pastikan hanya pemilik asli (berdasarkan nama) yang bisa mengedit
        if ($project->author !== Auth::user()->name) { 
            return back()->withErrors(['error' => 'Akses ditolak. Anda bukan pemilik proyek ini.']);
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'website_url' => 'required|url',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $project->title = $request->title;
        $project->description = $request->description;
        $project->website_url = $request->website_url;

        // Jika user mengunggah foto thumbnail baru untuk mengganti yang lama
        if ($request->hasFile('thumbnail')) {
            // Hapus file thumbnail lama dari folder storage agar tidak menumpuk
            if ($project->thumbnail) {
                Storage::disk('public')->delete($project->thumbnail);
            }
            
            // Simpan foto thumbnail yang baru
            $path = $request->file('thumbnail')->store('thumbnails', 'public');
            $project->thumbnail = $path;
        }

        $project->save();
        
        // Setelah edit, kembali ke halaman utama
        return redirect()->route('home')->with('success', 'Informasi proyek berhasil diperbarui!');
    }
}