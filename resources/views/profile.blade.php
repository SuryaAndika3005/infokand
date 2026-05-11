<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/img/LOGO IF.png" type="image/png">
    <title>Profil Saya - Informatika'23</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-[#f8fafc] antialiased flex flex-col min-h-screen">

    <x-navbar />

    <main class="flex-grow max-w-3xl mx-auto w-full px-4 md:px-8 pt-36 pb-12">
        <div class="mb-10">
            <h1 class="text-4xl font-bold text-gray-900 mb-2">Profil Saya</h1>
            <p class="text-gray-500 text-lg">Kelola informasi data diri dan foto profil Anda di platform ini.</p>
        </div>

        @if(session('success'))
            <div class="bg-teal-50 text-teal-600 p-4 rounded-xl mb-6 text-sm font-bold border border-teal-100 flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white rounded-[32px] p-8 md:p-10 shadow-sm border border-gray-100">
            <div class="flex items-center gap-6 mb-10 pb-8 border-b border-gray-100">
                <img src="{{ auth()->user()->profile_photo ? asset('storage/' . auth()->user()->profile_photo) : 'https://ui-avatars.com/api/?name=' . urlencode(auth()->user()->name) . '&background=0d8276&color=fff&size=100' }}" class="w-24 h-24 rounded-full border-4 border-gray-50 shadow-sm object-cover">
                <div>
                    <h2 class="text-2xl font-bold text-gray-900">{{ auth()->user()->name }}</h2>
                    <p class="text-gray-500 font-medium mb-1">NIM: {{ auth()->user()->nim }}</p>
                </div>
            </div>

            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                
                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-2 ml-1">Ganti Foto Profil</label>
                    <input type="file" name="profile_photo" accept="image/png, image/jpeg, image/jpg, image/webp" class="w-full bg-gray-50 border border-gray-100 rounded-2xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#0d8276]/20 transition-all text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-xs file:font-bold file:bg-teal-50 file:text-[#0d8276] hover:file:bg-teal-100 cursor-pointer">
                    <p class="text-[10px] text-gray-400 mt-1 ml-1">Biarkan kosong jika tidak ingin mengubah foto. Format: JPG, PNG, WEBP (Max 2MB)</p>
                    @error('profile_photo') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-2 ml-1">Nama Lengkap</label>
                    <input type="text" name="name" value="{{ auth()->user()->name }}" required class="w-full bg-gray-50 border border-gray-100 rounded-2xl px-5 py-4 focus:outline-none focus:ring-2 focus:ring-[#0d8276]/20 focus:border-[#0d8276] transition-all">
                    @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-2 ml-1">Email Akademik</label>
                    <input type="email" name="email" value="{{ auth()->user()->email }}" required class="w-full bg-gray-50 border border-gray-100 rounded-2xl px-5 py-4 focus:outline-none focus:ring-2 focus:ring-[#0d8276]/20 focus:border-[#0d8276] transition-all">
                    @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-2 ml-1">Nomor Induk Mahasiswa (Read Only)</label>
                    <input type="text" value="{{ auth()->user()->nim }}" readonly class="w-full bg-gray-100 border border-gray-200 text-gray-500 rounded-2xl px-5 py-4 cursor-not-allowed">
                </div>

                <div class="pt-6 flex justify-end">
                    <button type="submit" class="bg-[#0d8276] hover:bg-[#0a6b61] text-white px-8 py-4 rounded-2xl font-bold shadow-lg shadow-teal-500/30 transition-all">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </main>

    <x-footer />
</body>
</html>