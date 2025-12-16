<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Book Store')</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>

<body class="bg-gray-50 min-h-screen">

    <!-- NAVBAR -->
    <nav class="bg-white shadow-lg sticky top-0 z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3 flex justify-between items-center">

            <!-- Logo -->
            <h1 class="text-2xl font-extrabold text-indigo-600">
                Book Store
            </h1>

            <!-- Navigation Links -->
            <ul class="flex items-center space-x-6 text-gray-700 font-medium">
                <li>
                    <a href="{{ route('user.Home.index') }}"
                       class="hover:text-indigo-600 transition duration-150">
                        Home
                    </a>
                </li>

                <li>
                    <a href="{{ route('orders.index') }}"
                       class="hover:text-indigo-600 transition duration-150">
                        📦 My Orders
                    </a>
                </li>

                <li>
                    <a href="{{ route('user.cart.index') }}"
                       class="hover:text-indigo-600 transition duration-150">
                        🛒 Cart
                    </a>
                </li>

                <!-- LOGOUT -->
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button
                            type="submit"
                            class="text-red-600 hover:text-red-700 font-semibold transition duration-150"
                        >
                            Logout
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>

    <main class="py-8">
        @yield('content')
    </main>

</body>
</html>
