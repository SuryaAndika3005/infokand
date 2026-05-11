<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/img/LOGO IF.png" type="image/png">
    <title>Informatika'23 | Student Websites</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-white antialiased min-h-screen flex flex-col">

    <x-navbar />

    <main class="flex-grow max-w-7xl mx-auto w-full px-4 md:px-8 pt-36 pb-12">
        
        <div class="mb-10">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Student Websites</h1>
            <p class="text-gray-500 text-lg max-w-2xl">
                Explore personal websites from Informatika'23 students. A curated gallery of individual innovation.
            </p>
        </div>

        @auth
            @if($myProject)
            <div class="mb-12">
                <h2 class="text-lg font-semibold text-gray-900 mb-4">Your Website</h2>
                <div class="bg-[#f8fafc] rounded-3xl p-8 flex flex-col md:flex-row items-center gap-8 border border-gray-100">
                    
                    <div class="flex-1">
                        <div class="inline-flex items-center gap-1.5 bg-teal-50 text-[#0d8276] px-3 py-1 rounded-full text-xs font-semibold mb-4 border border-teal-100">
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Website Anda
                        </div>
                        
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">{{ $myProject->title }}</h3>
                        <p class="text-gray-500 text-sm mb-8 leading-relaxed max-w-md">{{ $myProject->description }}</p>
                        
                        <div class="flex items-center gap-3">
                            <a href="{{ route('dashboard') }}" class="bg-[#e2e8f0] hover:bg-gray-300 text-gray-700 px-6 py-2.5 rounded-full font-medium text-sm transition text-center">
                                Detail Dashboard
                            </a>
                            <a href="{{ $myProject->website_url }}" target="_blank" class="bg-[#0d8276] hover:bg-[#0a6b61] text-white px-6 py-2.5 rounded-full font-medium text-sm flex items-center gap-2 transition">
                                Visit Website
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    
                    <div class="w-full md:w-1/2 rounded-2xl overflow-hidden shadow-lg border border-gray-200 aspect-video bg-gray-50">
                        <img src="https://placehold.co/800x500/f8fafc/64748b?text={{ urlencode($myProject->title) }}" alt="My Website" class="w-full h-full object-cover">
                    </div>
                    
                </div>
            </div>
            @endif
        @endauth

        <form action="{{ route('projects') }}" method="GET" id="filterForm" class="bg-[#f8fafc] p-2 rounded-2xl border border-gray-100 flex flex-col md:flex-row gap-2 mb-10">
            <div class="relative flex-grow">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <svg class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                </div>
                <input type="text" name="search" value="{{ $search ?? '' }}" class="w-full bg-transparent text-gray-900 text-sm rounded-xl py-3 pl-10 pr-4 focus:outline-none focus:ring-2 focus:ring-[#0d8276] transition" placeholder="Search by name or title...">
            </div>
            
            <select name="sort" onchange="this.form.submit()" class="bg-gray-100 hover:bg-gray-200 text-gray-700 text-sm font-semibold rounded-xl py-3 px-5 flex items-center justify-between min-w-[160px] transition outline-none cursor-pointer">
                <option value="newest" {{ ($sort ?? '') == 'newest' ? 'selected' : '' }}>Sort by: Newest</option>
                <option value="name" {{ ($sort ?? '') == 'name' ? 'selected' : '' }}>Sort by: Name (A-Z)</option>
            </select>
        </form>

        <div>
            <h2 class="text-lg font-semibold text-gray-900 mb-6">All Websites</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($all_projects as $mhs)
                    <div class="bg-white rounded-[24px] p-4 shadow-sm border border-gray-100 hover:shadow-lg hover:-translate-y-1 transition duration-300 flex flex-col group">
                        
                        <div class="overflow-hidden rounded-xl mb-4 h-48 bg-gray-50 border border-gray-100">
                            <img src="https://placehold.co/600x400/1e293b/white?text={{ urlencode($mhs->title) }}" alt="Project" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        </div>
                        
                        <div class="flex items-center gap-2 mb-3 px-2">
                            <img src="https://ui-avatars.com/api/?name={{ urlencode($mhs->author) }}&background=0d8276&color=fff" alt="Avatar" class="object-cover w-6 h-6 rounded-full">
                            <span class="text-xs font-semibold text-gray-700">{{ $mhs->author }}</span>
                        </div>
                        
                        <h3 class="text-lg font-bold text-gray-900 mb-2 px-2">{{ $mhs->title }}</h3>
                        <p class="text-sm text-gray-500 mb-6 line-clamp-2 px-2 flex-grow">
                            {{ $mhs->description }}
                        </p>
                        
                        <a href="{{ $mhs->website_url }}" target="_blank" class="flex justify-center items-center gap-2 w-full bg-[#f1f5f9] hover:bg-gray-200 text-gray-800 font-semibold py-3 rounded-xl text-sm transition mt-auto">
                            View Website 
                            <svg class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                        </a>
                    </div>
                @empty
                    <div class="col-span-full py-20 text-center">
                        <p class="text-gray-400">No websites found matching your search.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </main>

    <x-footer />

</body>
</html>