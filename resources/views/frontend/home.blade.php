@extends('layouts.dashboardFE')

@section('content')
    <section class="w-full py-12 md:py-24 lg:py-32 bg-gradient-to-b from-teal-50 to-white">
        <div class="container px-4 md:px-6">
            <div class="grid gap-6 lg:grid-cols-2 lg:gap-12 items-center">
                <div class="space-y-4">
                    <h1 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl lg:text-6xl">
                        Temukan Kesempatan Magang Terbaik
                    </h1>
                    <p class="max-w-[600px] text-gray-500 md:text-xl">
                        Terhubung dengan perusahaan terkemuka yang menawarkan magang sesuai dengan jurusan dan tujuan karir Anda. Mulai perjalanan profesional Anda hari ini.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-teal-500 text-white hover:bg-teal-600 h-10 px-4 py-2">
                            Telusuri Lowongan
                        </a>
                        <a href="#" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-gray-300 bg-white hover:bg-gray-100 h-10 px-4 py-2">
                            Untuk Perusahaan
                        </a>
                    </div>
                </div>
                <div class="flex justify-center">
                    <img
                        src="https://placehold.co/500x500/teal/white?text=Mahasiswa+Magang"
                        alt="Mahasiswa sedang magang"
                        class="rounded-lg object-cover"
                        width="500"
                        height="500"
                    />
                </div>
            </div>
        </div>
    </section>

    <section class="w-full py-12 md:py-24 bg-white">
        <div class="container px-4 md:px-6">
            <div class="flex flex-col items-center justify-center space-y-4 text-center">
                <div class="space-y-2">
                    <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl">
                        Telusuri Lowongan Berdasarkan Jurusan
                    </h2>
                    <p class="max-w-[900px] text-gray-500 md:text-xl/relaxed lg:text-base/relaxed xl:text-xl/relaxed">
                        Temukan kesempatan yang disesuaikan dengan bidang studi Anda
                    </p>
                </div>
            </div>
            <div class="mx-auto mt-8 max-w-3xl">
                <div class="w-full">
                    <div class="flex border-b mb-8">
                        <button class="px-4 py-2 font-medium text-sm border-b-2 border-teal-500 text-teal-500" id="tab-cs" onclick="switchTab('computer-science')">Teknik Informatika</button>
                        <button class="px-4 py-2 font-medium text-sm" id="tab-eng" onclick="switchTab('engineering')">Teknik</button>
                        <button class="px-4 py-2 font-medium text-sm" id="tab-bus" onclick="switchTab('business')">Bisnis</button>
                        <button class="px-4 py-2 font-medium text-sm" id="tab-des" onclick="switchTab('design')">Desain</button>
                    </div>
                    
                    <div id="computer-science-content" class="tab-content space-y-4">
                        <div class="grid gap-4 md:grid-cols-2">
                            @foreach([
                                [
                                    'title' => 'Magang Pengembang Perangkat Lunak',
                                    'company' => 'TechCorp',
                                    'location' => 'Remote',
                                    'type' => 'Full-time',
                                ],
                                [
                                    'title' => 'Magang Pengembangan Web',
                                    'company' => 'WebSolutions',
                                    'location' => 'Jakarta',
                                    'type' => 'Part-time',
                                ],
                                [
                                    'title' => 'Pengembang Aplikasi Mobile',
                                    'company' => 'AppWorks',
                                    'location' => 'Bandung',
                                    'type' => 'Full-time',
                                ],
                                [
                                    'title' => 'Magang Data Science',
                                    'company' => 'DataMinds',
                                    'location' => 'Surabaya',
                                    'type' => 'Full-time',
                                ]
                            ] as $job)
                                <div class="rounded-lg border bg-white text-gray-900 shadow-sm">
                                    <div class="flex flex-col space-y-1.5 p-6">
                                        <h3 class="text-lg font-semibold leading-none tracking-tight">{{ $job['title'] }}</h3>
                                        <p class="text-sm text-gray-500">{{ $job['company'] }}</p>
                                    </div>
                                    <div class="p-6 pt-0">
                                        <div class="flex items-center gap-2 text-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                                                <rect width="20" height="14" x="2" y="7" rx="2" ry="2"></rect>
                                                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                            </svg>
                                            <span>{{ $job['location'] }}</span>
                                        </div>
                                        <div class="flex items-center gap-2 text-sm mt-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                                                <rect width="20" height="14" x="2" y="7" rx="2" ry="2"></rect>
                                                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                            </svg>
                                            <span>{{ $job['type'] }}</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center p-6 pt-0">
                                        <a href="#" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-gray-300 bg-white hover:bg-gray-100 h-9 px-4 py-2 w-full">
                                            Lihat Detail
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="flex justify-center">
                            <a href="#" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-gray-300 bg-white hover:bg-gray-100 h-9 px-4 py-2 gap-1">
                                Lihat Semua 
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                                    <path d="m9 18 6-6-6-6"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    
                    <div id="engineering-content" class="tab-content space-y-4 hidden">
                        <div class="grid gap-4 md:grid-cols-2">
                            @foreach([
                                [
                                    'title' => 'Magang Teknik Mesin',
                                    'company' => 'EngineerWorks',
                                    'location' => 'Jakarta',
                                    'type' => 'Full-time',
                                ],
                                [
                                    'title' => 'Asisten Teknik Sipil',
                                    'company' => 'BuildRight',
                                    'location' => 'Bandung',
                                    'type' => 'Part-time',
                                ],
                                [
                                    'title' => 'Magang Teknik Elektro',
                                    'company' => 'PowerTech',
                                    'location' => 'Surabaya',
                                    'type' => 'Full-time',
                                ],
                                [
                                    'title' => 'Magang Teknik Penerbangan',
                                    'company' => 'SkyWorks',
                                    'location' => 'Jakarta',
                                    'type' => 'Full-time',
                                ]
                            ] as $job)
                                <div class="rounded-lg border bg-white text-gray-900 shadow-sm">
                                    <div class="flex flex-col space-y-1.5 p-6">
                                        <h3 class="text-lg font-semibold leading-none tracking-tight">{{ $job['title'] }}</h3>
                                        <p class="text-sm text-gray-500">{{ $job['company'] }}</p>
                                    </div>
                                    <div class="p-6 pt-0">
                                        <div class="flex items-center gap-2 text-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                                                <rect width="20" height="14" x="2" y="7" rx="2" ry="2"></rect>
                                                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                            </svg>
                                            <span>{{ $job['location'] }}</span>
                                        </div>
                                        <div class="flex items-center gap-2 text-sm mt-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                                                <rect width="20" height="14" x="2" y="7" rx="2" ry="2"></rect>
                                                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                            </svg>
                                            <span>{{ $job['type'] }}</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center p-6 pt-0">
                                        <a href="#" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-gray-300 bg-white hover:bg-gray-100 h-9 px-4 py-2 w-full">
                                            Lihat Detail
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="flex justify-center">
                            <a href="#" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-gray-300 bg-white hover:bg-gray-100 h-9 px-4 py-2 gap-1">
                                Lihat Semua 
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                                    <path d="m9 18 6-6-6-6"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    
                    <div id="business-content" class="tab-content space-y-4 hidden">
                        <div class="grid gap-4 md:grid-cols-2">
                            @foreach([
                                [
                                    'title' => 'Magang Marketing',
                                    'company' => 'BrandBoost',
                                    'location' => 'Jakarta',
                                    'type' => 'Part-time',
                                ],
                                [
                                    'title' => 'Magang Analis Keuangan',
                                    'company' => 'CapitalGrowth',
                                    'location' => 'Jakarta',
                                    'type' => 'Full-time',
                                ],
                                [
                                    'title' => 'Asisten HR',
                                    'company' => 'PeopleFirst',
                                    'location' => 'Bandung',
                                    'type' => 'Part-time',
                                ],
                                [
                                    'title' => 'Magang Business Development',
                                    'company' => 'GrowthPartners',
                                    'location' => 'Surabaya',
                                    'type' => 'Full-time',
                                ]
                            ] as $job)
                                <div class="rounded-lg border bg-white text-gray-900 shadow-sm">
                                    <div class="flex flex-col space-y-1.5 p-6">
                                        <h3 class="text-lg font-semibold leading-none tracking-tight">{{ $job['title'] }}</h3>
                                        <p class="text-sm text-gray-500">{{ $job['company'] }}</p>
                                    </div>
                                    <div class="p-6 pt-0">
                                        <div class="flex items-center gap-2 text-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                                                <rect width="20" height="14" x="2" y="7" rx="2" ry="2"></rect>
                                                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                            </svg>
                                            <span>{{ $job['location'] }}</span>
                                        </div>
                                        <div class="flex items-center gap-2 text-sm mt-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                                                <rect width="20" height="14" x="2" y="7" rx="2" ry="2"></rect>
                                                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                            </svg>
                                            <span>{{ $job['type'] }}</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center p-6 pt-0">
                                        <a href="#" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-gray-300 bg-white hover:bg-gray-100 h-9 px-4 py-2 w-full">
                                            Lihat Detail
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="flex justify-center">
                            <a href="#" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-gray-300 bg-white hover:bg-gray-100 h-9 px-4 py-2 gap-1">
                                Lihat Semua 
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                                    <path d="m9 18 6-6-6-6"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    
                    <div id="design-content" class="tab-content space-y-4 hidden">
                        <div class="grid gap-4 md:grid-cols-2">
                            @foreach([
                                [
                                    'title' => 'Magang UI/UX Design',
                                    'company' => 'DesignLab',
                                    'location' => 'Remote',
                                    'type' => 'Part-time',
                                ],
                                [
                                    'title' => 'Magang Desain Grafis',
                                    'company' => 'CreativeStudio',
                                    'location' => 'Jakarta',
                                    'type' => 'Full-time',
                                ],
                                [
                                    'title' => 'Magang Desain Produk',
                                    'company' => 'InnovateDesign',
                                    'location' => 'Bandung',
                                    'type' => 'Full-time',
                                ],
                                [
                                    'title' => 'Magang Motion Graphics',
                                    'company' => 'VisualWorks',
                                    'location' => 'Surabaya',
                                    'type' => 'Part-time',
                                ]
                            ] as $job)
                                <div class="rounded-lg border bg-white text-gray-900 shadow-sm">
                                    <div class="flex flex-col space-y-1.5 p-6">
                                        <h3 class="text-lg font-semibold leading-none tracking-tight">{{ $job['title'] }}</h3>
                                        <p class="text-sm text-gray-500">{{ $job['company'] }}</p>
                                    </div>
                                    <div class="p-6 pt-0">
                                        <div class="flex items-center gap-2 text-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                                                <rect width="20" height="14" x="2" y="7" rx="2" ry="2"></rect>
                                                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                            </svg>
                                            <span>{{ $job['location'] }}</span>
                                        </div>
                                        <div class="flex items-center gap-2 text-sm mt-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                                                <rect width="20" height="14" x="2" y="7" rx="2" ry="2"></rect>
                                                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                            </svg>
                                            <span>{{ $job['type'] }}</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center p-6 pt-0">
                                        <a href="#" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-gray-300 bg-white hover:bg-gray-100 h-9 px-4 py-2 w-full">
                                            Lihat Detail
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="flex justify-center">
                            <a href="#" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-gray-300 bg-white hover:bg-gray-100 h-9 px-4 py-2 gap-1">
                                Lihat Semua 
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                                    <path d="m9 18 6-6-6-6"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full py-12 md:py-24 bg-gray-50">
        <div class="container px-4 md:px-6">
            <div class="flex flex-col items-center justify-center space-y-4 text-center">
                <div class="space-y-2">
                    <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl">
                        Mengapa Memilih SisMagang?
                    </h2>
                    <p class="max-w-[900px] text-gray-500 md:text-xl/relaxed lg:text-base/relaxed xl:text-xl/relaxed">
                        Kami menghubungkan mahasiswa dengan kesempatan magang terbaik
                    </p>
                </div>
            </div>
            <div class="mx-auto grid max-w-5xl items-center gap-6 py-12 lg:grid-cols-3">
                <div class="rounded-lg border bg-white text-gray-900 shadow-sm">
                    <div class="flex flex-col space-y-1.5 p-6">
                        <div class="mb-3 inline-flex h-12 w-12 items-center justify-center rounded-lg bg-teal-100">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6 text-teal-500">
                                <path d="M22 10v6M2 10l10-5 10 5-10 5z"></path>
                                <path d="M6 12v5c0 2 2 3 6 3s6-1 6-3v-5"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold leading-none tracking-tight">Kesempatan Sesuai Jurusan</h3>
                    </div>
                    <div class="p-6 pt-0">
                        <p class="text-sm text-gray-500">
                            Temukan magang yang disesuaikan dengan bidang studi dan tujuan karir Anda.
                        </p>
                    </div>
                </div>
                <div class="rounded-lg border bg-white text-gray-900 shadow-sm">
                    <div class="flex flex-col space-y-1.5 p-6">
                        <div class="mb-3 inline-flex h-12 w-12 items-center justify-center rounded-lg bg-teal-100">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6 text-teal-500">
                                <rect width="20" height="14" x="2" y="7" rx="2" ry="2"></rect>
                                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold leading-none tracking-tight">Perusahaan Terkemuka</h3>
                    </div>
                    <div class="p-6 pt-0">
                        <p class="text-sm text-gray-500">
                            Terhubung dengan perusahaan terkemuka yang mencari mahasiswa berbakat seperti Anda.
                        </p>
                    </div>
                </div>
                <div class="rounded-lg border bg-white text-gray-900 shadow-sm">
                    <div class="flex flex-col space-y-1.5 p-6">
                        <div class="mb-3 inline-flex h-12 w-12 items-center justify-center rounded-lg bg-teal-100">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6 text-teal-500">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold leading-none tracking-tight">Dukungan Karir</h3>
                    </div>
                    <div class="p-6 pt-0">
                        <p class="text-sm text-gray-500">
                            Dapatkan bimbingan dan sumber daya untuk membantu Anda sukses dalam magang Anda.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full py-12 md:py-24 bg-teal-500 text-white">
        <div class="container px-4 md:px-6">
            <div class="flex flex-col items-center justify-center space-y-4 text-center">
                <div class="space-y-2">
                    <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl">
                        Siap Memulai Perjalanan Karir Anda?
                    </h2>
                    <p class="max-w-[900px] md:text-xl/relaxed lg:text-base/relaxed xl:text-xl/relaxed">
                        Bergabunglah dengan ribuan mahasiswa yang menemukan magang sempurna melalui platform kami
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-white text-teal-500 hover:bg-gray-100 h-10 px-4 py-2">
                        Daftar Sekarang
                    </a>
                    <a href="#" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-white text-white hover:bg-teal-600 h-10 px-4 py-2">
                        Pelajari Lebih Lanjut
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
