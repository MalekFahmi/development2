<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="min-h-screen flex items-center justify-center px-4">
    <div class="bg-white shadow-lg rounded-2xl p-8 max-w-md w-full">

        <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">
            Admin Login
        </h2>

        @if(session('error'))
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4 text-sm">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('admin.check') }}">
            @csrf

            <!-- Email -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-1">Email</label>
                <input type="email" name="email" 
                       class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-indigo-300"
                       required>
            </div>

            <!-- Password -->
            <div class="mb-6">
                <label class="block text-gray-700 mb-1">Password</label>
                <input type="password" name="password"
                       class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-indigo-300"
                       required>
            </div>

            <!-- Login Button -->
            <button type="submit"
                    class="w-full bg-indigo-600 hover:bg-indigo-700 text-white py-2 rounded-lg font-semibold transition">
                Login
            </button>
        </form>

    </div>
</div>

</body>
</html>
