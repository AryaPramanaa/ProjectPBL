<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body class="bg-gray-100 font-sans">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-white shadow-md">
            <div class="p-4 border-b">
                <i class="fas fa-graduation-cap text-2xl mr-2"></i>
                <span class="text-xl font-semibold">SIMAG</span>
            </div>
            <nav class="mt-4">
                <ul>
                    <li class="px-4 py-2 hover:bg-gray-200">
                        <a href="#" class="flex items-center">
                            <i class="fas fa-home mr-2"></i> Dashboard
                        </a>
                    </li>
                    <li class="px-4 py-2 hover:bg-gray-200">
                        <a href="#" class="flex items-center">
                            <i class="fas fa-file-alt mr-2"></i> Internship Applications
                        </a>
                    </li>
                    <li class="px-4 py-2 hover:bg-gray-200">
                        <a href="#" class="flex items-center">
                            <i class="fas fa-building mr-2"></i> Browse Companies
                        </a>
                    </li>
                    <li class="px-4 py-2 hover:bg-gray-200">
                        <a href="#" class="flex items-center">
                            <i class="fas fa-user mr-2"></i> My Profile
                        </a>
                    </li>
                    <li class="px-4 py-2 hover:bg-gray-200">
                        <a href="#" class="flex items-center">
                            <i class="fas fa-folder mr-2"></i> Documents
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-6">
            <h2 class="text-2xl font-bold mb-4">Student Dashboard</h2>
            <p class="text-gray-600 mb-6">Manage your internship applications and documents</p>

            <div class="bg-white p-4 rounded-lg shadow-md mb-6">
                <div class="flex items-center">
                    <i class="fas fa-info-circle text-green-500 mr-2"></i>
                    <div>
                        <h3 class="font-bold">Registration Period Open</h3>
                        <p class="text-gray-600">The internship registration period is now open until June 30, 2023.
                            Make sure to submit your application before the deadline.</p>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Application Status -->
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h3 class="font-bold mb-2">Application Status</h3>
                    <span
                        class="inline-block bg-yellow-200 text-yellow-800 text-xs px-2 py-1 rounded-full mb-2">Pending</span>
                    <h4 class="font-bold">Tech Solutions Inc.</h4>
                    <p class="text-gray-600">Software Development Intern</p>
                    <p class="text-gray-600 text-sm">Submitted on: May 15, 2023</p>
                    <button class="mt-4 bg-gray-200 text-gray-800 px-4 py-2 rounded">View Details</button>
                </div>

                <!-- Introduction Letter -->
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h3 class="font-bold mb-2">Introduction Letter</h3>
                    <h4 class="font-bold">Ready for Download</h4>
                    <p class="text-gray-600">Your introduction letter has been generated</p>
                    <p class="text-gray-600 text-sm">Generated on: May 16, 2023</p>
                    <button class="mt-4 bg-black text-white px-4 py-2 rounded">Download Letter</button>
                </div>

                <!-- Company Documents -->
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h3 class="font-bold mb-2">Company Documents</h3>
                    <h4 class="font-bold">Upload Required</h4>
                    <p class="text-gray-600">Please upload your company acceptance letter</p>
                    <p class="text-gray-600 text-sm">Due by: June 10, 2023</p>
                    <button class="mt-4 bg-gray-200 text-gray-800 px-4 py-2 rounded">Upload Documents</button>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                <!-- Available Companies -->
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h3 class="font-bold mb-4">Available Companies</h3>
                    <ul>
                        <li class="flex justify-between items-center mb-2">
                            <div class="flex items-center">
                                <i class="fas fa-building mr-2"></i> Tech Solutions Inc.
                            </div>
                            <span class="text-gray-600">5 positions</span>
                        </li>
                        <li class="flex justify-between items-center mb-2">
                            <div class="flex items-center">
                                <i class="fas fa-building mr-2"></i> Global Innovations
                            </div>
                            <span class="text-gray-600">3 positions</span>
                        </li>
                        <li class="flex justify-between items-center mb-2">
                            <div class="flex items-center">
                                <i class="fas fa-building mr-2"></i> Future Systems
                            </div>
                            <span class="text-gray-600">4 positions</span>
                        </li>
                        <li class="flex justify-between items-center mb-2">
                            <div class="flex items-center">
                                <i class="fas fa-building mr-2"></i> Data Analytics Co.
                            </div>
                            <span class="text-gray-600">2 positions</span>
                        </li>
                    </ul>
                </div>

                <!-- Internship Timeline -->
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h3 class="font-bold mb-4">Internship Timeline</h3>
                    <ul>
                        <li class="flex items-center mb-2">
                            <i class="fas fa-calendar-check text-green-500 mr-2"></i> Registration Opens
                            <span class="ml-auto text-gray-600">May 1, 2023</span>
                        </li>
                        <li class="flex items-center mb-2">
                            <i class="fas fa-calendar-times text-red-500 mr-2"></i> Application Deadline
                            <span class="ml-auto text-gray-600">June 30, 2023</span>
                        </li>
                        <li class="flex items-center mb-2">
                            <i class="fas fa-calendar-alt text-blue-500 mr-2"></i> Selection Results
                            <span class="ml-auto text-gray-600">July 15, 2023</span>
                        </li>
                        <li class="flex items-center mb-2">
                            <i class="fas fa-calendar-day text-purple-500 mr-2"></i> Internship Start Date
                            <span class="ml-auto text-gray-600">August 1, 2023</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
