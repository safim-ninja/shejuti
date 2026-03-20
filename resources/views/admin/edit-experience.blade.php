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
                        <a href="{{ route('admin.blogs') }}" class="hover:underline">
                            <h2 class="text-2xl font-bold">Experiences</h2>
                        </a>
                        <svg class="mx-2 h-4 w-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </li>
                    <li class="flex items-center">
                        <h2 class="text-2xl font-bold text-emerald-700">Edit Experience</h2>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="max-w-2xl mx-auto bg-white rounded-lg shadow p-8">
        <h2 class="mb-6 text-2xl font-bold text-emerald-600 text-center">Edit Experience</h2>
        <form action="/admin/experiences/{{ $experience->id }}" method="POST" enctype="multipart/form-data" class="space-y-5">
            @csrf
            @method('PATCH')
            <div>
                <label for="position" class="block text-sm font-medium text-gray-700">Position</label>
                <input type="text" name="position" id="position" value="{{ old('position', $experience->position) }}"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm"
                    required>
            </div>
            <div>
                <label for="organization" class="block text-sm font-medium text-gray-700">Organization</label>
                <input type="text" name="organization" id="organization" value="{{ old('organization', $experience->organization) }}"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm"
                    required>
            </div>
            <div>
                <label for="organization_url" class="block text-sm font-medium text-gray-700">Organization URL</label>
                <input type="url" name="organization_url" id="organization_url" value="{{ old('organization_url', $experience->organization_url) }}"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm"
                    required>
            </div>
            <div>
                <label for="period" class="block text-sm font-medium text-gray-700">Period</label>
                <input type="text" name="period" id="period" value="{{ old('period', $experience->period) }}"
                    placeholder="e.g. 2024 – Present"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm"
                    required>
            </div>
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" id="description" rows="4"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm">
                    {{ old('description', $experience->description) }}
                </textarea>
            </div>
            <div class="flex justify-end">
                <button type="submit"
                    class="bg-emerald-500 hover:bg-emerald-600 text-white font-semibold px-6 py-2 rounded">Update
                    Experience</button>
            </div>
        </form>
    </div>
@endsection
