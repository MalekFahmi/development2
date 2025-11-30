<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>

    <!-- Load Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>

<body class="bg-gray-50 min-h-screen">

    <!-- NAVBAR -->
    <nav class="bg-white shadow-lg sticky top-0 z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3 flex justify-between items-center">
            <div class="flex items-center">
                <h1 class="text-2xl font-extrabold text-indigo-600">
                    Admin Panel
                </h1>
            </div>

            <!-- Navigation Links -->
            <ul class="flex items-center space-x-6 text-gray-700 font-medium">
                <li>
                    <a href="{{ route('admin.categories.index') }}" class="hover:text-indigo-600 transition duration-150">
                        Categories
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.classifications.index') }}" class="hover:text-indigo-600 transition duration-150">
                        Classifications
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.types.index') }}" class="hover:text-indigo-600 transition duration-150">
                        Types
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- MAIN CONTENT -->
    @yield('content')

</body>
</html>
