@extends('admin')

@section('content')
    <div class="flex items-center justify-between mb-6">
        <div class="flex items-center space-x-4">
            <nav class="text-sm text-gray-500" aria-label="Breadcrumb">
                <ol class="list-none p-0 inline-flex">
                    <li class="flex items-center">
                        <a href="{{ route('admin.dashboard') }}" class="hover:underline">
                            <h2 class="text-2xl font-bold">Admin</h2>
                        </a>
                        <svg class="mx-2 h-4 w-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </li>
                    <li class="flex items-center">
                        <a href="{{ route('admin.seminars.index') }}" class="hover:underline">
                            <h2 class="text-2xl font-bold">Seminars</h2>
                        </a>
                        <svg class="mx-2 h-4 w-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </li>
                    <li class="flex items-center">
                        <h2 class="text-2xl font-bold text-emerald-700">Edit Seminar</h2>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
{{-- seminer-> location,title,description,time,image,video link --}}
    <div class="max-w-2xl mx-auto bg-white rounded-lg shadow p-8">
        <h2 class="mb-6 text-2xl font-bold text-emerald-600 text-center">Edit Seminar</h2>
        <form action="/admin/seminars" method="POST" enctype="multipart/form-data" class="space-y-5">
            @csrf
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" id="title" value="{{ old('title', $seminar->title) }}"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm"
                    required>
            </div>
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" id="description" rows="5"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm"
                    required>{{ old('description', $seminar->description) }}</textarea>
            </div>
            <div>
                <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                <input type="text" name="location" id="location" value="{{ old('location', $seminar->location) }}"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm"
                    required>
            </div>
            <div>
                <label for="time" class="block text-sm font-medium text-gray-700">Time</label>
                <input type="datetime-local" name="time" id="time" value="{{ old('time', $seminar->time) }}"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm"
                    required>
            </div>
            <div>
                <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                <input type="file" name="image" id="image"
                    class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-emerald-50 file:text-emerald-700 hover:file:bg-emerald-100">
            </div>
            <div>
                <label for="video_link" class="block text-sm font-medium text-gray-700">Video Link</label>
                <input type="url" name="video_link" id="video_link" value="{{ old('video_link', $seminar->video_link) }}"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm"
                    placeholder="https://example.com/...">
            </div>
            <div class="flex justify-end">
                <button type="submit"
                    class="bg-emerald-500 hover:bg-emerald-600 text-white font-semibold px-6 py-2 rounded">Update
                    Seminar</button>
            </div>
        </form>
    </div>
@endsection
