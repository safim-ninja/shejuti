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
                        <h2 class="text-2xl font-bold text-emerald-700">Research</h2>
                    </li>
                </ol>
            </nav>
        </div>
        <a href="{{ route('admin.research.create') }}" class="bg-emerald-600 hover:bg-emerald-700 text-white font-semibold px-4 py-2 rounded">New Research</a>
    </div>
    <div class="bg-white rounded-lg shadow p-6">
        <table class="min-w-full divide-y divide-gray-200">
            <thead>
                <tr>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Title</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Description</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Published At</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Link</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                    <th class="px-4 py-2"></th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($researches as $research)
                    <tr>
                        <td class="px-4 py-2 font-semibold">{{ $research->title }}</td>
                        <td class="px-4 py-2">{{ $research->description }}</td>
                        {{-- <td class="px-4 py-2">{{ $research->published_at->format('M d, Y') }}</td> --}}
                        <td class="px-4 py-2">{{ $research->published_at }}</td>
                        <td class="px-4 py-2">@if($research->link)<a href="{{ $research->link }}" target="_blank" class="text-emerald-600 hover:underline">View Link</a>@else No Link @endif</td>
                        <td class="px-4 py-2 text-right">
                            <a href="{{ route('admin.research.show', $research->id) }}" ><button class="bg-emerald-600 hover:bg-emerald-700 text-white font-semibold px-4 py-2 rounded">View</button></a>
                            <a href="{{ route('admin.research.edit', $research->id) }}" class="text-emerald-600 hover:underline ml-2">Edit</a>
                            <a href="{{ route('admin.research.destroy', $research->id) }}" class="text-emerald-600 hover:underline ml-2">Delete</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-4 py-6 text-center text-gray-400">No research found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
