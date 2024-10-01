<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $book->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
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
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8"> <!-- Increased gap for better spacing -->
                <!-- Book Image -->
                <div class="flex justify-center items-center">
                    <img src="{{ $book->cover ? Storage::url($book->cover) : asset('images/coverdefault.png') }}" alt="Book Cover"
                    class="w-full h-auto max-w-xs rounded-lg shadow-lg object-cover transition-transform transform hover:scale-105"> <!-- Improved styling -->
                </div>

                <!-- Book Info -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-md h-full"> <!-- Made h-full for consistency -->
                    <h2 class="text-2xl font-semibold text-gray-900">Book Information</h2>
                    <p class="mt-4 text-gray-600"><strong>Genre:</strong> {{ $book->genre }}</p>
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
        </div>
    </main>

    <!-- Footer -->
    <x-footer/>

</body>
</html>
