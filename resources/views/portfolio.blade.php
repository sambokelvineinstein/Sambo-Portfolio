<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $profile['name'] }} | Web Developer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-gray-950 text-gray-100 min-h-screen flex flex-col justify-between selection:bg-cyan-500 selection:text-gray-950 relative overflow-x-hidden">

    <!-- Background Glow Effects -->
    <div class="fixed top-0 left-1/2 -translate-x-1/2 w-[800px] h-[350px] bg-cyan-500/10 blur-[120px] pointer-events-none rounded-full"></div>
    <div class="fixed bottom-10 right-10 w-[400px] h-[400px] bg-blue-600/10 blur-[140px] pointer-events-none rounded-full"></div>

    <!-- Sticky Navigation Bar -->
    <nav class="sticky top-0 z-50 bg-gray-950/80 backdrop-blur-md border-b border-gray-800/80 px-6 py-4 transition-all">
        <div class="max-w-4xl mx-auto flex items-center justify-between">
            <a href="#hero" class="text-base font-bold text-white tracking-tight hover:text-cyan-400 transition flex items-center gap-2">
                <span class="w-2.5 h-2.5 rounded-full bg-cyan-400 animate-pulse"></span>
                {{ $profile['name'] }}
            </a>
            <div class="flex items-center gap-5 text-xs md:text-sm font-medium text-gray-400">
                <a href="#hero" class="hover:text-cyan-400 transition">About</a>
                <a href="#contact" class="hover:text-cyan-400 transition">Contact</a>
                <a href="#education" class="hover:text-cyan-400 transition">Education</a>
                <a href="#skills" class="hover:text-cyan-400 transition">Skills</a>
                <a href="#certifications" class="hover:text-cyan-400 transition">Certifications</a>
            </div>
        </div>
    </nav>

    <!-- Header / Hero Section -->
    <header id="hero" class="relative pt-20 pb-16 px-6 text-center border-b border-gray-800/60">
        <div class="max-w-4xl mx-auto flex flex-col md:flex-row items-center justify-center gap-8 md:gap-12">
            <!-- Profile Image Ring -->
            <div class="relative group">
                <div class="absolute -inset-1 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-full blur-md opacity-70 group-hover:opacity-100 transition duration-500"></div>
                <img src="{{ asset($profile['avatar']) }}" alt="{{ $profile['name'] }}" class="relative w-40 h-40 rounded-full object-cover border-4 border-gray-950 shadow-2xl">
            </div>
            
            <div class="text-center md:text-left space-y-3">
                <div class="inline-block px-3 py-1 bg-cyan-950/60 border border-cyan-500/30 rounded-full text-cyan-400 text-xs font-semibold uppercase tracking-wider">
                    Available for Projects
                </div>
                <h1 class="text-4xl md:text-5xl font-extrabold text-white tracking-tight leading-tight">
                    {{ $profile['name'] }}
                </h1>
                <p class="text-cyan-400 text-xl font-medium">{{ $profile['title'] }}</p>
                
                <div class="pt-2 flex justify-center md:justify-start gap-3">
                    <a href="{{ $profile['github'] }}" target="_blank" class="inline-flex items-center gap-2 px-5 py-2.5 bg-gray-900 hover:bg-gray-800 text-xs font-semibold text-white rounded-xl border border-gray-700 shadow-md hover:border-cyan-500/50 transition">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/></svg>
                        GitHub Profile
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-4xl mx-auto w-full px-6 py-12 space-y-12">
        
        <!-- Contact Details Section -->
        <section id="contact" class="bg-gray-900/40 p-8 rounded-2xl border border-gray-800/80 shadow-xl backdrop-blur-xl relative overflow-hidden">
            <div class="absolute top-0 right-0 w-32 h-32 bg-cyan-500/5 rounded-full blur-2xl pointer-events-none"></div>
            <h2 class="text-xl font-bold text-white mb-6 flex items-center gap-2 border-b border-gray-800/80 pb-4">
                <span class="text-cyan-400">📫</span> Contact Details
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                <div class="flex items-center gap-4 p-4 bg-gray-950/60 rounded-xl border border-gray-800/80 hover:border-cyan-500/30 transition">
                    <div class="w-10 h-10 rounded-lg bg-cyan-950/50 border border-cyan-500/20 flex items-center justify-center text-cyan-400 text-lg">
                        📧
                    </div>
                    <div>
                        <p class="text-xs text-gray-400 font-medium uppercase tracking-wider">Email Address</p>
                        <a href="mailto:{{ $profile['email'] }}" class="text-white hover:text-cyan-400 font-medium transition">{{ $profile['email'] }}</a>
                    </div>
                </div>
                <div class="flex items-center gap-4 p-4 bg-gray-950/60 rounded-xl border border-gray-800/80 hover:border-cyan-500/30 transition">
                    <div class="w-10 h-10 rounded-lg bg-cyan-950/50 border border-cyan-500/20 flex items-center justify-center text-cyan-400 text-lg">
                        📞
                    </div>
                    <div>
                        <p class="text-xs text-gray-400 font-medium uppercase tracking-wider">Phone Number</p>
                        <p class="text-white font-medium">{{ $profile['phone'] }}</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Education Section -->
        <section id="education" class="bg-gray-900/40 p-8 rounded-2xl border border-gray-800/80 shadow-xl backdrop-blur-xl">
            <h2 class="text-xl font-bold text-white mb-8 flex items-center gap-2 border-b border-gray-800/80 pb-4">
                <span class="text-cyan-400">🎓</span> Education
            </h2>
            
            <div class="relative border-l-2 border-gray-800 ml-3 space-y-8 pl-6">
                <!-- College -->
                <div class="relative group">
                    <div class="absolute -left-[31px] top-1.5 w-4 h-4 rounded-full bg-cyan-400 border-4 border-gray-950 group-hover:scale-125 transition"></div>
                    <h3 class="text-lg font-bold text-white group-hover:text-cyan-400 transition">{{ $profile['education']['college']['program'] }}</h3>
                    <p class="text-gray-300 text-sm mt-0.5">{{ $profile['education']['college']['school'] }}</p>
                    <span class="inline-block mt-2 px-2.5 py-0.5 bg-cyan-950/80 text-cyan-400 text-xs font-semibold rounded-md border border-cyan-500/20">
                        {{ $profile['education']['college']['year'] }}
                    </span>
                </div>

                <!-- Senior High School -->
                <div class="relative group">
                    <div class="absolute -left-[31px] top-1.5 w-4 h-4 rounded-full bg-gray-700 border-4 border-gray-950 group-hover:bg-cyan-400 transition"></div>
                    <h3 class="text-base font-semibold text-white">{{ $profile['education']['senior_high']['track'] }}</h3>
                    <p class="text-gray-300 text-sm mt-0.5">{{ $profile['education']['senior_high']['school'] }}</p>
                    <p class="text-gray-500 text-xs mt-1">{{ $profile['education']['senior_high']['year'] }}</p>
                </div>

                <!-- Elementary -->
                <div class="relative group">
                    <div class="absolute -left-[31px] top-1.5 w-4 h-4 rounded-full bg-gray-700 border-4 border-gray-950 group-hover:bg-cyan-400 transition"></div>
                    <h3 class="text-base font-semibold text-white">Elementary Education</h3>
                    <p class="text-gray-300 text-sm mt-0.5">{{ $profile['education']['elementary']['school'] }}</p>
                    <p class="text-gray-500 text-xs mt-1">{{ $profile['education']['elementary']['year'] }}</p>
                </div>
            </div>
        </section>

        <!-- Technical Skills Section -->
        <section id="skills" class="bg-gray-900/40 p-8 rounded-2xl border border-gray-800/80 shadow-xl backdrop-blur-xl">
            <h2 class="text-xl font-bold text-white mb-6 flex items-center gap-2 border-b border-gray-800/80 pb-4">
                <span class="text-cyan-400">⚡</span> Technical Skills
            </h2>
            <div class="flex flex-wrap gap-3">
                @foreach($profile['skills'] as $skill)
                    <span class="px-4 py-2 bg-gray-950/80 text-cyan-300 text-xs font-semibold rounded-xl border border-cyan-500/20 shadow-sm hover:border-cyan-400 hover:bg-cyan-950/40 hover:scale-105 transition duration-200 cursor-default">
                        {{ $skill }}
                    </span>
                @endforeach
            </div>
        </section>

        <!-- Certifications Section -->
        <section id="certifications" class="bg-gray-900/40 p-8 rounded-2xl border border-gray-800/80 shadow-xl backdrop-blur-xl">
            <h2 class="text-xl font-bold text-white mb-6 flex items-center gap-2 border-b border-gray-800/80 pb-4">
                <span class="text-cyan-400">📜</span> Certifications
            </h2>
            <div class="space-y-3">
                @foreach($profile['certifications'] as $cert)
                    <div class="flex items-start gap-3 p-4 bg-gray-950/40 rounded-xl border border-gray-800/60 hover:border-gray-700 transition">
                        <span class="mt-0.5 text-cyan-400 font-bold">✓</span>
                        <p class="text-gray-200 text-sm font-medium">{{ $cert }}</p>
                    </div>
                @endforeach
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer class="bg-gray-950 border-t border-gray-800/80 text-center py-8 text-xs text-gray-500">
        <p>&copy; {{ date('Y') }} {{ $profile['name'] }}. Built with Laravel & Tailwind CSS.</p>
    </footer>

</body>
</html>