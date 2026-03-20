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
                        <a href="{{ route('admin.research.index') }}" class="hover:underline">
                            <h2 class="text-2xl font-bold">Research</h2>
                        </a>
                        <svg class="mx-2 h-4 w-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </li>
                    <li class="flex items-center">
                        <h2 class="text-2xl font-bold text-emerald-700">Edit Research</h2>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
{{-- title,published date,description,Topic,link --}}
    <div class="max-w-2xl mx-auto bg-white rounded-lg shadow p-8">
        <h2 class="mb-6 text-2xl font-bold text-emerald-600 text-center">Edit Research</h2>
        <form action="/admin/research/{{ $research->id }}" method="POST" enctype="multipart/form-data" class="space-y-5">
            @csrf
            @method('PATCH')
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" id="title" value="{{ old('title', $research->title) }}"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm"
                    required>
            </div>
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" id="description" rows="5"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm"
                    required>{{ old('description', $research->description) }}</textarea>
            </div>
            <div>
                <label for="published_at" class="block text-sm font-medium text-gray-700">Published At</label>
                <input type="date" name="published_at" id="published_at" value="{{ old('published_at', $research->published_at) }}"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm"
                    required>
            </div>
            <div>
                <label for="image" class="block text-sm font-medium text-gray-700">Topic</label>
                <input type="text" name="topic" id="topic" value="{{ old('topic', $research->topic) }}"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm"
                    required>
            </div>
            <div>
                <label for="link" class="block text-sm font-medium text-gray-700">Research Link</label>
                <input type="url" name="link" id="link" value="{{ old('link', $research->link) }}"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm"
                    placeholder="https://example.com/...">
            </div>
            <div class="flex justify-end">
                <button type="submit"
                    class="bg-emerald-500 hover:bg-emerald-600 text-white font-semibold px-6 py-2 rounded">
                    Update Research
                </button>
            </div>
        </form>
    </div>
@endsection
