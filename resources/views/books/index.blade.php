<!-- resources/views/books.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Books - Online Library</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">

   <!-- Navbar -->
<nav class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <a href="/" class="flex-shrink-0 flex items-center text-2xl font-bold text-gray-800">OnlineLibrary</a>
            </div>
            <div class="flex items-center space-x-4">
                <a href="/profile" class="text-gray-600 hover:text-gray-900">Profile</a>
                <form method="POST" action="/logout" class="inline">
                    @csrf
                    <button type="submit" class="text-gray-600 hover:text-gray-900">Logout</button>
                </form>
            </div>
        </div>
    </div>
</nav>

    <!-- Main Content -->
    <main class="flex-grow">
        <!-- Books Section -->
        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h2 class="text-3xl font-extrabold text-gray-900">Available Books</h2>
                    <p class="mt-4 text-lg text-gray-500">Explore our collection of books below.</p>
                </div>
                <div class="mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Static Book Entries -->
                    @foreach ($books as $book )
                    <div class="p-6 bg-gray-50 rounded-lg shadow-md">
                        
                        <h3 class="text-xl font-semibold text-gray-900">{{$book->title}}</h3>
                        <p class="mt-2 text-gray-500">Author: {{$book->author->name}}</p>
                        <p class="mt-2 text-gray-500">Genre: {{$book->Genre}}</p>
                        <p class="mt-2 text-gray-500">Published: {{$book->published}}</p>
                        <a href="/books/1" class="mt-4 inline-block bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">View Details</a>
                      

                   
                    <!-- Add more books as needed -->
                </div>
                @endforeach
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-gray-400">
            <p>&copy; 2024 OnlineLibrary. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
