<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Informatika'23</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
        
        /* Simulasi background ombak (wave) di sisi kiri */
        .bg-wave {
            background-color: #0d2c28;
            background-image: radial-gradient(circle at 0% 0%, #15453e 0%, transparent 50%), 
                              radial-gradient(circle at 100% 100%, #0a201d 0%, transparent 50%);
        }
    </style>
</head>
<body class="antialiased min-h-screen flex">

    <div class="hidden md:flex md:w-1/2 bg-wave relative flex-col justify-center px-12 lg:px-24 overflow-hidden">
        <div class="absolute inset-0 opacity-30 mix-blend-overlay" style="background: repeating-radial-gradient(circle at 0 0, transparent 0, #0d2c28 40px), repeating-linear-gradient(#15453e55, #15453e); filter: blur(20px);"></div>
        
        <div class="relative z-10 text-white">
            <div class="flex items-center gap-3 mb-16">
                <div class="bg-white p-2 rounded-full flex items-center justify-center">
                    <svg class="w-5 h-5 text-[#0d2c28]" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                </div>
                <span class="text-lg font-bold">Informatika'23</span>
            </div>

            <h1 class="text-5xl lg:text-6xl font-bold leading-tight mb-6">
                Welcome <br> Back
            </h1>
            <p class="text-gray-300 text-lg leading-relaxed max-w-sm">
                Continue your journey within the Informatika'23 creative ecosystem. Your innovation starts here.
            </p>
        </div>
    </div>