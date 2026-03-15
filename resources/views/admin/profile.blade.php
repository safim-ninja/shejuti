@extends('admin')

@section('content')
    <div class="bg-white rounded-lg shadow-[0_5px_15px_rgba(0,0,0,0.05)] p-6">
        <h6 class="mb-4 text-base font-semibold">Edit Profile</h6>
        <form action="/admin/profile" method="POST">
            @csrf
            @method('PATCH')
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" id="name" value="{{ $profile->name ?? 'Rubaya Nasrin Shejuti' }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
            </div>
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" id="title" value="{{ $profile->title ?? 'Program Officer at Oxfam Bangladesh' }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
            </div>
            <div class="mb-4">
                <label for="bio" class="block text-sm font-medium text-gray-700">Bio</label>
                <textarea name="bio" id="bio" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">{{ $profile->bio ?? 'Experienced program officer with a demonstrated history of working in the international development sector. Skilled in project management, research, and advocacy. Strong program development professional with a Master of Social Science (MSS) focused on Development Studies from the University of Dhaka.' }}</textarea>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-semibold px-4 py-2 rounded">Save Changes</button>
            </div>
        </form>
    </div>
@endsection
