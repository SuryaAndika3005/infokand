<footer class="bg-white border-t border-gray-100 mt-auto py-10 w-full">
    <div class="max-w-7xl mx-auto px-4 md:px-8">
        <div class="flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="flex items-center gap-3">
                <a href="{{ route('home') }}" class="text-xl font-bold text-[#0d8276]">Informatika<span class="text-gray-900">'23</span></a>
            </div>
            
            <div class="flex gap-6 text-sm font-medium text-gray-500">
                <a href="{{ route('home') }}" class="hover:text-[#0d8276] transition">Beranda</a>
                <a href="{{ route('about') }}" class="hover:text-[#0d8276] transition">Tentang Kami</a>
                <a href="{{ route('projects') }}" class="hover:text-[#0d8276] transition">Proyek</a>
            </div>
        </div>
        
        <div class="mt-8 pt-8 border-t border-gray-50 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-xs text-gray-400 font-medium tracking-wider">
                &copy; {{ date('Y') }} INFORMATIKA UNIVERSITAS ANDALAS. ALL RIGHTS RESERVED.
            </p>
            <div class="flex gap-4">
                <a href="https://instagram.com/if.ua23" target="_blank" class="text-gray-400 hover:text-[#0d8276] transition">
                    Instagram
                </a>
            </div>
        </div>
    </div>
</footer>