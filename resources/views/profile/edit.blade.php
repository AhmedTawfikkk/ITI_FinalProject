<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <!-- Success Message -->
            @if (session('success'))
                <div style="background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; padding: 10px; border-radius: 5px; margin-bottom: 20px;">
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            <!-- Profile Picture Section -->
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl text-center mx-auto">
                    <h3 class="text-lg font-semibold mb-4">Profile Picture</h3>
                    <div class="w-20 h-20 mx-auto mb-4"> <!-- Smaller container for the image -->
                        <img src="{{ $user->picture ? Storage::url($user->picture) : asset('images/profile_avatar.png') }}" 
                             alt="Profile Picture" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%;">
                    </div>
                    <form action="{{ route('upload.photo') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="photo" accept="image/*" required>
                        <button type="submit" style="margin-top: 10px; padding: 10px 20px; background-color: #007bff; color: white; border-radius: 5px;">Upload Photo</button>
                    </form>
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
