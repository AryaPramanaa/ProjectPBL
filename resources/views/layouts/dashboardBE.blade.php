@section('dasMHS','active')

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />

</head>

<body class="bg-gray-100">
    <!-- Hamburger Menu Button (Mobile Only) -->
    <button id="menu-toggle" class="md:hidden fixed top-4 left-4 z-50 bg-white p-2 rounded-md shadow-md">
        <i class="fas fa-bars text-gray-700"></i>
    </button>

    <!-- Sidebar -->
    <div id="sidebar"
        class="fixed -left-64 md:left-0 transition-all duration-300 flex flex-col w-64 h-screen bg-white shadow-md z-40">
        <div class="flex items-center justify-center h-16  border-b-2 border-gray-300 text-black">
            <i class="fas fa-graduation-cap text-2xl mr-2"></i>
            <span class="text-xl font-semibold">SIMAG</span>
        </div>
        <div class="flex flex-col mt-4">
            <a class=" {{ request()->is('dashboard')? ' bg-gray-300 text-gray-950 rounded-xl my-1 mx-3':'bg-none  text-gray-600 hover:bg-gray-100 hover:rounded-xl my-1 mx-3'}} flex items-center px-4 py-2  " href="/dashboard">
                <i class="fas fa-home mr-3"></i>
                <span>Dashboard </span>
            </a>
            <a class="{{ request()->is('pendaftaranPKL','C_PendaftaranPKL')? ' bg-gray-300  text-gray-900 rounded-xl my-1 mx-3':'bg-none  text-gray-600 hover:bg-gray-100 hover:rounded-xl my-1 mx-3'}} flex items-center px-4 py-2 " href="/pendaftaranPKL">
                <i class="fas fa-file-alt mr-3"></i>
                <span>Pendaftaran PKL</span>
            </a>
            <a class="{{ request()->is('')? ' bg-gray-300  text-gray-950 rounded-xl my-1 mx-3':'bg-none  text-gray-600 hover:bg-gray-100 hover:rounded-xl my-1 mx-3'}} flex items-center px-4 py-2" href="#">
                <i class="fas fa-building mr-3"></i>
                <span>Daftar Perusahaan PKL</span>
            </a>
            <a class="flex items-center px-4 py-2 text-gray-600 hover:bg-gray-100" href="#">
                <i class="fas fa-user mr-3"></i>
                <span>Profil</span>
            </a>
            <a class="flex items-center px-4 py-2 text-gray-600 hover:bg-gray-100" href="#">
                <i class="fas fa-file mr-3"></i>
                <span>Surat Pengantar Perusahaan</span>
            </a>
        </div>
        <div class="flex items-center justify-between p-4 mt-auto border-t-2 border-gray-300">
            <div class="flex items-center">
                <img alt="User profile picture" class="w-10 h-10 rounded-full mr-3" src="https://placehold.co/40x40" />
                <div>
                    <p class="text-gray-900 font-semibold">{{ $mahasiswa->nama }}</p>
                    <p class="text-gray-600 text-sm">{{ $mahasiswa->tempat_lahir }}</p>
                </div>
            </div>
            <form method="POST" action="{{ route('logout') }}" class="inline">
                @csrf
                <button type="submit" class="text-gray-600 hover:text-gray-900 bg-transparent border-0 p-0">
                    <i class="fas fa-sign-out-alt"></i>
                </button>
            </form>
        </div>
    </div>

    <!-- Main Content -->
    <div class="md:ml-64 p-4">
        <!-- Content will go here -->
        <div class="bg-white p-4 rounded-lg shadow text-black">
           @yield('content')
        </div>
    </div>

    <!-- Overlay for Mobile -->
    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 z-30 hidden"></div>

    <script>
        // Toggle Sidebar
        const menuToggle = document.getElementById('menu-toggle');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');

        menuToggle.addEventListener('click', () => {
            sidebar.classList.toggle('left-0');
            overlay.classList.toggle('hidden');
        });

        overlay.addEventListener('click', () => {
            sidebar.classList.remove('left-0');
            overlay.classList.add('hidden');
        });
    </script>
</body>

</html>
