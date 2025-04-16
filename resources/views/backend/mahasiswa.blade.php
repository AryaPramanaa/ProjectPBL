<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-7xl mx-auto">
        <h1 class="text-3xl font-bold mb-2">Student Dashboard</h1>
        <p class="text-gray-600 mb-6">Manage your internship applications and documents</p>

        <div class="bg-white p-4 rounded-lg shadow mb-6">
            <div class="flex items-center">
                <i class="fas fa-info-circle text-yellow-500 mr-2"></i>
                <div>
                    <p class="font-semibold">Registration Period Open</p>
                    <p class="text-gray-600">The internship registration period is now open until June 30, 2023. Make sure to submit your application before the deadline.</p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            <div class="bg-white p-4 rounded-lg shadow">
                <p class="font-semibold mb-2">Application Status</p>
                <div class="flex items-center justify-between mb-2">
                    <p class="text-xl font-bold">Tech Solutions Inc.</p>
                    <span class="bg-yellow-200 text-yellow-800 text-sm font-semibold px-2 py-1 rounded">Pending</span>
                </div>
                <p class="text-gray-600 mb-4">Software Development Intern</p>
                <div class="flex items-center text-gray-600 mb-4">
                    <i class="far fa-calendar-alt mr-2"></i>
                    <p>Submitted on: May 15, 2023</p>
                </div>
                <button class="w-full bg-white border border-gray-300 text-gray-700 py-2 rounded-lg">View Details</button>
            </div>

            <div class="bg-white p-4 rounded-lg shadow">
                <p class="font-semibold mb-2">Introduction Letter</p>
                <p class="text-xl font-bold mb-2">Ready for Download</p>
                <p class="text-gray-600 mb-4">Your introduction letter has been generated</p>
                <div class="flex items-center text-gray-600 mb-4">
                    <i class="far fa-calendar-alt mr-2"></i>
                    <p>Generated on: May 16, 2023</p>
                </div>
                <button class="w-full bg-black text-white py-2 rounded-lg flex items-center justify-center">
                    <i class="fas fa-download mr-2"></i> Download Letter
                </button>
            </div>

            <div class="bg-white p-4 rounded-lg shadow">
                <p class="font-semibold mb-2">Company Documents</p>
                <p class="text-xl font-bold mb-2">Upload Required</p>
                <p class="text-gray-600 mb-4">Please upload your company acceptance letter</p>
                <div class="flex items-center text-gray-600 mb-4">
                    <i class="far fa-calendar-alt mr-2"></i>
                    <p>Due by: June 10, 2023</p>
                </div>
                <button class="w-full bg-white border border-gray-300 text-gray-700 py-2 rounded-lg">Upload Documents</button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white p-4 rounded-lg shadow">
                <p class="font-semibold mb-4">Available Companies</p>
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <i class="fas fa-building text-gray-600 mr-2"></i>
                            <div>
                                <p class="font-semibold">Tech Solutions Inc.</p>
                                <p class="text-gray-600">Jakarta</p>
                            </div>
                        </div>
                        <p class="text-gray-600">5 positions</p>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <i class="fas fa-building text-gray-600 mr-2"></i>
                            <div>
                                <p class="font-semibold">Global Innovations</p>
                                <p class="text-gray-600">Bandung</p>
                            </div>
                        </div>
                        <p class="text-gray-600">3 positions</p>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <i class="fas fa-building text-gray-600 mr-2"></i>
                            <div>
                                <p class="font-semibold">Future Systems</p>
                                <p class="text-gray-600">Surabaya</p>
                            </div>
                        </div>
                        <p class="text-gray-600">2 positions</p>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <i class="fas fa-building text-gray-600 mr-2"></i>
                            <div>
                                <p class="font-semibold">Data Analytics Co.</p>
                                <p class="text-gray-600">Jakarta</p>
                            </div>
                        </div>
                        <p class="text-gray-600">4 positions</p>
                    </div>
                </div>
                <button class="w-full bg-blue-500 text-white py-2 rounded-lg mt-4">View All</button>
            </div>

            <div class="bg-white p-4 rounded-lg shadow">
                <p class="font-semibold mb-4">Internship Timeline</p>
                <div class="space-y-4">
                    <div class="flex items-center">
                        <i class="fas fa-calendar-check text-green-500 mr-2"></i>
                        <div>
                            <p class="font-semibold">Registration Opens</p>
                            <p class="text-gray-600">May 1, 2023</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-calendar-times text-red-500 mr-2"></i>
                        <div>
                            <p class="font-semibold">Application Deadline</p>
                            <p class="text-gray-600">June 30, 2023</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-calendar-alt text-blue-500 mr-2"></i>
                        <div>
                            <p class="font-semibold">Selection Results</p>
                            <p class="text-gray-600">July 15, 2023</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-calendar-day text-purple-500 mr-2"></i>
                        <div>
                            <p class="font-semibold">Internship Start Date</p>
                            <p class="text-gray-600">August 1, 2023</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>