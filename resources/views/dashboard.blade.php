<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Informatika'23</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-[#f8fafc] antialiased flex flex-col min-h-screen relative">

    <section class="bg-gradient-to-br from-[#0b1727] to-[#0f3a3e] text-white pt-32 pb-24 px-8 overflow-hidden relative">
        
        <div class="absolute top-6 left-0 right-0 px-4 md:px-8 z-50 max-w-[1400px] mx-auto">
            <header class="bg-[#f8fafc] py-3 px-6 md:px-8 rounded-full flex justify-between items-center shadow-lg border border-gray-200/50">
                <div class="flex items-center gap-8">
                    <a href="/" class="text-xl font-bold text-[#0d8276]">Informatika<span class="text-[#0b1727]">'23</span></a>
                    <nav class="hidden md:flex gap-6 text-sm font-medium">
                        <a href="#" class="text-[#0d8276] border-b-2 border-[#0d8276] pb-1">Beranda</a>
                        <a href="#" class="text-gray-600 hover:text-[#0d8276] transition">Tentang Kami</a>
                        <a href="/projects" class="text-gray-600 hover:text-[#0d8276] transition">Proyek</a>
                    </nav>
                </div>
                <div class="flex items-center gap-4 text-sm font-medium">
                    <button class="text-gray-500 hover:text-[#0d8276] transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                    </button>
                    <div class="flex items-center gap-3 pl-4 border-l border-gray-300 cursor-pointer group">
                        <span class="text-gray-700 text-[11px] font-bold tracking-wider uppercase group-hover:text-[#0d8276] transition">Surya Andika</span>
                        <img src="https://ui-avatars.com/api/?name=Surya+Andika&background=0b1727&color=fff" alt="Profile" class="w-8 h-8 rounded-full border-2 border-transparent group-hover:border-[#0d8276] transition">
                    </div>
                </div>
            </header>
        </div>

        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="z-10">
                <h1 class="text-5xl md:text-6xl font-bold leading-tight mb-6">
                    Welcome to <br> <span class="text-teal-400">Informatika'23</span>
                </h1>
                <p class="text-gray-300 text-lg mb-8 max-w-md">
                    Discover and showcase personal websites, digital portfolio, and creative projects from Informatika'23 students.
                </p>
                <div class="flex gap-4">
                    <a href="/projects" class="bg-[#0d8276] hover:bg-[#0a6b61] px-6 py-3 rounded-full font-medium flex items-center gap-2 transition shadow-lg shadow-teal-500/20">
                        Explore Projects <span>→</span>
                    </a>
                    <button class="border border-gray-400 hover:border-white px-6 py-3 rounded-full font-medium transition hover:bg-white/5">
                        Add Your Project
                    </button>
                </div>
                <div class="flex items-center gap-3 mt-8">
                    <div class="flex -space-x-2">
                        <img class="w-8 h-8 rounded-full border-2 border-[#0f3a3e]" src="https://ui-avatars.com/api/?name=D+C&background=1e293b&color=fff" alt="Member">
                        <img class="w-8 h-8 rounded-full border-2 border-[#0f3a3e]" src="https://ui-avatars.com/api/?name=M+I&background=0891b2&color=fff" alt="Member">
                        <img class="w-8 h-8 rounded-full border-2 border-[#0f3a3e]" src="https://ui-avatars.com/api/?name=J+W&background=0d8276&color=fff" alt="Member">
                        <div class="w-8 h-8 rounded-full border-2 border-[#0f3a3e] bg-teal-500 flex items-center justify-center text-[10px] font-bold">+200</div>
                    </div>
                    <span class="text-xs text-gray-400">Joined by our community</span>
                </div>
            </div>
            
            <div class="relative hidden md:block h-80">
                <div class="absolute top-0 right-20 bg-[#0b1727] p-2 rounded-xl shadow-2xl border border-gray-700 w-64 transform rotate-[-5deg] hover:rotate-0 transition duration-300">
                    <img src="https://placehold.co/400x250/1e293b/white?text=Data+Viz" class="rounded-lg w-full" alt="Project 1">
                    <p class="text-xs mt-2 font-medium text-gray-300">Cyber-Metric AI</p>
                </div>
                <div class="absolute bottom-0 right-0 bg-[#0b1727] p-2 rounded-xl shadow-2xl border border-gray-700 w-64 transform rotate-[5deg] hover:rotate-0 transition duration-300">
                    <img src="https://placehold.co/400x250/0891b2/white?text=Blockchain" class="rounded-lg w-full" alt="Project 2">
                    <p class="text-xs mt-2 font-medium text-gray-300">Chain-Trust</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-24 px-8">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div class="relative">
                <img src="https://placehold.co/600x400/cbd5e1/475569?text=Foto+Angkatan+Informatika" alt="Class Photo" class="rounded-[2rem] shadow-lg w-full object-cover h-80">
                <div class="absolute -bottom-6 right-6 bg-[#0d8276] text-white p-6 rounded-2xl shadow-xl">
                    <h3 class="text-3xl font-bold">200+</h3>
                    <p class="text-sm font-medium">Projects Launched</p>
                </div>
            </div>
            <div>
                <span class="text-xs font-bold text-[#0d8276] bg-teal-50 px-3 py-1 rounded-full uppercase tracking-wider mb-4 inline-block">Our Mission</span>
                <h2 class="text-4xl font-bold text-gray-900 mb-6 leading-tight">Curating the Future of Digital Innovation</h2>
                <p class="text-gray-600 mb-8 leading-relaxed">
                    The Informatika'23 Platform was born from a need to bridge academic excellence with creative expression. We provide a space where every student's technical journey becomes a visual narrative, fostering collaboration and visibility across the digital atelier.
                </p>
                <div class="flex gap-4 items-center">
                    <button class="border border-[#0d8276] text-[#0d8276] hover:bg-teal-50 px-6 py-2.5 rounded-full font-medium transition">Our Project</button>
                    <a href="#" class="text-gray-900 font-medium hover:text-[#0d8276] flex items-center gap-1 transition">Learn More <span>›</span></a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white pb-16 px-8">
        <div class="max-w-5xl mx-auto bg-[#f8fafc] border border-gray-100 rounded-[2.5rem] py-16 px-6 flex flex-col items-center justify-center text-center shadow-sm">
            <div class="bg-white p-4 rounded-full shadow-sm mb-6 flex items-center justify-center h-16 w-16">
                <svg class="w-8 h-8 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 3l18 18" />
                </svg>
            </div>
            <h3 class="text-2xl font-bold text-gray-900 mb-3">You don't added your website yet</h3>
            <p class="text-gray-500 text-sm max-w-md mb-8 leading-relaxed">
                Start showcasing your innovation today. Upload your code, designs, and documentation for the world to see.
            </p>
            <button class="bg-[#0d8276] hover:bg-[#0a6b61] text-white px-6 py-2.5 rounded-full font-medium flex items-center gap-2 transition shadow-lg shadow-teal-500/20">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                Add Website
            </button>
        </div>
    </section>

    <section class="bg-gray-50 py-20 px-8">
        <div class="max-w-7xl mx-auto">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-2">Featured Websites</h2>
                    <p class="text-gray-500">Discover the latest additions to the directory</p>
                </div>
                <a href="/projects" class="text-[#0d8276] font-bold hover:text-[#0a6b61] flex items-center gap-1 text-sm tracking-wider uppercase">VIEW ALL <span>→</span></a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-[24px] p-4 shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition duration-300 group">
                    <div class="overflow-hidden rounded-xl mb-4 h-48 bg-gray-900">
                        <img src="https://placehold.co/600x400/1e293b/white?text=Energy+Engine" alt="Project" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="flex items-center gap-2 mb-3 px-2">
                        <img src="https://ui-avatars.com/api/?name=David+Chen&background=0D8ABC&color=fff" alt="Avatar" class="w-6 h-6 rounded-full">
                        <span class="text-xs font-medium text-gray-600">David Chen</span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2 px-2">David's Website</h3>
                    <p class="text-sm text-gray-500 mb-6 line-clamp-3 px-2">An advanced analytical engine using machine learning to predict network vulnerabilities in real time.</p>
                    <a href="#" class="flex items-center justify-center gap-2 w-full bg-[#f1f5f9] hover:bg-gray-200 text-gray-800 font-semibold py-3.5 rounded-xl text-sm transition">
                        View Website
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                    </a>
                </div>

                <div class="bg-white rounded-[24px] p-4 shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition duration-300 group">
                    <div class="overflow-hidden rounded-xl mb-4 h-48 bg-gray-900">
                        <img src="https://placehold.co/600x400/0f172a/white?text=Smart+Home" alt="Project" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="flex items-center gap-2 mb-3 px-2">
                        <img src="https://ui-avatars.com/api/?name=Maya+Isbell&background=F59E0B&color=fff" alt="Avatar" class="w-6 h-6 rounded-full">
                        <span class="text-xs font-medium text-gray-600">Maya Isbell</span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2 px-2">Maya's Portfolio Web</h3>
                    <p class="text-sm text-gray-500 mb-6 line-clamp-3 px-2">A smart home integration system focused on minimizing residential carbon footprints through IoT sensing.</p>
                    <a href="#" class="flex items-center justify-center gap-2 w-full bg-[#f1f5f9] hover:bg-gray-200 text-gray-800 font-semibold py-3.5 rounded-xl text-sm transition">
                        View Website
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                    </a>
                </div>

                <div class="bg-white rounded-[24px] p-4 shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition duration-300 group">
                    <div class="overflow-hidden rounded-xl mb-4 h-48 bg-gray-900">
                        <img src="https://placehold.co/600x400/0891b2/white?text=Blockchain+Node" alt="Project" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="flex items-center gap-2 mb-3 px-2">
                        <img src="https://ui-avatars.com/api/?name=James+Wilson&background=10B981&color=fff" alt="Avatar" class="w-6 h-6 rounded-full">
                        <span class="text-xs font-medium text-gray-600">James Wilson</span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2 px-2">My Portfolio Web</h3>
                    <p class="text-sm text-gray-500 mb-6 line-clamp-3 px-2">Decentralized credential verification tool designed for university registrars and academic institutions.</p>
                    <a href="#" class="flex items-center justify-center gap-2 w-full bg-[#f1f5f9] hover:bg-gray-200 text-gray-800 font-semibold py-3.5 rounded-xl text-sm transition">
                        View Website
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <footer class="bg-[#f8fafc] py-8 px-8 border-t border-gray-200 mt-auto">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-4">
            <a href="/" class="text-lg font-bold text-[#0d8276]">Informatika<span class="text-gray-900">'23</span></a>
            <div class="flex gap-6 text-sm text-gray-500 font-medium">
                <a href="#" class="hover:text-[#0d8276] transition">Privacy Policy</a>
                <a href="#" class="hover:text-[#0d8276] transition">Terms of Service</a>
                <a href="#" class="hover:text-[#0d8276] transition">Contact Support</a>
                <a href="#" class="hover:text-[#0d8276] transition">Archive</a>
            </div>
            <p class="text-xs text-gray-400 font-medium uppercase tracking-wider">© 2024 INFORMATIKA'23 WEBSITE. ALL RIGHTS RESERVED.</p>
        </div>
    </footer>

</body>
</html>