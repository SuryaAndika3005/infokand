<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Websites - Informatika'23</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-white antialiased min-h-screen flex flex-col">

    @php
        // SIMULASI KONDISI: 
        // Ubah nilai ini menjadi 'false' untuk melihat tampilan "Tampilan 2" (Banner Add Website)
        // Ubah menjadi 'true' untuk melihat "Tampilan 1" (Card Your Website)
        $hasWebsite = true; 
    @endphp

    <div class="pt-6 px-4 md:px-8 max-w-7xl mx-auto w-full">
        <header class="bg-white py-3 px-6 md:px-8 rounded-full flex justify-between items-center border border-gray-100 shadow-sm">
            <div class="flex items-center gap-8">
                <a href="/" class="text-xl font-bold text-[#0d8276]">Informatika<span class="text-gray-900">'23</span></a>
                <nav class="hidden md:flex gap-6 text-sm font-medium">
                    <a href="/" class="text-gray-600 hover:text-[#0d8276] transition">Beranda</a>
                    <a href="#" class="text-gray-600 hover:text-[#0d8276] transition">Tentang Kami</a>
                    <a href="/projects" class="text-[#0d8276] border-b-2 border-[#0d8276] pb-1">Proyek</a>
                </nav>
            </div>
            <div class="flex items-center gap-4 text-sm font-medium">
                <button class="text-gray-500 hover:text-[#0d8276] transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                </button>
                <div class="flex items-center gap-3 pl-4 border-l border-gray-200 cursor-pointer group">
                    <span class="text-gray-700 text-[11px] font-bold tracking-wider uppercase group-hover:text-[#0d8276] transition">Surya Andika</span>
                    <img src="https://ui-avatars.com/api/?name=Surya+Andika&background=f1f5f9&color=0d8276" alt="Profile" class="w-8 h-8 rounded-full border border-gray-200 group-hover:border-[#0d8276] transition">
                </div>
            </div>
        </header>
    </div>

    <main class="flex-grow max-w-7xl mx-auto w-full px-4 md:px-8 py-12">
        
        <div class="mb-10">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Student Websites</h1>
            <p class="text-gray-500 text-lg max-w-2xl">
                Explore personal websites from Informatika'23 students. A curated gallery of individual innovation.
            </p>
        </div>

        @if($hasWebsite)
            <div class="mb-12">
                <h2 class="text-lg font-semibold text-gray-900 mb-4">Your Website</h2>
                <div class="bg-[#f8fafc] rounded-3xl p-8 flex flex-col md:flex-row items-center gap-8 border border-gray-100">
                    <div class="flex-1">
                        <div class="inline-flex items-center gap-1.5 bg-teal-50 text-[#0d8276] px-3 py-1 rounded-full text-xs font-semibold mb-4 border border-teal-100">
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            Your Website
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Surdik's Website</h3>
                        <p class="text-gray-500 text-sm mb-8 leading-relaxed max-w-md">
                            A collection of essays, projects, and half-baked ideas about human-computer interaction.
                        </p>
                        <div class="flex items-center gap-3">
                            <button class="bg-[#e2e8f0] hover:bg-gray-300 text-gray-700 px-6 py-2.5 rounded-full font-medium text-sm transition">
                                Detail
                            </button>
                            <button class="bg-[#0d8276] hover:bg-[#0a6b61] text-white px-6 py-2.5 rounded-full font-medium text-sm flex items-center gap-2 transition">
                                Visit Website
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </button>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 rounded-2xl overflow-hidden shadow-lg border border-gray-200">
                        <img src="https://placehold.co/800x500/f8fafc/64748b?text=Portfolio+Mockup+Surdik" alt="My Website" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        @else
            <div class="mb-12 bg-[#eef9f8] border border-teal-100 rounded-2xl p-5 md:p-6 flex flex-col md:flex-row justify-between items-center gap-4">
                <div class="flex items-center gap-4">
                    <div class="bg-[#0d8276]/10 text-[#0d8276] p-3 rounded-full">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>
                    </div>
                    <div>
                        <h3 class="text-gray-900 font-bold mb-0.5">You haven't added your website yet</h3>
                        <p class="text-[#0d8276] text-sm font-medium">Showcase your personal website to your classmates.</p>
                    </div>
                </div>
                <button class="bg-[#0d8276] hover:bg-[#0a6b61] text-white px-6 py-2.5 rounded-full font-medium text-sm transition whitespace-nowrap shadow-sm">
                    Add Website
                </button>
            </div>
        @endif

        <div class="bg-[#f8fafc] p-2 rounded-2xl border border-gray-100 flex flex-col md:flex-row gap-2 mb-10">
            <div class="relative flex-grow">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <svg class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                </div>
                <input type="text" class="w-full bg-transparent text-gray-900 text-sm rounded-xl py-3 pl-10 pr-4 focus:outline-none focus:ring-2 focus:ring-[#0d8276] transition" placeholder="Search projects by name, author, or keyword...">
            </div>
            <button class="bg-gray-100 hover:bg-gray-200 text-gray-700 text-sm font-semibold rounded-xl py-3 px-5 flex items-center justify-between min-w-[160px] transition">
                Sort by: Newest
                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
        </div>

        <div>
            <h2 class="text-lg font-semibold text-gray-900 mb-6">All Websites</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @for ($i = 0; $i < 6; $i++)
                <div class="bg-white rounded-[24px] p-4 shadow-sm border border-gray-100 hover:shadow-lg hover:-translate-y-1 transition duration-300 flex flex-col group">
                    <div class="overflow-hidden rounded-xl mb-4 h-48 bg-gray-50 border border-gray-100">
                        <img src="https://placehold.co/600x400/{{ $i % 2 == 0 ? '1e293b' : '0f172a' }}/white?text=Preview+{{ $i+1 }}" alt="Project" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    
                    <div class="flex items-center gap-2 mb-3 px-2">
                        <img src="https://ui-avatars.com/api/?name=User+{{ $i+1 }}&background=random&color=fff" alt="Avatar" class="w-6 h-6 rounded-full">
                        <span class="text-xs font-semibold text-gray-700">Student Name {{ $i+1 }}</span>
                    </div>
                    
                    <h3 class="text-lg font-bold text-gray-900 mb-2 px-2">Project Title {{ $i+1 }}</h3>
                    <p class="text-sm text-gray-500 mb-6 line-clamp-2 px-2 flex-grow">
                        Exploring the intersection of data science and generative art. Weekly updates on my thesis.
                    </p>
                    
                    <a href="#" class="flex justify-center items-center gap-2 w-full bg-[#f1f5f9] hover:bg-gray-200 text-gray-800 font-semibold py-3 rounded-xl text-sm transition mt-auto">
                        View Website 
                        <svg class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                    </a>
                </div>
                @endfor
            </div>

            <div class="mt-12 flex justify-center">
                <button class="bg-[#f1f5f9] hover:bg-[#e2e8f0] text-[#0d8276] font-bold py-2.5 px-6 rounded-full flex items-center gap-2 transition text-sm">
                    Load More Projects
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
            </div>
        </div>

    </main>

    <footer class="bg-[#f8fafc] py-8 px-8 border-t border-gray-100 mt-12">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-4">
            <a href="/" class="text-sm font-bold text-[#0d8276]">Informatika<span class="text-gray-900">'23</span></a>
            <div class="flex gap-6 text-xs text-gray-500 font-medium">
                <a href="#" class="hover:text-[#0d8276] transition">Privacy Policy</a>
                <a href="#" class="hover:text-[#0d8276] transition">Terms of Service</a>
                <a href="#" class="hover:text-[#0d8276] transition">Contact Support</a>
                <a href="#" class="hover:text-[#0d8276] transition">Archive</a>
            </div>
            <p class="text-[10px] text-gray-400 font-medium uppercase tracking-wider">© 2024 INFORMATIKA'23 WEBSITE. ALL RIGHTS RESERVED.</p>
        </div>
    </footer>

</body>
</html>