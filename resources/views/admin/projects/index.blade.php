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
                        <h2 class="text-2xl font-bold text-emerald-700">Projects</h2>
                    </li>
                </ol>
            </nav>
        </div>
        <a href="{{ route('admin.projects.create') }}" class="bg-emerald-600 hover:bg-emerald-700 text-white font-semibold px-4 py-2 rounded">New Project</a>
    </div>
    <div class="bg-white rounded-lg shadow p-6">
        <table class="min-w-full divide-y divide-gray-200">
            <thead>
                <tr>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Title</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Description</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Timeline</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Video</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                    <th class="px-4 py-2"></th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($projects as $project)
                    <tr>
                        <td class="px-4 py-2 font-semibold">{{ $project->title }}</td>
                        <td class="px-4 py-2">{{ $project->description }}</td>
                        <td class="px-4 py-2">{{ $project->timeline }}</td>
                        <td class="px-4 py-2">@if($project->video)<a href="{{ $project->video }}" target="_blank" class="text-emerald-600 hover:underline">Watch Video</a>@else No Video @endif</td>
                        <td class="px-4 py-2">{{ $project->created_at->format('M d, Y') }}</td>
                        <td class="px-4 py-2 text-right">
                            <a href="{{ route('admin.projects.show', $project->id) }}" ><button class="bg-emerald-600 hover:bg-emerald-700 text-white font-semibold px-4 py-2 rounded">View</button></a>
                            <a href="{{ route('admin.projects.edit', $project->id) }}" class="text-emerald-600 hover:underline ml-2">Edit</a>
                            <a href="{{ route('admin.projects.destroy', $project->id) }}" class="text-emerald-600 hover:underline ml-2">Delete</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-4 py-6 text-center text-gray-400">No projects found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
