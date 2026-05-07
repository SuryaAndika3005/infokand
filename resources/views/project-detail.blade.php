<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surdik's Website - Detail - Informatika'23</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-white antialiased min-h-screen flex flex-col">

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

    <main class="flex-grow w-full pt-8 pb-0">
        
        <div class="max-w-7xl mx-auto px-4 md:px-8">
            <div class="relative w-full h-[400px] md:h-[500px] rounded-[32px] overflow-hidden shadow-lg group">
                <img src="https://placehold.co/1200x600/e2e8f0/64748b?text=Surdik's+Portfolio+Screenshot" alt="Project Banner" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/20 to-transparent"></div>
                
                <div class="absolute bottom-0 left-0 w-full p-8 md:p-12 flex flex-col md:flex-row justify-between items-end gap-6">
                    <div>
                        <h1 class="text-4xl md:text-5xl font-bold text-white mb-2">Surdik's Website</h1>
                        <p class="text-gray-300 font-medium">by Surya Andika</p>
                    </div>
                    <button class="bg-[#0d8276] hover:bg-[#0a6b61] text-white px-8 py-3.5 rounded-full font-bold flex items-center gap-2 transition shadow-lg shadow-teal-500/30 whitespace-nowrap">
                        Visit Website
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </button>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 mt-16 mb-24">
                
                <div class="lg:col-span-2">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Project Overview</h2>
                    
                    <div class="text-gray-600 space-y-6 leading-relaxed">
                        <p>
                            "The Digital Canvas" is an experimental portfolio platform designed to blur the lines between functional interface and generative art. Built entirely with vanilla JavaScript and WebGL, the project explores how user interaction can dynamically alter the visual topology of a website. Every cursor movement, scroll event, and click leaves a temporary, digital impression on the background canvas, creating a unique, ephemeral session for each visitor.
                        </p>
                        <p>
                            The core challenge of this project was maintaining performance while rendering hundreds of thousands of particles in real-time. By utilizing custom WebGL shaders and optimizing the animation loop to only update visible elements, the site maintains a buttery smooth 60fps even on mobile devices. The typography pairs a brutalist sans-serif with delicate, high-contrast serif headers, creating an intentional tension that reflects the chaotic yet structured nature of the generative background.
                        </p>
                        <p>
                            From a structural standpoint, the architecture eschews traditional routing in favor of a single-page, infinite-scroll exploration mechanic. Content blocks appear as floating islands within the generative space, tied together by subtle kinetic typography that guides the narrative flow.
                        </p>
                    </div>
                </div>

                <div class="lg:col-span-1">
                    <div class="bg-white rounded-3xl p-8 border border-gray-100 shadow-[0_8px_30px_rgb(0,0,0,0.04)] flex flex-col items-center text-center">
                        <div class="w-24 h-24 rounded-full overflow-hidden mb-4 ring-4 ring-gray-50">
                            <img src="https://ui-avatars.com/api/?name=Surya+Andika&background=0b1727&color=fff&size=200" alt="Surya Andika" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-1">Surya Andika</h3>
                        <p class="text-xs text-gray-400 font-medium tracking-widest mb-6">2311523005</p>
                        
                        <p class="text-sm text-gray-500 mb-8 leading-relaxed">
                            Exploring the intersection of creative coding and accessible user interfaces. Currently focusing on WebGL experiences and design systems.
                        </p>
                        
                        <button class="w-full bg-[#bfdbfe] hover:bg-[#93c5fd] text-[#1e3a8a] font-bold py-3 rounded-xl transition-colors">
                            View Profile
                        </button>
                    </div>
                </div>

            </div>
        </div>

        <section class="bg-[#f8fafc] py-20 px-8 border-t border-gray-100">
            <div class="max-w-7xl mx-auto">
                <div class="flex justify-between items-end mb-12">
                    <h2 class="text-2xl font-bold text-gray-900">More from the Archive</h2>
                    <a href="/projects" class="text-[#0d8276] font-bold hover:text-[#0a6b61] flex items-center gap-1 text-sm tracking-wider uppercase">VIEW ALL <span>→</span></a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white rounded-[24px] p-4 shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition duration-300 group flex flex-col">
                        <div class="overflow-hidden rounded-xl mb-4 h-48 bg-gray-900">
                            <img src="https://placehold.co/600x400/1e293b/white?text=Energy+Engine" alt="Project" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        </div>
                        <div class="flex items-center gap-2 mb-3 px-2">
                            <img src="https://ui-avatars.com/api/?name=David+Chen&background=0D8ABC&color=fff" alt="Avatar" class="w-6 h-6 rounded-full">
                            <span class="text-xs font-semibold text-gray-600">David Chen</span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2 px-2">David's Website</h3>
                        <p class="text-sm text-gray-500 mb-6 line-clamp-2 px-2 flex-grow">An advanced analytical engine using machine learning to predict network vulnerabilities in real time.</p>
                        <a href="#" class="flex items-center justify-center gap-2 w-full bg-[#f1f5f9] hover:bg-gray-200 text-gray-800 font-semibold py-3.5 rounded-xl text-sm transition mt-auto">
                            View Website
                            <svg class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                        </a>
                    </div>

                    <div class="bg-white rounded-[24px] p-4 shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition duration-300 group flex flex-col">
                        <div class="overflow-hidden rounded-xl mb-4 h-48 bg-gray-900">
                            <img src="https://placehold.co/600x400/0f172a/white?text=Smart+Home" alt="Project" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        </div>
                        <div class="flex items-center gap-2 mb-3 px-2">
                            <img src="https://ui-avatars.com/api/?name=Maya+Isbell&background=F59E0B&color=fff" alt="Avatar" class="w-6 h-6 rounded-full">
                            <span class="text-xs font-semibold text-gray-600">Maya Isbell</span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2 px-2">Maya's Portfolio Web</h3>
                        <p class="text-sm text-gray-500 mb-6 line-clamp-2 px-2 flex-grow">A smart home integration system focused on minimizing residential carbon footprints through IoT sensing.</p>
                        <a href="#" class="flex items-center justify-center gap-2 w-full bg-[#f1f5f9] hover:bg-gray-200 text-gray-800 font-semibold py-3.5 rounded-xl text-sm transition mt-auto">
                            View Website
                            <svg class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                        </a>
                    </div>

                    <div class="bg-white rounded-[24px] p-4 shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition duration-300 group flex flex-col">
                        <div class="overflow-hidden rounded-xl mb-4 h-48 bg-gray-900">
                            <img src="https://placehold.co/600x400/0891b2/white?text=Blockchain+Node" alt="Project" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        </div>
                        <div class="flex items-center gap-2 mb-3 px-2">
                            <img src="https://ui-avatars.com/api/?name=James+Wilson&background=10B981&color=fff" alt="Avatar" class="w-6 h-6 rounded-full">
                            <span class="text-xs font-semibold text-gray-600">James Wilson</span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2 px-2">My Portfolio Web</h3>
                        <p class="text-sm text-gray-500 mb-6 line-clamp-2 px-2 flex-grow">Decentralized credential verification tool designed for university registrars and academic institutions.</p>
                        <a href="#" class="flex items-center justify-center gap-2 w-full bg-[#f1f5f9] hover:bg-gray-200 text-gray-800 font-semibold py-3.5 rounded-xl text-sm transition mt-auto">
                            View Website
                            <svg class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer class="bg-[#f8fafc] py-8 px-8 border-t border-gray-200">
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