<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informatika'23 - Showcase Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-[#f8fafc] antialiased flex flex-col min-h-screen relative">

    <header class="bg-[#0b1727] text-white py-4 px-8 flex justify-between items-center border-b border-gray-800">
        <div class="flex items-center gap-8">
            <a href="#" class="text-xl font-bold text-teal-400">Informatika<span class="text-white">'23</span></a>
            <nav class="hidden md:flex gap-6 text-sm">
                <a href="#" class="text-teal-400 border-b-2 border-teal-400 pb-1">Beranda</a>
                <a href="#" class="hover:text-teal-300 transition">Tentang Kami</a>
                <a href="#" class="hover:text-teal-300 transition">Proyek</a>
            </nav>
        </div>
        <div class="flex items-center gap-6 text-sm">
            <button class="hover:text-teal-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
            </button>
            <a href="#" class="hover:text-teal-300">Sign In</a>
            <a href="#" class="bg-teal-500 hover:bg-teal-600 text-white px-5 py-2 rounded-full font-medium transition">JOIN NOW</a>
        </div>
    </header>

    <section class="bg-gradient-to-br from-[#0b1727] to-[#0f3a3e] text-white py-24 px-8 overflow-hidden relative">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="z-10">
                <h1 class="text-5xl md:text-6xl font-bold leading-tight mb-6">
                    Welcome to <br> <span class="text-teal-400">Informatika'23</span>
                </h1>
                <p class="text-gray-300 text-lg mb-8 max-w-md">
                    Discover and showcase personal websites, digital portfolio, and creative projects from Informatika'23 students.
                </p>
                <div class="flex gap-4">
                    <a href="#" class="bg-teal-500 hover:bg-teal-600 px-6 py-3 rounded-full font-medium flex items-center gap-2 transition shadow-lg shadow-teal-500/20">
                        Explore Projects <span>→</span>
                    </a>
                    <button onclick="openModal()" class="border border-gray-400 hover:border-white px-6 py-3 rounded-full font-medium transition hover:bg-white/5">
                        Add Your Project
                    </button>
                </div>
            </div>
            <div class="relative hidden md:block h-80">
                <div class="absolute top-0 right-20 bg-gray-800 p-2 rounded-xl shadow-2xl border border-gray-700 w-64 transform rotate-[-5deg] hover:rotate-0 transition duration-300">
                    <img src="https://placehold.co/400x250/1e293b/white?text=Data+Viz" class="rounded-lg w-full" alt="Project 1">
                    <p class="text-xs mt-2 font-medium text-gray-300">Cyber-Metric AI</p>
                </div>
                <div class="absolute bottom-0 right-0 bg-gray-800 p-2 rounded-xl shadow-2xl border border-gray-700 w-64 transform rotate-[5deg] hover:rotate-0 transition duration-300">
                    <img src="https://placehold.co/400x250/0891b2/white?text=Blockchain" class="rounded-lg w-full" alt="Project 2">
                    <p class="text-xs mt-2 font-medium text-gray-300">Chain-Trust</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-24 px-8">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div class="relative">
                <img src="https://placehold.co/600x400/cbd5e1/475569?text=Foto+Angkatan+Informatika" alt="Class Photo" class="rounded-2xl shadow-lg w-full object-cover h-80">
                <div class="absolute -bottom-6 right-6 bg-teal-500 text-white p-6 rounded-2xl shadow-xl">
                    <h3 class="text-3xl font-bold">200+</h3>
                    <p class="text-sm font-medium">Projects Launched</p>
                </div>
            </div>
            <div>
                <span class="text-xs font-bold text-teal-600 bg-teal-50 px-3 py-1 rounded-full uppercase tracking-wider mb-4 inline-block">Our Mission</span>
                <h2 class="text-4xl font-bold text-gray-900 mb-6 leading-tight">Curating the Future of Digital Innovation</h2>
                <p class="text-gray-600 mb-8 leading-relaxed">
                    The Informatika'23 Platform was born from a need to bridge academic excellence with creative expression. We provide a space where every student's technical journey becomes a visual narrative, fostering collaboration and visibility across the digital atelier.
                </p>
                <div class="flex gap-4 items-center">
                    <a href="#" class="border-2 border-teal-500 text-teal-600 hover:bg-teal-50 px-6 py-2 rounded-full font-medium transition">Our Project</a>
                    <a href="#" class="text-gray-900 font-medium hover:text-teal-600 flex items-center gap-1 transition">Learn More <span>›</span></a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-50 py-20 px-8">
        <div class="max-w-7xl mx-auto">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-2">Featured Websites</h2>
                    <p class="text-gray-500">Discover the latest additions to the directory</p>
                </div>
                <a href="#" class="text-teal-600 font-bold hover:text-teal-700 flex items-center gap-1">VIEW ALL <span>→</span></a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <div class="bg-white rounded-2xl p-4 shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition duration-300 group">
                    <div class="overflow-hidden rounded-xl mb-4 h-48 bg-gray-900">
                        <img src="https://placehold.co/600x400/1e293b/white?text=Energy+Engine" alt="Project" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="flex items-center gap-2 mb-3">
                        <img src="https://ui-avatars.com/api/?name=David+Chen&background=0D8ABC&color=fff" alt="Avatar" class="w-6 h-6 rounded-full">
                        <span class="text-xs font-medium text-gray-600">David Chen</span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">David's Website</h3>
                    <p class="text-sm text-gray-500 mb-6 line-clamp-3">An advanced energy tool engine using machine learning to predict network vulnerabilities in real time.</p>
                    <a href="#" class="block w-full text-center bg-gray-50 hover:bg-teal-500 hover:text-white text-gray-800 font-medium py-3 rounded-xl text-sm transition">View Website ↗</a>
                </div>

                <div class="bg-white rounded-2xl p-4 shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition duration-300 group">
                    <div class="overflow-hidden rounded-xl mb-4 h-48 bg-gray-900">
                        <img src="https://placehold.co/600x400/0f172a/white?text=Smart+Home" alt="Project" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="flex items-center gap-2 mb-3">
                        <img src="https://ui-avatars.com/api/?name=Maya+Isbell&background=F59E0B&color=fff" alt="Avatar" class="w-6 h-6 rounded-full">
                        <span class="text-xs font-medium text-gray-600">Maya Isbell</span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Maya's Portfolio Web</h3>
                    <p class="text-sm text-gray-500 mb-6 line-clamp-3">A smart home integration system focused on minimizing residential carbon footprints through IoT sensing.</p>
                    <a href="#" class="block w-full text-center bg-gray-50 hover:bg-teal-500 hover:text-white text-gray-800 font-medium py-3 rounded-xl text-sm transition">View Website ↗</a>
                </div>

                <div class="bg-white rounded-2xl p-4 shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition duration-300 group">
                    <div class="overflow-hidden rounded-xl mb-4 h-48 bg-gray-900">
                        <img src="https://placehold.co/600x400/0891b2/white?text=Blockchain+Node" alt="Project" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="flex items-center gap-2 mb-3">
                        <img src="https://ui-avatars.com/api/?name=James+Wilson&background=10B981&color=fff" alt="Avatar" class="w-6 h-6 rounded-full">
                        <span class="text-xs font-medium text-gray-600">James Wilson</span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">My Portfolio Web</h3>
                    <p class="text-sm text-gray-500 mb-6 line-clamp-3">Decentralized credential verification tool designed for university registrars and academic institutions.</p>
                    <a href="#" class="block w-full text-center bg-gray-50 hover:bg-teal-500 hover:text-white text-gray-800 font-medium py-3 rounded-xl text-sm transition">View Website ↗</a>
                </div>

            </div>
        </div>
    </section>

    <footer class="bg-white py-8 px-8 border-t border-gray-200 mt-auto">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-4">
            <a href="#" class="text-lg font-bold text-teal-600">Informatika<span class="text-gray-900">'23</span></a>
            <div class="flex gap-6 text-sm text-gray-500">
                <a href="#" class="hover:text-teal-600 transition">Privacy Policy</a>
                <a href="#" class="hover:text-teal-600 transition">Terms of Service</a>
                <a href="#" class="hover:text-teal-600 transition">Contact Support</a>
                <a href="#" class="hover:text-teal-600 transition">Archive</a>
            </div>
            <p class="text-xs text-gray-400">© 2026 INFORMATIKA'23 WEBSITE. ALL RIGHTS RESERVED.</p>
        </div>
    </footer>

    <div id="addProjectModal" class="fixed inset-0 z-50 hidden bg-[#0b1727]/80 backdrop-blur-sm flex items-center justify-center transition-opacity duration-300 opacity-0">
        <div class="bg-white rounded-2xl w-full max-w-lg p-8 shadow-2xl transform scale-95 transition-transform duration-300" id="modalContent">
            
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-900">Add Your Project</h2>
                <button onclick="closeModal()" class="text-gray-400 hover:text-red-500 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                </button>
            </div>

            <form action="#" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Project Title</label>
                    <input type="text" class="w-full border border-gray-200 rounded-xl px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition" placeholder="e.g. Cyber-Metric AI">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Author Name</label>
                    <input type="text" class="w-full border border-gray-200 rounded-xl px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition" placeholder="Your full name">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                    <textarea rows="3" class="w-full border border-gray-200 rounded-xl px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition resize-none" placeholder="Short description of your project..."></textarea>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Website URL</label>
                    <input type="url" class="w-full border border-gray-200 rounded-xl px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition" placeholder="https://...">
                </div>

                <div class="pt-4 flex justify-end gap-3">
                    <button type="button" onclick="closeModal()" class="px-5 py-2 text-gray-600 font-medium hover:bg-gray-100 rounded-xl transition">Cancel</button>
                    <button type="button" class="bg-teal-500 hover:bg-teal-600 text-white px-6 py-2 rounded-xl font-medium transition shadow-lg shadow-teal-500/30">Submit Project</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        const modal = document.getElementById('addProjectModal');
        const modalContent = document.getElementById('modalContent');

        function openModal() {
            modal.classList.remove('hidden');
            // Trigger reflow
            void modal.offsetWidth;
            modal.classList.remove('opacity-0');
            modalContent.classList.remove('scale-95');
            modalContent.classList.add('scale-100');
        }

        function closeModal() {
            modal.classList.add('opacity-0');
            modalContent.classList.remove('scale-100');
            modalContent.classList.add('scale-95');
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300); // Matches the duration-300 class
        }
    </script>

</body>
</html>