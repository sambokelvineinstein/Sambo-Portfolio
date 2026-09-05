<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $profile['name'] }} | Developer Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-gray-100 min-h-screen flex flex-col justify-between font-sans">

    <!-- Header / Hero Section -->
    <header class="bg-gray-800 border-b border-gray-700 py-10 px-6 text-center">
        <div class="max-w-4xl mx-auto flex flex-col md:flex-row items-center justify-center gap-6">
            <img src="{{ asset('images/profile.jpg') }}" alt="{{ $profile['name'] }}" class="w-32 h-32 rounded-full border-4 border-cyan-500 object-cover shadow-lg">
            <div class="text-left">
                <h1 class="text-4xl font-bold text-white">{{ $profile['name'] }}</h1>
                <p class="text-cyan-400 text-lg font-semibold">{{ $profile['title'] }}</p>
                <p class="text-gray-400 text-sm mt-1">📧 {{ $profile['email'] }} | 📞 {{ $profile['phone'] }}</p>
                <div class="mt-3 flex gap-3">
                    <a href="{{ $profile['github'] }}" target="_blank" class="px-3 py-1 bg-gray-700 hover:bg-gray-600 text-xs text-white rounded">GitHub</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-4xl mx-auto w-full px-6 py-10 grid grid-cols-1 md:grid-cols-2 gap-8">
        
        <!-- Education -->
        <section class="bg-gray-800 p-6 rounded-lg border border-gray-700 shadow-md">
            <h2 class="text-xl font-bold text-cyan-400 mb-4 border-b border-gray-700 pb-2">🎓 Education</h2>
            
            <!-- College -->
            <div class="mb-4">
                <h3 class="text-lg font-semibold text-white">{{ $profile['education']['college']['program'] }}</h3>
                <p class="text-gray-300">{{ $profile['education']['college']['school'] }}</p>
                <p class="text-gray-400 text-xs mt-1">{{ $profile['education']['college']['year'] }}</p>
            </div>

            <!-- Senior High School -->
            <div class="mb-4 border-t border-gray-700/50 pt-3">
                <h3 class="text-base font-semibold text-white">{{ $profile['education']['senior_high']['track'] }}</h3>
                <p class="text-gray-300 text-sm">{{ $profile['education']['senior_high']['school'] }}</p>
                <p class="text-gray-400 text-xs mt-1">{{ $profile['education']['senior_high']['year'] }}</p>
            </div>

            <!-- Elementary -->
            <div class="border-t border-gray-700/50 pt-3">
                <h3 class="text-base font-semibold text-white">Elementary Education</h3>
                <p class="text-gray-300 text-sm">{{ $profile['education']['elementary']['school'] }}</p>
                <p class="text-gray-400 text-xs mt-1">{{ $profile['education']['elementary']['year'] }}</p>
            </div>
        </section>

        <!-- Certifications -->
        <section class="bg-gray-800 p-6 rounded-lg border border-gray-700 shadow-md">
            <h2 class="text-xl font-bold text-cyan-400 mb-4 border-b border-gray-700 pb-2">📜 Certifications</h2>
            <ul class="list-disc list-inside space-y-2 text-gray-300">
                @foreach($profile['certifications'] as $cert)
                    <li>{{ $cert }}</li>
                @endforeach
            </ul>
        </section>

        <!-- Technical Skills -->
        <section class="bg-gray-800 p-6 rounded-lg border border-gray-700 shadow-md md:col-span-2">
            <h2 class="text-xl font-bold text-cyan-400 mb-4 border-b border-gray-700 pb-2">⚡ Technical Skills</h2>
            <div class="flex flex-wrap gap-2">
                @foreach($profile['skills'] as $skill)
                    <span class="px-3 py-1 bg-gray-700 text-cyan-300 text-sm font-medium rounded-full border border-cyan-500/30">
                        {{ $skill }}
                    </span>
                @endforeach
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 border-t border-gray-700 text-center py-4 text-xs text-gray-400">
        &copy; {{ date('Y') }} {{ $profile['name'] }}. Built with Laravel & Tailwind CSS.
    </footer>

</body>
</html>