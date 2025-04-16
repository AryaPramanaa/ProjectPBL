<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Sistem Manajemen Magang</title>
    
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
    
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {
                            DEFAULT: "#4f46e5",
                            foreground: "#ffffff",
                        },
                        muted: {
                            DEFAULT: "#f3f4f6",
                            foreground: "#6b7280",
                        },
                        accent: {
                            DEFAULT: "#eff6ff",
                            foreground: "#1e40af",
                        },
                    },
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 dark:bg-gray-900">
    <div class="flex min-h-screen items-center justify-center p-4">
        <div class="w-full max-w-md rounded-lg border border-gray-200 bg-white p-6 shadow-md dark:border-gray-700 dark:bg-gray-800">
            <div class="mb-6 flex justify-center">
                <div class="rounded-full bg-primary/10 p-3">
                    <i data-lucide="graduation-cap" class="h-8 w-8 text-primary"></i>
                </div>
            </div>
            
            <div class="space-y-1 text-center">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Login</h2>
                <p class="text-sm text-gray-500 dark:text-gray-400">Masukkan kredensial untuk mengakses akun Anda</p>
            </div>
            
            @if ($errors->any())
            <div class="mt-4 rounded-md bg-red-50 p-4 text-sm text-red-600 dark:bg-red-900/50 dark:text-red-200">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            
            <div class="mt-6">
                <div class="flex w-full rounded-md border border-gray-200 dark:border-gray-700">
                    <button id="tab-student" class="flex-1 rounded-l-md px-3 py-2 text-center text-sm font-medium transition-colors hover:bg-gray-100 dark:hover:bg-gray-700 bg-gray-100 dark:bg-gray-700">
                        <div class="flex items-center justify-center gap-2">
                            <i data-lucide="graduation-cap" class="h-4 w-4"></i>
                            <span class="hidden sm:inline">Mahasiswa</span>
                        </div>
                    </button>
                    <button id="tab-company" class="flex-1 px-3 py-2 text-center text-sm font-medium transition-colors hover:bg-gray-100 dark:hover:bg-gray-700">
                        <div class="flex items-center justify-center gap-2">
                            <i data-lucide="building-2" class="h-4 w-4"></i>
                            <span class="hidden sm:inline">Perusahaan</span>
                        </div>
                    </button>
                    <button id="tab-staff" class="flex-1 rounded-r-md px-3 py-2 text-center text-sm font-medium transition-colors hover:bg-gray-100 dark:hover:bg-gray-700">
                        <div class="flex items-center justify-center gap-2">
                            <i data-lucide="users" class="h-4 w-4"></i>
                            <span class="hidden sm:inline">Staf</span>
                        </div>
                    </button>
                </div>
                
                <div class="mt-6">
                    <!-- Student Login Form -->
                    <form id="form-student" method="POST" action="{{ route('login') }}" class="space-y-4">
                        @csrf
                        <input type="hidden" name="role" value="student">
                        
                        <div class="space-y-2">
                            <label for="student-id" class="text-sm font-medium text-gray-700 dark:text-gray-300">NIM</label>
                            <input id="student-id" name="student_id" type="text" placeholder="Masukkan NIM Anda" required 
                                class="flex h-10 w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-sm placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-50 dark:focus:ring-primary"
                                value="">
                        </div>
                        
                        <div class="space-y-2">
                            <div class="flex items-center justify-between">
                                <label for="student-password" class="text-sm font-medium text-gray-700 dark:text-gray-300">Password</label>
                                <a href="" class="text-xs text-primary hover:underline">
                                    Lupa Password?
                                </a>
                            </div>
                            <input id="student-password" name="password" type="password" placeholder="••••••••" required 
                                class="flex h-10 w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-sm placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-50 dark:focus:ring-primary">
                        </div>
                        
                        <div class="flex items-center space-x-2">
                            <input type="checkbox" id="student-remember" name="remember" class="h-4 w-4 rounded border-gray-300 text-primary focus:ring-primary dark:border-gray-700 dark:bg-gray-900">
                            <label for="student-remember" class="text-sm text-gray-600 dark:text-gray-400">Ingat saya</label>
                        </div>
                        
                        <button type="submit" class="inline-flex w-full items-center justify-center rounded-md bg-primary px-4 py-2 text-sm font-medium text-primary-foreground hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 disabled:pointer-events-none disabled:opacity-50">
                            Login sebagai Mahasiswa
                        </button>
                    </form>
                    
                    <!-- Company Login Form -->
                    <form id="form-company" method="POST" action="{{ route('login') }}" class="hidden space-y-4">
                        @csrf
                        <input type="hidden" name="role" value="company">
                        
                        <div class="space-y-2">
                            <label for="company-email" class="text-sm font-medium text-gray-700 dark:text-gray-300">Email Perusahaan</label>
                            <input id="company-email" name="email" type="email" placeholder="perusahaan@contoh.com" required 
                                class="flex h-10 w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-sm placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-50 dark:focus:ring-primary"
                                value="{{ old('email') }}">
                        </div>
                        
                        <div class="space-y-2">
                            <div class="flex items-center justify-between">
                                <label for="company-password" class="text-sm font-medium text-gray-700 dark:text-gray-300">Password</label>
                                <a href="" class="text-xs text-primary hover:underline">
                                    Lupa Password?
                                </a>
                            </div>
                            <input id="company-password" name="password" type="password" placeholder="••••••••" required 
                                class="flex h-10 w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-sm placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-50 dark:focus:ring-primary">
                        </div>
                        
                        <div class="flex items-center space-x-2">
                            <input type="checkbox" id="company-remember" name="remember" class="h-4 w-4 rounded border-gray-300 text-primary focus:ring-primary dark:border-gray-700 dark:bg-gray-900">
                            <label for="company-remember" class="text-sm text-gray-600 dark:text-gray-400">Ingat saya</label>
                        </div>
                        
                        <button type="submit" class="inline-flex w-full items-center justify-center rounded-md bg-primary px-4 py-2 text-sm font-medium text-primary-foreground hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 disabled:pointer-events-none disabled:opacity-50">
                            Login sebagai Perusahaan
                        </button>
                    </form>
                    
                    <!-- Staff Login Form -->
                    <form id="form-staff" method="POST" action="{{ route('login') }}" class="hidden space-y-4">
                        @csrf
                        <input type="hidden" name="role" value="staff">
                        
                        <div class="space-y-2">
                            <label for="staff-email" class="text-sm font-medium text-gray-700 dark:text-gray-300">Email Staf</label>
                            <input id="staff-email" name="email" type="email" placeholder="staf@contoh.com" required 
                                class="flex h-10 w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-sm placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-50 dark:focus:ring-primary"
                                value="{{ old('email') }}">
                        </div>
                        
                        <div class="space-y-2">
                            <div class="flex items-center justify-between">
                                <label for="staff-password" class="text-sm font-medium text-gray-700 dark:text-gray-300">Password</label>
                                <a href="" class="text-xs text-primary hover:underline">
                                    Lupa Password?
                                </a>
                            </div>
                            <input id="staff-password" name="password" type="password" placeholder="••••••••" required 
                                class="flex h-10 w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-sm placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-50 dark:focus:ring-primary">
                        </div>
                        
                        <div class="space-y-2">
                            <label for="staff-role" class="text-sm font-medium text-gray-700 dark:text-gray-300">Peran Staf</label>
                            <select id="staff-role" name="staff_role" 
                                class="flex h-10 w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-sm placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-50 dark:focus:ring-primary" 
                                required>
                                <option value="operator">Operator</option>
                                <option value="leadership">Pimpinan</option>
                                <option value="coordinator">Koordinator Program</option>
                                <option value="admin">Administrator</option>
                            </select>
                        </div>
                        
                        <div class="flex items-center space-x-2">
                            <input type="checkbox" id="staff-remember" name="remember" class="h-4 w-4 rounded border-gray-300 text-primary focus:ring-primary dark:border-gray-700 dark:bg-gray-900">
                            <label for="staff-remember" class="text-sm text-gray-600 dark:text-gray-400">Ingat saya</label>
                        </div>
                        
                        <button type="submit" class="inline-flex w-full items-center justify-center rounded-md bg-primary px-4 py-2 text-sm font-medium text-primary-foreground hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 disabled:pointer-events-none disabled:opacity-50">
                            Login sebagai Staf
                        </button>
                    </form>
                </div>
            </div>
            
            <div class="mt-6 flex flex-col space-y-4">
                <div class="text-center text-sm text-gray-500 dark:text-gray-400">
                    Tidak memiliki akun? Hubungi administrator Anda
                </div>
                <a href="" class="inline-flex w-full items-center justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 dark:hover:bg-gray-800">
                    Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>

    <script>
        // Initialize Lucide icons
        lucide.createIcons();
        
        // Tab switching functionality
        const tabs = {
            student: {
                tab: document.getElementById('tab-student'),
                form: document.getElementById('form-student')
            },
            company: {
                tab: document.getElementById('tab-company'),
                form: document.getElementById('form-company')
            },
            staff: {
                tab: document.getElementById('tab-staff'),
                form: document.getElementById('form-staff')
            }
        };
        
        function activateTab(tabName) {
            // Hide all forms
            Object.values(tabs).forEach(item => {
                item.form.classList.add('hidden');
                item.tab.classList.remove('bg-gray-100', 'dark:bg-gray-700');
            });
            
            // Show selected form
            tabs[tabName].form.classList.remove('hidden');
            tabs[tabName].tab.classList.add('bg-gray-100', 'dark:bg-gray-700');
        }
        
        // Add click event listeners
        tabs.student.tab.addEventListener('click', () => activateTab('student'));
        tabs.company.tab.addEventListener('click', () => activateTab('company'));
        tabs.staff.tab.addEventListener('click', () => activateTab('staff'));
        
        // Initialize with student tab active
        activateTab('student');
        
        // Set active tab based on old input if validation fails
        @if(old('role') === 'company')
            activateTab('company');
        @elseif(old('role') === 'staff')
            activateTab('staff');
        @endif
    </script>
</body>
</html>