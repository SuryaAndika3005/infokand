<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ganti Password - Informatika'23</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-[#f8fafc] flex items-center justify-center min-h-screen p-4">

    <div class="w-full max-w-md bg-white rounded-[32px] p-8 md:p-10 shadow-xl border border-gray-100">
        <div class="mb-8 text-center">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-teal-50 text-[#0d8276] rounded-full mb-4">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
            </div>
            <h2 class="text-2xl font-bold text-gray-900 mb-2">Amankan Akun Anda</h2>
            <p class="text-sm text-gray-500">Karena ini login pertama Anda, wajib mengganti password demi keamanan.</p>
        </div>

        @if ($errors->any())
            <div class="bg-red-50 text-red-600 p-4 rounded-xl mb-6 text-sm font-medium border border-red-100">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('password.update') }}" method="POST" class="space-y-5">
            @csrf
            <div>
                <label class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-2 ml-1">Password Baru</label>
                <input type="password" name="password" required class="w-full bg-gray-50 border border-gray-100 rounded-2xl py-3 px-4 focus:ring-2 focus:ring-[#0d8276]/20 focus:border-[#0d8276] outline-none transition-all">
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-2 ml-1">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" required class="w-full bg-gray-50 border border-gray-100 rounded-2xl py-3 px-4 focus:ring-2 focus:ring-[#0d8276]/20 focus:border-[#0d8276] outline-none transition-all">
            </div>

            <button type="submit" class="w-full bg-[#0d8276] hover:bg-[#0a6b61] text-white font-bold py-3.5 rounded-2xl transition-all shadow-lg shadow-teal-900/20 mt-4">
                Simpan & Lanjutkan
            </button>
        </form>
    </div>

</body>
</html>