<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InternConnect - Sistem Informasi Magang Mahasiswa</title>
    <meta name="description" content="Temukan kesempatan magang yang sesuai dengan jurusan dan tujuan karir Anda">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        teal: {
                            50: '#f0fdfa',
                            100: '#ccfbf1',
                            500: '#14b8a6',
                            600: '#0d9488',
                        }
                    }
                }
            }
        }
    </script>
    
    <!-- Tab Switching Script -->
    <script>
        function switchTab(tabId) {
            // Sembunyikan semua konten tab
            document.querySelectorAll(".tab-content").forEach((content) => {
                content.classList.add("hidden");
            });

            // Hapus kelas aktif dari semua tombol tab
            document.querySelectorAll('[id^="tab-"]').forEach((tab) => {
                tab.classList.remove("border-b-2", "border-teal-500", "text-teal-500");
            });

            // Tampilkan konten tab yang dipilih
            document.getElementById(tabId + "-content").classList.remove("hidden");

            // Tambahkan kelas aktif ke tombol tab yang dipilih
            const tabButton = document.getElementById("tab-" + tabId.split("-")[0]);
            tabButton.classList.add("border-b-2", "border-teal-500", "text-teal-500");
        }
    </script>
</head>
<body class="bg-white text-gray-900">
    <div class="flex min-h-screen flex-col">
        <header class="sticky top-0 z-50 w-full border-b bg-white/95 backdrop-blur supports-[backdrop-filter]:bg-white/60">
            <div class="container flex h-16 items-center justify-between">
                <div class="flex items-center gap-2 font-bold text-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6 text-teal-500">
                        <path d="M22 10v6M2 10l10-5 10 5-10 5z"></path>
                        <path d="M6 12v5c0 2 2 3 6 3s6-1 6-3v-5"></path>
                    </svg>
                    <span>SIMAG</span>
                </div>
                <nav class="hidden md:flex gap-6">
                    <a href="#" class="text-sm font-medium hover:text-teal-500 transition-colors">Beranda</a>
                    <a href="#" class="text-sm font-medium hover:text-teal-500 transition-colors">Lowongan</a>
                    <a href="#" class="text-sm font-medium hover:text-teal-500 transition-colors">Perusahaan</a>
                    <a href="#" class="text-sm font-medium hover:text-teal-500 transition-colors">Tentang</a>
                    <a href="#" class="text-sm font-medium hover:text-teal-500 transition-colors">Kontak</a>
                </nav>
                <div class="flex items-center gap-4">
                    <a href="/login" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-gray-300 bg-white hover:bg-gray-100 h-9 px-4 py-2">
                        Masuk
                    </a>
                    <a href="#" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-teal-500 text-white hover:bg-teal-600 h-9 px-4 py-2">
                        Daftar
                    </a>
                </div>
            </div>
        </header>
        
        <main class="flex-1">
            @yield('content')
        </main>
        
        <footer class="w-full border-t bg-white py-6 md:py-12">
            <div class="container flex flex-col items-center justify-center gap-4 px-4 md:px-6 md:flex-row md:justify-between">
                <div class="flex items-center gap-2 font-bold text-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6 text-teal-500">
                        <path d="M22 10v6M2 10l10-5 10 5-10 5z"></path>
                        <path d="M6 12v5c0 2 2 3 6 3s6-1 6-3v-5"></path>
                    </svg>
                    <span>SIMAG</span>
                </div>
                <div class="flex gap-4">
                    <a href="#" class="text-sm font-medium hover:text-teal-500 transition-colors">Kebijakan Privasi</a>
                    <a href="#" class="text-sm font-medium hover:text-teal-500 transition-colors">Syarat Layanan</a>
                    <a href="#" class="text-sm font-medium hover:text-teal-500 transition-colors">Hubungi Kami</a>
                </div>
                <p class="text-sm text-gray-500">© {{ date('Y') }} SIMAG. Hak Cipta Dilindungi.</p>
            </div>
        </footer>
    </div>
</body>
</html>
