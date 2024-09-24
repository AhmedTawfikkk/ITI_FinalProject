<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <!-- Profile Section -->
    <section class="py-16 bg-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Success Message -->
            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            <div class="text-center">
                <img src="{{ $user->picture ? Storage::url($user->picture) : asset('images/profile_avatar.png') }}" alt="Profile Photo"
                    class="w-32 h-32 rounded-full mx-auto">
                <h2 class="mt-4 text-3xl font-extrabold text-gray-900">{{$user->name}}</h2>
                <p class="mt-2 text-gray-500">Member since {{$user->created_at->format('Y-m-d')}}</p>  
                
                <!-- Edit Profile Button -->
                <a href="{{ route('profile.edit') }}" class="mt-4 inline-block px-4 py-2 bg-green-600 text-white rounded-lg">Edit Profile</a>
            </div>
            <div class="mt-12">
                <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">Borrowed Books</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($borrowedbooks as $borrowedbook)
                    <div class="p-6 bg-gray-50 rounded-lg shadow-md">
                        <h4 class="text-xl font-semibold text-gray-900">{{$borrowedbook->book->title}}</h4>
                        <p class="mt-2 text-gray-500">Author: {{$borrowedbook->book->author_name}}</p>
                        <p class="mt-2 text-gray-500">Genre: {{$borrowedbook->book->Genre}}</p>
                        <p class="mt-2 text-gray-500">Borrowed: </p>
                        <p class="mt-2 text-gray-500">Due: September 15, 2024</p>
                        <form action="{{ route('books.return', $borrowedbook->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="mt-4 px-4 py-2 bg-blue-600 text-white rounded-lg">Return</button>
                        </form>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 py-12 mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-gray-400">
            <p>&copy; 2024 Online Library. All
