<!-- resources/views/borrowed_books.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrowed Books</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <a href="/" class="flex-shrink-0 flex items-center text-2xl font-bold text-gray-800">OnlineLibrary</a>
                </div>
                <div class="hidden sm:flex space-x-8 items-center">
                    <a href="/books" class="text-gray-600 hover:text-gray-900">Books</a>
                    <a href="/borrowed-books" class="text-gray-600 hover:text-gray-900">Borrowed Books</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Borrowed Books Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-extrabold text-gray-900 mb-8">Your Borrowed Books</h1>

            @if($borrowedBooks->isEmpty())
                <p class="text-gray-600">You have not borrowed any books yet.</p>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($borrowedBooks as $book)
                        <div class="bg-gray-50 p-4 rounded-lg shadow-md">
                            <h2 class="text-xl font-semibold text-gray-900">{{ $book->title }}</h2>
                            <p class="mt-2 text-gray-600"><strong>Author:</strong> {{ $book->author->name }}</p>
                            <p class="mt-2 text-gray-600"><strong>Borrowed On:</strong> {{ $book->pivot->borrowed_date }}</p>
                            <p class="mt-2 text-gray-600"><strong>Status:</strong> {{ $book->returned ? 'Returned' : 'Not Returned' }}</p>
                        </div>
                    @endforeach
                </div>
            @endif

            <div class="mt-8 text-center">
                <a href="/books" class="inline-block bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded">Back to Books</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-gray-400">
            <p>&copy; 2024 OnlineLibrary. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
