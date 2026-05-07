<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surya Andika - Profile - Informatika'23</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-[#f8fafc] antialiased min-h-screen flex flex-col">

    <div class="pt-6 px-4 md:px-8 max-w-7xl mx-auto w-full">
        <header class="bg-white py-3 px-6 md:px-8 rounded-full flex justify-between items-center border border-gray-100 shadow-sm">
            <div class="flex items-center gap-8">
                <a href="/" class="text-xl font-bold text-[#0d8276]">Informatika<span class="text-gray-900">'23</span></a>
                <nav class="hidden md:flex gap-6 text-sm font-medium">
                    <a href="/" class="text-gray-600 hover:text-[#0d8276] transition">Beranda</a>
                    <a href="#" class="text-gray-600 hover:text-[#0d8276] transition">Tentang Kami</a>
                    <a href="/projects" class="text-gray-600 hover:text-[#0d8276] transition">Proyek</a>
                </nav>
            </div>
            <div class="flex items-center gap-4 text-sm font-medium">
                <button class="text-gray-500 hover:text-[#0d8276] transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                </button>
                <div class="flex items-center gap-3 pl-4 border-l border-gray-200 cursor-pointer group">
                    <span class="text-[#0d8276] text-[11px] font-bold tracking-wider uppercase">Surya Andika</span>
                    <img src="https://ui-avatars.com/api/?name=Surya+Andika&background=0b1727&color=fff" alt="Profile" class="w-8 h-8 rounded-full border-2 border-[#0d8276]">
                </div>
            </div>
        </header>
    </div>

    <main class="flex-grow w-full pt-10 pb-20">
        <div class="max-w-5xl mx-auto px-4 md:px-8">
            
            <div class="bg-gradient-to-br from-gray-50 to-gray-200/60 rounded-[2.5rem] p-8 md:p-12 shadow-sm border border-white flex flex-col md:flex-row items-center md:items-start gap-8 md:gap-12 relative overflow-hidden">
                
                <div class="absolute -right-20 -top-20 w-64 h-64 bg-teal-500/10 rounded-full blur-3xl pointer-events-none"></div>

                <div class="w-40 h-40 md:w-48 md:h-48 rounded-full border-[6px] border-white shadow-xl overflow-hidden flex-shrink-0 z-10">
                    <img src="https://ui-avatars.com/api/?name=Surya+Andika&background=0b1727&color=fff&size=300" alt="Surya Andika" class="w-full h-full object-cover">
                </div>

                <div class="flex flex-col items-center md:items-start text-center md:text-left z-10 pt-2">
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4 tracking-tight">Surya Andika</h1>
                    <p class="text-gray-600 text-lg mb-8 max-w-xl leading-relaxed">
                        Creative Developer & UI/UX enthusiast. Crafting digital experiences with precision.
                    </p>

                    <div class="bg-white rounded-full px-8 py-3 shadow-sm border border-gray-100 inline-flex items-center divide-x divide-gray-200">
                        <div class="flex flex-col items-center px-6">
                            <span class="text-[#0d8276] font-bold text-xl leading-none mb-1">1</span>
                            <span class="text-[9px] font-bold text-gray-400 tracking-widest uppercase">Featured Site</span>
                        </div>
                        <div class="flex flex-col items-center px-6">
                            <span class="text-[#0d8276] font-bold text-xl leading-none mb-1">1.2k</span>
                            <span class="text-[9px] font-bold text-gray-400 tracking-widest uppercase">Views</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-20">
                <h2 class="text-2xl font-bold text-gray-900 mb-8">Showcase</h2>

                <div class="bg-white rounded-[2.5rem] shadow-[0_8px_30px_rgb(0,0,0,0.04)] overflow-hidden flex flex-col md:flex-row border border-gray-50">
                    
                    <div class="w-full md:w-1/2 h-64 md:h-auto bg-[#f8f5ff] relative overflow-hidden">
                        <img src="https://placehold.co/800x800/f3e8ff/a855f7?text=Portfolio+Mockup" alt="Surdik's Website Mockup" class="w-full h-full object-cover">
                    </div>

                    <div class="w-full md:w-1/2 p-8 md:p-14 flex flex-col justify-center">
                        <div class="inline-flex items-center gap-1.5 bg-teal-50 text-[#0d8276] px-3 py-1.5 rounded-full text-[10px] font-bold tracking-wider uppercase mb-5 self-start border border-teal-100">
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            Featured Project
                        </div>
                        
                        <h3 class="text-3xl font-bold text-gray-900 mb-4">Surdik's Website</h3>
                        
                        <p class="text-gray-500 text-[15px] leading-relaxed mb-8">
                            A minimal and immersive journey through my work, featuring interactive case studies and creative code experiments.
                        </p>
                        
                        <a href="/projects/detail" class="bg-[#0d8276] hover:bg-[#0a6b61] text-white px-8 py-3.5 rounded-full font-bold inline-flex items-center justify-center gap-2 self-start transition shadow-lg shadow-teal-500/30 text-sm tracking-wide">
                            VISIT WEBSITE
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <footer class="bg-[#f8fafc] py-8 px-8 border-t border-gray-200 mt-auto">
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