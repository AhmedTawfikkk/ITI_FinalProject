<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $book->title }}</title>
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
            </div>
        </div>
    </nav>
    

    <!-- Main Content -->
    <main class="flex-grow py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-8">
                <h1 class="text-4xl font-extrabold text-gray-900">{{ $book->title }}</h1>
                <p class="mt-2 text-lg text-gray-500">{{ $book->author_name }}</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Book Image -->
                <div class="flex justify-center">
                    <img src="{{ asset($book->cover) }}" alt="{{ $book->title }} Cover" class="w-64 h-80 rounded-lg shadow-lg">
                </div>

                <!-- Book Info -->
                <div class="bg-gray-50 p-4 rounded-lg shadow-md h-80">
                    <h2 class="text-2xl font-semibold text-gray-900">Book Information</h2>
                    <p class="mt-2 text-gray-600"><strong>Genre:</strong> {{ $book->genre }}</p>
                    <p class="mt-2 text-gray-600"><strong>Published:</strong> {{ $book->published }}</p>
                    <p class="mt-2 text-gray-600"><strong>Description:</strong> {{ $book->description }}</p>
                </div>
            </div>

           
            <div class="mt-8 text-center">
                <form action="{{ route('books.borrow', $book->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">
                        Borrow Book
                    </button>
                </form>
                <a href="/books" class="inline-block bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded mt-4">Back to Books</a>
            </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-gray-400">
            <p>&copy; 2024 OnlineLibrary. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
