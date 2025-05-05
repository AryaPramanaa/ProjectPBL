<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Sistem Manajemen Magang</title>
    
    

    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')

    
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="{{ asset('js/lucide.js') }}"></script>
    <script>lucide.createIcons();</script>
    
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
                    <i data-lucide="graduation-cap" class="h-8 w-8 text-black"></i>
                </div>
            </div>
            
            <div class="space-y-1 text-center">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Login</h2>
                <p class="text-sm text-gray-500 dark:text-gray-400">Masukkan kredensial untuk mengakses akun Anda</p>
            </div>
            
            <!-- Session Status -->
            @if (session('status'))
                <div class="mt-4 rounded-md bg-blue-50 p-4 text-sm text-blue-600 dark:bg-blue-900/50 dark:text-blue-200">
                    {{ session('status') }}
                </div>
            @endif
            
            <!-- Validation Errors -->
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
                    <button id="tab-student" class="flex-1 rounded-l-md px-3 py-2 text-center text-sm font-medium transition-colors hover:bg-gray-100 dark:hover:bg-gray-700 bg-gray-100 dark:bg-gray-700 text-slate-900">
                        <div class="flex items-center justify-center gap-2">
                            <i data-lucide="graduation-cap" class="h-4 w-4"></i>
                            <span class="hidden sm:inline">Mahasiswa</span>
                        </div>
                    </button>
                    <button id="tab-company" class="flex-1 px-3 py-2 text-center text-sm font-medium transition-colors hover:bg-gray-100 dark:hover:bg-gray-700 text-slate-900">
                        <div class="flex items-center justify-center gap-2">
                            <i data-lucide="building-2" class="h-4 w-4"></i>
                            <span class="hidden sm:inline">Perusahaan</span>
                        </div>
                    </button>
                    <button id="tab-staff" class="flex-1 rounded-r-md px-3 py-2 text-center text-sm font-medium transition-colors hover:bg-gray-100 dark:hover:bg-gray-700 text-slate-900">
                        <div class="flex items-center justify-center gap-2">
                            <i data-lucide="users" class="h-4 w-4"></i>
                            <span class="hidden sm:inline">Staf</span>
                        </div>
                    </button>
                </div>
                
                <div class="mt-6">
                    <!-- Unified Login Form (works for all roles) -->
                    <form id="form-student" method="POST" action="{{ route('login') }}" class="space-y-4">
                        @csrf
                        <div class="space-y-2">
                            <label for="input_type" id="label_input" class="text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                            <input id="input_type" name="input_type" type="text" placeholder="Masukkan Email atau NIM Anda" required 
                                class="flex h-10 w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-sm placeholder:text-gray-400 hover:shadow-lg text-slate-900 active:bg-white active:text-slate-900"   
                                value="{{ old('input_type') }}" autofocus>
                        </div>
                        
                        <div class="space-y-2">
                            <div class="flex items-center justify-between">
                                <label for="password" class="text-sm font-medium text-gray-700 dark:text-gray-300 ">Password</label>
                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-xs text-black hover:underline">
                                    Lupa Password?
                                </a>
                                @endif
                            </div>
                            <input id="password" name="password" type="password" placeholder="••••••••" required 
                                class="flex h-10 w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-sm placeholder:text-gray-400 text-slate-900  hover:shadow-lg  active:bg-white active:text-slate-900">
                        </div>
                        
                        <div class="flex items-center space-x-2">
                            <input type="checkbox" id="remember" name="remember" class="h-4 w-4 rounded border-gray-300 bg-white">
                            <label for="remember" class="text-sm text-gray-600 ">Ingat saya</label>
                        </div>
                        
                        <button type="submit" id="login-button" class="inline-flex w-full items-center justify-center rounded-md bg-slate-700 hover:bg-slate-800 active:bg-slate-950 px-4 py-2 text-sm font-medium hover:shadow-xl">
                            Login sebagai Mahasiswa
                        </button>
                    </form>
                </div>
            </div>
            
            <div class="mt-6 flex flex-col space-y-4">
                <div class="text-center text-sm text-gray-500 dark:text-gray-400">
                    Tidak memiliki akun? Hubungi administrator Anda
                </div>
                <a href="{{ route('home') }}" class="inline-flex w-full items-center justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 dark:hover:bg-gray-800">
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
                buttonText: 'Login sebagai Mahasiswa',
                placeholder: 'Masukkan NIM Anda'
            },
            company: {
                tab: document.getElementById('tab-company'),
                buttonText: 'Login sebagai Perusahaan',
                placeholder: 'Masukkan Email Perusahaan'
            },
            staff: {
                tab: document.getElementById('tab-staff'),
                buttonText: 'Login sebagai Staf',
                placeholder: 'Masukkan Email Staf'
            }
        };
        
        const loginButton = document.getElementById('login-button');
        const inputField = document.getElementById('input_type');
        const labelInput = document.getElementById('label_input');
        
        function activateTab(tabName) {
            if(tabName == 'student'){
                inputField.type = 'text'
                labelInput.textContent = 'NIM'
            }else if(tabName == 'company' || tabName == 'staff'){
                inputField.type = 'email'
                labelInput.textContent = 'Email'
            }
            // Reset all tabs
            Object.keys(tabs).forEach(key => {
                tabs[key].tab.classList.remove('bg-gray-100', 'dark:bg-gray-700');
            });
            
            // Activate selected tab
            tabs[tabName].tab.classList.add('bg-gray-100', 'dark:bg-gray-700');
            
            // Update button text and placeholder
            loginButton.textContent = tabs[tabName].buttonText;
            inputField.placeholder = tabs[tabName].placeholder;
        }
        
        // Add click event listeners
        tabs.student.tab.addEventListener('click', () => activateTab('student'));
        tabs.company.tab.addEventListener('click', () => activateTab('company'));
        tabs.staff.tab.addEventListener('click', () => activateTab('staff'));
        
        // Initialize with student tab active
        activateTab('student');
    </script>
</body>
</html>