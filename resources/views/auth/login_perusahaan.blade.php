<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h1 class="text-2xl font-bold mb-2">Login</h1>
        <p class="text-gray-600 mb-6">Enter your credentials to access your account</p>
        <div class="flex mb-6">
            <button class="flex-1 py-2 px-4 bg-gray-100 border border-gray-300 rounded-l-lg text-gray-500 font-medium flex items-center justify-center">
                <i class="fas fa-graduation-cap mr-2"></i> Student
            </button>
            <button  class="flex-1 py-2 px-4 bg-white border border-gray-300  text-black font-medium flex items-center justify-center" >
                <i class="fas fa-building mr-2"></i> Company
            </button>
            <button class="flex-1 py-2 px-4 bg-gray-100 border border-gray-300 rounded-r-lg text-gray-500 font-medium flex items-center justify-center">
                <i class="fas fa-user mr-2"></i> Staff
            </button>
        </div>
        <div class="mb-4">
            <label for="student-id" class="block text-gray-700 font-medium mb-2">Student ID</label>
            <input type="text" id="student-id" placeholder="Enter your student ID" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="mb-6">
            <label for="password" class="block text-gray-700 font-medium mb-2">Password</label>
            <input type="password" id="password" placeholder="••••••••" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <button class="w-full py-2 px-4 bg-black text-white font-medium rounded-lg hover:bg-gray-800 transition duration-200">Login as Student</button>
        <p class="text-gray-600 text-center mt-4">Don't have an account? Contact your administrator</p>
        <button class="w-full py-2 px-4 mt-4 bg-white border border-gray-300 text-black font-medium rounded-lg hover:bg-gray-100 transition duration-200">Back to Home</button>
    </div>
</body>
</html>