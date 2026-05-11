<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/img/LOGO IF.png" type="image/png">
    <title>Dashboard - Informatika'23</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
        #grainient-container { position: absolute; inset: 0; width: 100%; height: 100%; z-index: 0; pointer-events: none; }
        #grainient-container canvas { width: 100% !important; height: 100% !important; display: block; }
    </style>
</head>
<body class="bg-[#f8fafc] antialiased flex flex-col min-h-screen relative">

    <div class="relative">
        <x-navbar />

        <section class="text-white pt-40 pb-24 px-8 overflow-hidden relative bg-[#0b1727]">
            <div id="grainient-container"></div>
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="z-10">
                    <h1 class="text-5xl md:text-6xl font-bold leading-tight mb-6">
                        Welcome, <br> <span class="text-teal-400">{{ auth()->user()->name }}</span>
                    </h1>
                    <p class="text-gray-300 text-lg mb-8 max-w-md">
                        Kelola kehadiran digital Anda di direktori Informatika'23. Pastikan informasi website dan thumbnail Anda selalu memukau.
                    </p>
                    <div class="flex gap-4">
                        <a href="{{ route('projects') }}" class="bg-[#0d8276] hover:bg-[#0a6b61] px-6 py-3 rounded-full font-medium flex items-center gap-2 transition shadow-lg shadow-teal-500/20">
                            Explore Projects <span>→</span>
                        </a>
                        @if(!$myProject)
                            <button onclick="openModal()" class="inline-block border border-gray-400 hover:border-white px-6 py-3 rounded-full font-medium transition hover:bg-white/5 text-center cursor-pointer">
                                Add Your Project <span>+</span>
                            </button>
                        @endif
                    </div>
                </div>

                <div class="relative hidden md:block h-80">
                    <div class="absolute top-0 right-20 bg-gray-800 p-2 rounded-xl shadow-2xl border border-gray-700 w-64 transform rotate-[-5deg]">
                        <div class="w-full aspect-[400/250] bg-gray-900 rounded-lg overflow-hidden flex items-center justify-center p-4">
                            <img src="/assets/img/Logo Unand PTNBH.png" class="max-w-full max-h-full object-contain" alt="Unand">
                        </div>
                    </div>
                    <div class="absolute bottom-0 right-0 bg-gray-800 p-2 rounded-xl shadow-2xl border border-gray-700 w-64 transform rotate-[5deg]">
                        <div class="w-full aspect-[400/250] bg-gray-900 rounded-lg overflow-hidden flex items-center justify-center p-4">
                            <img src="/assets/img/LOGO IF.png" class="max-w-full max-h-full object-contain" alt="Informatika'23">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <main class="max-w-7xl mx-auto w-full px-4 md:px-8 py-20">
            
            @if(session('success'))
                <div class="bg-teal-50 text-teal-600 p-4 rounded-xl mb-8 font-bold border border-teal-100 flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                    {{ session('success') }}
                </div>
            @endif

            @if(!$myProject)
                <div class="bg-gray-50 border border-gray-100 rounded-[40px] py-24 px-6 flex flex-col items-center justify-center text-center shadow-sm">
                    <div class="bg-white p-5 rounded-full shadow-sm mb-8 flex items-center justify-center h-20 w-20">
                        <svg class="w-10 h-10 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    </div>
                    <h3 class="text-3xl font-extrabold text-gray-900 mb-4">You haven't added your website</h3>
                    <p class="text-gray-500 text-lg max-w-md mb-10 leading-relaxed">Mulai pamerkan inovasimu hari ini. Upload thumbnail, tautan, dan deskripsi proyek Anda.</p>
                    <button onclick="openModal()" class="bg-[#0d8276] hover:bg-[#0a6b61] text-white px-10 py-4 rounded-full font-bold flex items-center gap-3 transition shadow-lg shadow-teal-500/20">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg> Add Website
                    </button>
                </div>
            @else
                <div class="mb-10">
                    <h2 class="text-3xl font-bold text-gray-900 mb-8">Your Active Website</h2>
                    <div class="bg-white rounded-[32px] p-8 flex flex-col md:flex-row items-center gap-10 border border-gray-100 shadow-sm">
                        <div class="w-full md:w-1/2 rounded-2xl overflow-hidden shadow-inner bg-gray-50 aspect-video relative group">
                            <img src="{{ $myProject->thumbnail ? asset('storage/' . $myProject->thumbnail) : 'https://placehold.co/800x500/0b1727/white?text=' . urlencode($myProject->title) }}" class="w-full h-full object-cover">
                        </div>
                        <div class="flex-1">
                            <div class="inline-flex items-center gap-2 bg-teal-50 text-[#0d8276] px-4 py-1.5 rounded-full text-xs font-bold mb-6 border border-teal-100 uppercase tracking-widest">Terverifikasi</div>
                            <h3 class="text-3xl font-extrabold text-gray-900 mb-4">{{ $myProject->title }}</h3>
                            <p class="text-gray-500 mb-10 leading-relaxed">{{ $myProject->description }}</p>
                            
                            <div class="flex flex-wrap items-center gap-3">
                                <a href="{{ $myProject->website_url }}" target="_blank" class="bg-[#0d8276] hover:bg-[#0a6b61] text-white px-8 py-3.5 rounded-full font-bold inline-flex items-center gap-2 transition">
                                    Visit Website <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                </a>
                                <button onclick="openEditModal()" class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-8 py-3.5 rounded-full font-bold transition">
                                    Edit Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </main>

        <section class="bg-gray-50 py-20 px-8">
            <div class="max-w-7xl mx-auto">
                <div class="flex justify-between items-end mb-12">
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900 mb-2">Featured Websites</h2>
                        <p class="text-gray-500">Inspirasi karya dari teman-teman Informatika'23</p>
                    </div>
                    <a href="{{ route('projects') }}" class="text-[#0d8276] font-bold hover:text-[#0a6b61] flex items-center gap-1 transition">VIEW ALL <span>→</span></a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @forelse($featured_projects as $mhs)
                        <div class="bg-white rounded-[24px] p-4 shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition duration-300 group">
                            <div class="overflow-hidden rounded-xl mb-4 h-48 bg-gray-900">
                                <img src="{{ $mhs->thumbnail ? asset('storage/' . $mhs->thumbnail) : 'https://placehold.co/600x400/1e293b/white?text=' . urlencode($mhs->title) }}" 
                                     class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            </div>
                            <div class="flex items-center gap-2 mb-3">
                                <img src="{{ \App\Models\User::where('name', $mhs->author)->first()->profile_photo ?? false ? asset('storage/' . \App\Models\User::where('name', $mhs->author)->first()->profile_photo) : 'https://ui-avatars.com/api/?name='.urlencode($mhs->author).'&background=0d8276&color=fff' }}" class="w-6 h-6 rounded-full object-cover">
                                <span class="text-xs font-medium text-gray-600">{{ $mhs->author }}</span>
                            </div>
                            <h3 class="text-lg font-bold text-gray-900 mb-2">{{ $mhs->title }}</h3>
                            <p class="text-sm text-gray-500 mb-6 line-clamp-3">{{ $mhs->description }}</p>
                            <a href="{{ $mhs->website_url }}" target="_blank" class="block w-full text-center bg-gray-50 hover:bg-[#0d8276] hover:text-white text-gray-800 font-medium py-3 rounded-xl text-sm transition">View Website ↗</a>
                        </div>
                    @empty
                        <p class="col-span-full text-center text-gray-500 py-12 italic">Belum ada proyek yang dapat ditampilkan.</p>
                    @endforelse
                </div>
            </div>
        </section>

        <x-footer />
    </div>

    <div id="addProjectModal" class="fixed inset-0 z-[100] hidden bg-[#0b1727]/80 backdrop-blur-sm flex items-center justify-center transition-opacity duration-300 opacity-0 px-4">
        <div class="bg-white rounded-[32px] w-full max-w-xl p-8 md:p-10 shadow-2xl transform scale-95 transition-transform duration-300" id="modalContent">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-2xl font-extrabold text-gray-900">Add Your Project</h2>
                <button onclick="closeModal('addProjectModal', 'modalContent')" class="text-gray-400 hover:text-red-500 transition">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                </button>
            </div>
            <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                @csrf
                <div>
                    <label class="block text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-2 ml-1">Thumbnail Website (Wajib)</label>
                    <input type="file" name="thumbnail" accept="image/png, image/jpeg, image/webp" required class="w-full bg-gray-50 border border-gray-100 rounded-2xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#0d8276]/20 transition-all text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-xs file:font-bold file:bg-teal-50 file:text-[#0d8276] hover:file:bg-teal-100 cursor-pointer">
                </div>
                <div>
                    <label class="block text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-2 ml-1">Project Title</label>
                    <input type="text" name="title" required class="w-full bg-gray-50 border border-gray-100 rounded-2xl px-5 py-3 focus:outline-none focus:ring-2 focus:ring-[#0d8276]/20 focus:border-[#0d8276] transition-all">
                </div>
                <div>
                    <label class="block text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-2 ml-1">Description</label>
                    <textarea name="description" rows="3" required class="w-full bg-gray-50 border border-gray-100 rounded-2xl px-5 py-3 focus:outline-none focus:ring-2 focus:ring-[#0d8276]/20 focus:border-[#0d8276] transition-all resize-none"></textarea>
                </div>
                <div>
                    <label class="block text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-2 ml-1">Website URL</label>
                    <input type="url" name="website_url" required class="w-full bg-gray-50 border border-gray-100 rounded-2xl px-5 py-3 focus:outline-none focus:ring-2 focus:ring-[#0d8276]/20 focus:border-[#0d8276] transition-all">
                </div>
                <div class="pt-4">
                    <button type="submit" class="w-full bg-[#0d8276] hover:bg-[#0a6b61] text-white py-4 rounded-2xl font-bold shadow-lg shadow-teal-500/30 transition-all">Publish My Website</button>
                </div>
            </form>
        </div>
    </div>

    @if($myProject)
    <div id="editProjectModal" class="fixed inset-0 z-[100] hidden bg-[#0b1727]/80 backdrop-blur-sm flex items-center justify-center transition-opacity duration-300 opacity-0 px-4">
        <div class="bg-white rounded-[32px] w-full max-w-xl p-8 md:p-10 shadow-2xl transform scale-95 transition-transform duration-300" id="editModalContent">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-2xl font-extrabold text-gray-900">Edit Your Project</h2>
                <button onclick="closeModal('editProjectModal', 'editModalContent')" class="text-gray-400 hover:text-red-500 transition">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                </button>
            </div>
            <form action="{{ route('projects.update', $myProject->id) }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                @csrf
                @method('PUT')
                <div>
                    <label class="block text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-2 ml-1">Ganti Thumbnail (Opsional)</label>
                    <input type="file" name="thumbnail" accept="image/png, image/jpeg, image/webp" class="w-full bg-gray-50 border border-gray-100 rounded-2xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#0d8276]/20 transition-all text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-xs file:font-bold file:bg-teal-50 file:text-[#0d8276] hover:file:bg-teal-100 cursor-pointer">
                    <p class="text-[10px] text-gray-400 mt-1 ml-1">Biarkan kosong jika tidak ingin mengganti gambar.</p>
                </div>
                <div>
                    <label class="block text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-2 ml-1">Project Title</label>
                    <input type="text" name="title" value="{{ $myProject->title }}" required class="w-full bg-gray-50 border border-gray-100 rounded-2xl px-5 py-3 focus:outline-none focus:ring-2 focus:ring-[#0d8276]/20 focus:border-[#0d8276] transition-all">
                </div>
                <div>
                    <label class="block text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-2 ml-1">Description</label>
                    <textarea name="description" rows="3" required class="w-full bg-gray-50 border border-gray-100 rounded-2xl px-5 py-3 focus:outline-none focus:ring-2 focus:ring-[#0d8276]/20 focus:border-[#0d8276] transition-all resize-none">{{ $myProject->description }}</textarea>
                </div>
                <div>
                    <label class="block text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-2 ml-1">Website URL</label>
                    <input type="url" name="website_url" value="{{ $myProject->website_url }}" required class="w-full bg-gray-50 border border-gray-100 rounded-2xl px-5 py-3 focus:outline-none focus:ring-2 focus:ring-[#0d8276]/20 focus:border-[#0d8276] transition-all">
                </div>
                <div class="pt-4">
                    <button type="submit" class="w-full bg-[#0d8276] hover:bg-[#0a6b61] text-white py-4 rounded-2xl font-bold shadow-lg shadow-teal-500/30 transition-all">Update Project</button>
                </div>
            </form>
        </div>
    </div>
    @endif

    <script src="/assets/grainient.js"></script>
    <script>
        // SCRIPT JAVASCRIPT YANG SUDAH DIPERBAIKI
        function openModal() {
            const m = document.getElementById('addProjectModal');
            const mc = document.getElementById('modalContent');
            if(m && mc) {
                m.classList.remove('hidden'); void m.offsetWidth; m.classList.remove('opacity-0');
                mc.classList.remove('scale-95'); mc.classList.add('scale-100');
            }
        }

        function openEditModal() {
            const m = document.getElementById('editProjectModal');
            const mc = document.getElementById('editModalContent');
            if(m && mc) {
                m.classList.remove('hidden'); void m.offsetWidth; m.classList.remove('opacity-0');
                mc.classList.remove('scale-95'); mc.classList.add('scale-100');
            }
        }

        function closeModal(modalId, contentId) {
            const m = document.getElementById(modalId);
            const mc = document.getElementById(contentId);
            if(m && mc) {
                m.classList.add('opacity-0'); mc.classList.remove('scale-100'); mc.classList.add('scale-95');
                setTimeout(() => { m.classList.add('hidden'); }, 300);
            }
        }
    </script>
</body>
</html>