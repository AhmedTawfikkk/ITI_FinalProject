<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Online Library</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <a href="#" class="flex-shrink-0 flex items-center text-2xl font-bold text-gray-800">OnlineLibrary</a>
                </div>
                <div class="hidden sm:flex space-x-8 items-center">
                    <a href="#" class="text-gray-600 hover:text-gray-900">Home</a>
                    <a href="#features" class="text-gray-600 hover:text-gray-900">Features</a>
                    <a href="#about" class="text-gray-600 hover:text-gray-900">About</a>
                    <a href="#contact" class="text-gray-600 hover:text-gray-900">Contact</a>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="/login" class="text-gray-600 hover:text-gray-900">Login</a>
                    <a href="/register" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Sign Up</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="bg-blue-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24 lg:py-32">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold text-white sm:text-5xl lg:text-6xl">Welcome to Our Online Library</h1>
                <p class="mt-4 text-lg text-blue-200">Explore thousands of books, borrow and manage your reading journey with ease.</p>
                <a href="#features" class="mt-8 inline-block bg-white text-blue-600 hover:bg-gray-100 px-6 py-3 rounded-lg font-semibold">Learn More</a>
            </div>
        </div>
    </header>

    <!-- Features Section -->
    <section id="features" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900">Library Features</h2>
                <p class="mt-4 text-lg text-gray-500">Our online library system offers a wide range of features to enhance your reading experience.</p>
            </div>
            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-6 bg-gray-50 rounded-lg shadow-md">
                    <i class="fas fa-book text-4xl text-blue-600"></i>
                    <h3 class="mt-4 text-xl font-semibold">Vast Collection of Books</h3>
                    <p class="mt-2 text-gray-500">Explore a vast collection of books across various genres and categories.</p>
                </div>
                <div class="text-center p-6 bg-gray-50 rounded-lg shadow-md">
                    <i class="fas fa-laptop text-4xl text-blue-600"></i>
                    <h3 class="mt-4 text-xl font-semibold">Online Borrowing</h3>
                    <p class="mt-2 text-gray-500">Borrow and reserve books online, view your borrowed history, and manage returns seamlessly.</p>
                </div>
                <div class="text-center p-6 bg-gray-50 rounded-lg shadow-md">
                    <i class="fas fa-user text-4xl text-blue-600"></i>
                    <h3 class="mt-4 text-xl font-semibold">Personalized Dashboard</h3>
                    <p class="mt-2 text-gray-500">Track your borrowing history, manage your profile, and stay updated with due dates and notifications.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-extrabold text-gray-900">About Us</h2>
            <p class="mt-4 text-lg text-gray-500">
                Our Online Library Management System is designed to make accessing books easier for students and readers alike. With thousands of books across various genres, you can borrow, read, and manage your library activities from the comfort of your home. We aim to provide a seamless and enjoyable reading experience for all our users.
            </p>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section id="cta" class="bg-gray-800 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-extrabold text-white">Ready to Start Your Reading Journey?</h2>
            <p class="mt-4 text-lg text-gray-400">Join our online library today and access thousands of books at your fingertips.</p>
            <a href="/register" class="mt-8 inline-block bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold">Join Now</a>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900">Contact Us</h2>
                <p class="mt-4 text-lg text-gray-500">Have questions? Feel free to reach out to us!</p>
            </div>
            <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-gray-900">Email Us</h3>
                    <p class="mt-4 text-gray-500">You can email us at <a href="mailto:support@onlinelibrary.com" class="text-blue-500">support@onlinelibrary.com</a></p>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-gray-900">Visit Us</h3>
                    <p class="mt-4 text-gray-500">Our library is located at 123 Library Avenue, Booktown. Feel free to visit us during working hours.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-gray-400">
            <p>&copy; 2024 OnlineLibrary. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
