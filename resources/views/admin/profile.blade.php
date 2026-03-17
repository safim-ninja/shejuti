@extends('admin')

@section('content')
    <div class="bg-white rounded-lg shadow-[0_5px_15px_rgba(0,0,0,0.05)] p-8 max-w-2xl mx-auto">
        <h2 class="mb-6 text-2xl font-bold text-center text-emerald-800">Edit Profile</h2>
        <form action="/admin/profile" method="POST" enctype="multipart/form-data" class="space-y-5">
            @csrf
            @method('PATCH')

            <div class="flex flex-col items-center mb-6">
                <label for="profile_picture"
                    class="w-28 h-28 mb-2 rounded-full overflow-hidden border-2 border-emerald-500 bg-gray-100 flex items-center justify-center">
                    @if (!empty($profile->profile_picture))
                        <img src="{{ asset('storage/' . $profile->profile_picture) }}" alt="Profile Picture"
                            class="object-cover w-full h-full">
                    @else
                        <span class="text-gray-400 text-4xl">&#9787;</span>
                    @endif
                </label>
                <label class="block text-sm font-medium text-gray-700">Profile Picture</label>
                <input type="file" name="profile_picture" id="profile_picture" accept="image/*"
                    class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-emerald-50 file:text-emerald-700 hover:file:bg-emerald-100" />
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" name="name" id="name" value="{{ $profile->name ?? '' }}"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm">
                </div>
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                    <input type="text" name="title" id="title" value="{{ $profile->title ?? '' }}"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm">
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" value="{{ $profile->email ?? '' }}"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm">
                </div>
                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                    <input type="text" name="phone" id="phone" value="{{ $profile->phone ?? '' }}"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm">
                </div>
                <div class="md:col-span-2">
                    <label for="linkedin_url" class="block text-sm font-medium text-gray-700">LinkedIn URL</label>
                    <input type="url" name="linkedin_url" id="linkedin_url" value="{{ $profile->linkedin_url ?? '' }}"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm">
                </div>
            </div>

            <div>
                <label for="bio" class="block text-sm font-medium text-gray-700">Bio</label>
                <textarea name="bio" id="bio" rows="4"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm">{{ $profile->bio ?? '' }}</textarea>
            </div>

            <div class="flex justify-end">
                <button type="submit"
                    class="bg-emerald-500 hover:bg-emerald-600 text-white font-semibold px-6 py-2 rounded">Save Changes</button>
            </div>
        </form>
    </div>
@endsection
