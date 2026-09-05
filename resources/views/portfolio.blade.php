<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $profile['name'] }} | Developer Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-950 text-gray-100 min-h-screen flex flex-col justify-between font-sans selection:bg-cyan-500 selection:text-gray-950">

    <!-- Sticky Navigation Bar -->
    <nav class="sticky top-0 z-50 bg-gray-900/90 backdrop-blur border-b border-gray-800 px-6 py-4">
        <div class="max-w-4xl mx-auto flex items-center justify-between">
            <a href="#hero" class="text-lg font-bold text-cyan-400 hover:text-cyan-300 transition">
                {{ $profile['name'] }}
            </a>
            <div class="flex items-center gap-4 text-xs md:text-sm font-medium text-gray-300">
                <a href="#hero" class="hover:text-cyan-400 transition">About</a>
                <a href="#contact" class="hover:text-cyan-400 transition">Contact</a>
                <a href="#education" class="hover:text-cyan-400 transition">Education</a>
                <a href="#skills" class="hover:text-cyan-400 transition">Skills</a>
                <a href="#certifications" class="hover:text-cyan-400 transition">Certifications</a>
            </div>
        </div>
    </nav>

    <!-- Header / Hero Section -->
    <header id="hero" class="bg-gradient-to-b from-gray-900 to-gray-950 border-b border-gray-800 py-16 px-6 text-center">
        <div class="max-w-4xl mx-auto flex flex-col md:flex-row items-center justify-center gap-8">
            <div class="relative group">
                <div class="absolute -inset-0.5 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full blur opacity-75 group-hover:opacity-100 transition duration-500"></div>
                <img src="{{ asset('images/profile.jpg') }}" alt="{{ $profile['name'] }}" class="relative w-36 h-36 rounded-full object-cover border-2 border-gray-900 shadow-2xl">
            </div>
            <div class="text-center md:text-left">
                <h1 class="text-4xl md:text-5xl font-extrabold text-white tracking-tight">{{ $profile['name'] }}</h1>
                <p class="text-cyan-400 text-xl font-semibold mt-1">{{ $profile['title'] }}</p>
                <div class="mt-4 flex justify-center md:justify-start gap-3">
                    <a href="{{ $profile['github'] }}" target="_blank" class="px-4 py-2 bg-gray-800 hover:bg-gray-700 text-xs font-semibold text-white rounded-lg border border-gray-700 shadow-sm transition">
                        GitHub Profile
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-4xl mx-auto w-full px-6 py-12 space-y-10">
        
        <!-- Contact Details Section (Placed Above Education) -->
        <section id="contact" class="bg-gray-900/80 p-8 rounded-xl border border-gray-800 shadow-lg backdrop-blur">
            <h2 class="text-2xl font-bold text-cyan-400 mb-6 flex items-center gap-2 border-b border-gray-800 pb-3">
                📫 Contact Details
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm text-gray-300">
                <div class="flex items-center gap-3 p-4 bg-gray-800/50 rounded-lg border border-gray-800">
                    <span class="text-xl">📧</span>
                    <div>
                        <p class="text-xs text-gray-400 font-medium">Email Address</p>
                        <a href="mailto:{{ $profile['email'] }}" class="text-white hover:text-cyan-400 font-medium transition">{{ $profile['email'] }}</a>
                    </div>
                </div>
                <div class="flex items-center gap-3 p-4 bg-gray-800/50 rounded-lg border border-gray-800">
                    <span class="text-xl">📞</span>
                    <div>
                        <p class="text-xs text-gray-400 font-medium">Phone Number</p>
                        <p class="text-white font-medium">{{ $profile['phone'] }}</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Education Section -->
        <section id="education" class="bg-gray-900/80 p-8 rounded-xl border border-gray-800 shadow-lg backdrop-blur">
            <h2 class="text-2xl font-bold text-cyan-400 mb-6 flex items-center gap-2 border-b border-gray-800 pb-3">
                🎓 Education
            </h2>
            
            <div class="space-y-6">
                <!-- College -->
                <div class="relative pl-4 border-l-2 border-cyan-500">
                    <h3 class="text-lg font-semibold text-white">{{ $profile['education']['college']['program'] }}</h3>
                    <p class="text-gray-300 text-sm mt-0.5">{{ $profile['education']['college']['school'] }}</p>
                    <p class="text-cyan-400 text-xs mt-1 font-medium">{{ $profile['education']['college']['year'] }}</p>
                </div>

                <!-- Senior High School -->
                <div class="relative pl-4 border-l-2 border-gray-700">
                    <h3 class="text-base font-semibold text-white">{{ $profile['education']['senior_high']['track'] }}</h3>
                    <p class="text-gray-300 text-sm mt-0.5">{{ $profile['education']['senior_high']['school'] }}</p>
                    <p class="text-gray-400 text-xs mt-1">{{ $profile['education']['senior_high']['year'] }}</p>
                </div>

                <!-- Elementary -->
                <div class="relative pl-4 border-l-2 border-gray-700">
                    <h3 class="text-base font-semibold text-white">Elementary Education</h3>
                    <p class="text-gray-300 text-sm mt-0.5">{{ $profile['education']['elementary']['school'] }}</p>
                    <p class="text-gray-400 text-xs mt-1">{{ $profile['education']['elementary']['year'] }}</p>
                </div>
            </div>
        </section>

        <!-- Technical Skills Section -->
        <section id="skills" class="bg-gray-900/80 p-8 rounded-xl border border-gray-800 shadow-lg backdrop-blur">
            <h2 class="text-2xl font-bold text-cyan-400 mb-6 flex items-center gap-2 border-b border-gray-800 pb-3">
                ⚡ Technical Skills
            </h2>
            <div class="flex flex-wrap gap-2.5">
                @foreach($profile['skills'] as $skill)
                    <span class="px-3.5 py-1.5 bg-gray-800 text-cyan-300 text-sm font-medium rounded-lg border border-cyan-500/20 hover:border-cyan-500/50 hover:bg-gray-750 transition">
                        {{ $skill }}
                    </span>
                @endforeach
            </div>
        </section>

        <!-- Certifications Section -->
        <section id="certifications" class="bg-gray-900/80 p-8 rounded-xl border border-gray-800 shadow-lg backdrop-blur">
            <h2 class="text-2xl font-bold text-cyan-400 mb-6 flex items-center gap-2 border-b border-gray-800 pb-3">
                📜 Certifications
            </h2>
            <ul class="space-y-3">
                @foreach($profile['certifications'] as $cert)
                    <li class="flex items-center gap-3 text-gray-300 text-sm">
                        <span class="w-2 h-2 rounded-full bg-cyan-400"></span>
                        {{ $cert }}
                    </li>
                @endforeach
            </ul>
        </section>

    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 border-t border-gray-800 text-center py-6 text-xs text-gray-500">
        &copy; {{ date('Y') }} {{ $profile['name'] }}. Built with Laravel & Tailwind CSS.
    </footer>

</body>
</html>