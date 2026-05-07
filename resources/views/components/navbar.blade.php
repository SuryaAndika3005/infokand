@props(['variant' => 'light', 'loggedIn' => false])

<div class="{{ $variant === 'dark' ? 'pt-0' : 'pt-6' }} px-4 md:px-8 max-w-7xl mx-auto w-full">
    <header class="{{ $variant === 'dark' ? 'bg-[#0b1727] border-gray-800' : 'bg-white border-gray-100 shadow-sm' }} py-3 px-6 md:px-8 rounded-full flex justify-between items-center border transition-all duration-300">
        <div class="flex items-center gap-8">
            <a href="/" class="text-xl font-bold text-[#0d8276]">Informatika<span class="{{ $variant === 'dark' ? 'text-white' : 'text-gray-900' }}">'23</span></a>
            <nav class="hidden md:flex gap-6 text-sm font-medium">
                <a href="/" class="{{ request()->is('/') ? 'text-[#0d8276] border-b-2 border-[#0d8276] pb-1' : ($variant === 'dark' ? 'text-gray-300 hover:text-white' : 'text-gray-600 hover:text-[#0d8276]') }} transition">Beranda</a>
                <a href="#" class="{{ $variant === 'dark' ? 'text-gray-300 hover:text-white' : 'text-gray-600 hover:text-[#0d8276]' }} transition">Tentang Kami</a>
                <a href="/projects" class="{{ request()->is('projects*') ? 'text-[#0d8276] border-b-2 border-[#0d8276] pb-1' : ($variant === 'dark' ? 'text-gray-300 hover:text-white' : 'text-gray-600 hover:text-[#0d8276]') }} transition">Proyek</a>
            </nav>
        </div>

        <div class="flex items-center gap-4 md:gap-6 text-sm font-medium">
            <button class="text-gray-500 hover:text-[#0d8276] transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
            </button>

            @if($loggedIn)
                <div class="flex items-center gap-3 pl-4 border-l border-gray-200 cursor-pointer group">
                    <span class="text-gray-700 text-[11px] font-bold tracking-wider uppercase group-hover:text-[#0d8276] transition">Surya Andika</span>
                    <a href="/profile">
                        <img src="https://ui-avatars.com/api/?name=Surya+Andika&background=0b1727&color=fff" alt="Profile" class="w-8 h-8 rounded-full border-2 {{ request()->is('profile') ? 'border-[#0d8276]' : 'border-transparent group-hover:border-[#0d8276]' }} transition">
                    </a>
                </div>
            @else
                <a href="/login" class="{{ $variant === 'dark' ? 'text-gray-300 hover:text-white' : 'text-gray-600 hover:text-[#0d8276]' }} transition uppercase text-xs tracking-wider">Sign In</a>
                <a href="#" class="bg-[#0d8276] hover:bg-[#0a6b61] text-white px-5 py-2 rounded-full transition text-xs tracking-wider">JOIN NOW</a>
            @endif
        </div>
    </header>
</div>