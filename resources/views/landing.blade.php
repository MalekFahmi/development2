<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome | Online Bookstore</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800">

<!-- Header -->
<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <h1 class="text-2xl font-bold text-indigo-600">MyBookStore</h1>

        <div class="flex space-x-3">
            <a href="{{ route('user.login') }}"
               class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg font-semibold">
                User Login
            </a>

            <a href="{{ route('admin.login') }}"
               class="px-4 py-2 bg-gray-200 hover:bg-gray-300 text-gray-800 rounded-lg font-semibold">
                Admin Login
            </a>
        </div>
    </div>
</header>

<!-- Hero Section -->
<section class="min-h-screen flex items-center">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">

        <!-- Text -->
        <div>
            <h2 class="text-4xl font-extrabold leading-tight mb-4">
                Discover Books, Manage Orders,<br>
                and Enjoy a Seamless Experience
            </h2>

            <p class="text-lg text-gray-600 mb-6">
                Explore a modern online bookstore where users can browse books, manage carts,
                and place orders — while admins keep everything organized.
            </p>

            <div class="space-x-3">
                <a href="{{ route('user.login') }}"
                   class="px-6 py-3 bg-indigo-600 text-white rounded-xl font-semibold shadow hover:bg-indigo-700">
                    Login as User
                </a>

                <a href="#about"
                   class="px-6 py-3 border border-gray-400 rounded-xl font-semibold hover:bg-gray-200">
                    About Us
                </a>
            </div>
        </div>

        <!-- Image -->
        <div>
            <img src="https://plus.unsplash.com/premium_photo-1677567996070-68fa4181775a?q=80&w=2072&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                 alt="Books"
                 class="rounded-xl shadow-lg">
        </div>

    </div>
</section>

<!-- Features Section -->
<section id="features" class="py-20 bg-white border-t">
    <div class="max-w-6xl mx-auto px-6">

        <h3 class="text-3xl font-bold text-center mb-12">Platform Features</h3>

        <div class="grid md:grid-cols-3 gap-10">

            <div class="bg-gray-100 p-6 rounded-xl shadow text-center">
                <h4 class="text-xl font-semibold mb-2">Book Catalog</h4>
                <p class="text-gray-600">Browse many books with categories, types, and stock levels.</p>
            </div>

            <div class="bg-gray-100 p-6 rounded-xl shadow text-center">
                <h4 class="text-xl font-semibold mb-2">Cart System</h4>
                <p class="text-gray-600">Add items to your cart, adjust quantities, and checkout easily.</p>
            </div>

            <div class="bg-gray-100 p-6 rounded-xl shadow text-center">
                <h4 class="text-xl font-semibold mb-2">Order Tracking</h4>
                <p class="text-gray-600">Track your order history and status anytime.</p>
            </div>
        </div>

    </div>
</section>

<!-- About Us Section -->
<section id="about" class="py-20 bg-gray-50 border-t">
    <div class="max-w-6xl mx-auto px-6">

        <h3 class="text-3xl font-bold text-center mb-10">About Us</h3>

        <div class="grid md:grid-cols-2 gap-10 items-center">

            <div>
                 <img src="https://cdn.pixabay.com/photo/2015/07/17/22/43/student-849825_1280.jpg"
                 alt="About us"
                 class="rounded-xl shadow-lg">
            </div>

            <div>
                <p class="text-lg text-gray-700 mb-4">
                    MyBookStore was created with a simple mission:  
                    <strong class="text-indigo-600">to make book browsing and ordering easy, fast, and enjoyable.</strong>
                </p>

                <p class="text-gray-600 mb-4">
                    Our system allows users to explore books, manage their shopping cart, place orders, and stay updated 
                    on the latest additions. At the same time, admins can organize categories, types, and classifications 
                    with ease.
                </p>

                <p class="text-gray-600">
                    Whether you're a reader looking for your next favorite book or an admin managing a growing library,
                    MyBookStore provides the perfect platform for you.
                </p>
            </div>

        </div>

    </div>
</section>

<!-- Footer -->
<footer class="py-6 text-center text-gray-600 border-t">
    © {{ date('Y') }} MyBookStore — All Rights Reserved
</footer>

</body>
</html>
