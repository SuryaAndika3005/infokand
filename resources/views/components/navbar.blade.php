<div id="nav-container" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
    
    <div id="nav-overlay" class="absolute inset-0 z-[-1] transition-opacity duration-150 pointer-events-none" 
         style="background: linear-gradient(to bottom, rgba(11, 23, 39, 0.6) 0%, rgba(11, 23, 39, 0.4) 0%, transparent 100%); height: 150%;">
    </div>

    <div class="max-w-7xl mx-auto px-4 md:px-8 w-full pt-4" id="nav-content">
        <header class="bg-white/80 border-gray-100 mt-4 py-3 px-6 md:px-8 rounded-full flex justify-between items-center border backdrop-blur-sm transition-all duration-500">
            <div class="flex items-center gap-8">
                <a href="{{ route('home') }}" class="text-xl font-bold text-[#0d8276]">Informatika<span class="text-gray-900">'23</span></a>
                
                <nav class="hidden md:flex gap-6 text-sm font-medium relative">
                    <a href="{{ route('home') }}" class="nav-link transition-colors duration-500 {{ request()->routeIs('home') ? 'text-[#0d8276]' : 'text-gray-600 hover:text-[#0d8276]' }}">Beranda</a>
                    <a href="{{ route('about') }}" class="nav-link transition-colors duration-500 {{ request()->routeIs('about') ? 'text-[#0d8276]' : 'text-gray-600 hover:text-[#0d8276]' }}">Tentang Kami</a>
                    <a href="{{ route('projects') }}" class="nav-link transition-colors duration-500 {{ request()->routeIs('projects*') ? 'text-[#0d8276]' : 'text-gray-600 hover:text-[#0d8276]' }}">Proyek</a>

                    @if(request()->routeIs('projects*'))
                        <div class="absolute bottom-[-6px] h-[2px] bg-[#0d8276] transition-all duration-500 ease-in-out opacity-100" style="width: 52px; left: 192px;"></div>
                    @endif
                </nav>
            </div>

            <div class="flex items-center gap-4 md:gap-6 text-sm font-medium">
                @auth
                    <div class="relative group ml-4 pl-4 border-l border-gray-200">
                        <button class="flex items-center gap-3 cursor-pointer focus:outline-none" id="userMenuButton">
                            <span class="hidden md:block text-gray-700 text-[11px] font-bold tracking-wider uppercase group-hover:text-[#0d8276] transition">
                                {{ auth()->user()->name }}
                            </span>
                            <img src="{{ auth()->user()->profile_photo ? asset('storage/' . auth()->user()->profile_photo) : 'https://ui-avatars.com/api/?name=' . urlencode(auth()->user()->name) . '&background=0b1727&color=fff' }}" alt="Profile" class="w-8 h-8 rounded-full border-2 border-transparent group-hover:border-[#0d8276] transition object-cover">
                        </button>

                        <div class="absolute right-0 mt-2 w-48 bg-white rounded-2xl shadow-xl border border-gray-100 py-2 z-[100] opacity-0 invisible translate-y-2 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition-all duration-300">
                            
                            <a href="{{ route('profile.edit') }}" class="flex items-center gap-3 px-4 py-2.5 text-sm text-gray-700 hover:bg-teal-50 hover:text-[#0d8276] transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                <span>Profil Saya</span>
                            </a>

                            <a href="/#kelola" class="flex items-center gap-3 px-4 py-2.5 text-sm text-gray-700 hover:bg-teal-50 hover:text-[#0d8276] transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                                <span>Kelola Website</span>
                            </a>

                            <div class="border-t border-gray-50 my-1"></div>
                            
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="w-full text-left flex items-center gap-3 px-4 py-2.5 text-sm text-red-600 hover:bg-red-50 transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                    </svg>
                                    <span>Logout</span>
                                </button>
                            </form>
                        </div>
                    </div>
                
                @else
                    <a href="{{ route('login') }}" class="text-gray-600 hover:text-[#0d8276] transition uppercase text-xs tracking-wider font-bold">Sign In</a>
                @endauth
            </div>
        </header>
    </div>
</div>