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
                        <h2 class="text-2xl font-bold text-emerald-700">Experience</h2>
                    </li>
                </ol>
            </nav>
        </div>
        <a href="{{ route('admin.experience.create') }}" class="bg-emerald-600 hover:bg-emerald-700 text-white font-semibold px-4 py-2 rounded">New Experience</a>
    </div>
    <div class="bg-white rounded-lg shadow p-6">
        <table class="min-w-full divide-y divide-gray-200">
            <thead>
                <tr>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Position</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Organization</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Period</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Description</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                    <th class="px-4 py-2"></th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($experiences as $experience)
                    <tr>
                        <td class="px-4 py-2 font-semibold">{{ $experience->position }}</td>
                        <td class="px-4 py-2">{{ $experience->organization }}</td>
                        <td class="px-4 py-2">{{ $experience->period }}</td>
                        <td class="px-4 py-2">{{ $experience->description }}</td>
                        <td class="px-4 py-2">{{ $experience->created_at->format('M d, Y') }}</td>
                        <td class="px-4 py-2 text-right">
                            {{-- <a href="{{ route('admin.experience.show', $experience->id) }}" ><button class="bg-emerald-600 hover:bg-emerald-700 text-white font-semibold px-4 py-2 rounded">View</button></a> --}}
                            <a href="{{ route('admin.experience.edit', $experience->id) }}" class="text-emerald-600 hover:underline ml-2">Edit</a>
                            <a href="{{ route('admin.experience.destroy', $experience->id) }}" class="text-emerald-600 hover:underline ml-2">Delete</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-4 py-6 text-center text-gray-400">No experiences found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection


{{-- @extends('admin')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Experience List</h1>
            <a href="{{ route('admin.experience.create') }}"
                class="bg-emerald-700 text-white px-4 py-2 rounded hover:bg-emerald-800 transition">Add Experience</a>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded shadow">
                <thead>
                    <tr class="bg-gray-100 text-left">
                        <th class="py-3 px-4">Position</th>
                        <th class="py-3 px-4">Organization</th>
                        <th class="py-3 px-4">Period</th>
                        <th class="py-3 px-4">Description</th>
                        <th class="py-3 px-4">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($experiences as $exp)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="py-2 px-4 font-semibold">{{ $exp->position }}</td>
                            <td class="py-2 px-4">
                                @if ($exp->organization_url)
                                    <a href="{{ $exp->organization_url }}" class="text-emerald-700 hover:underline"
                                        target="_blank">{{ $exp->organization }}</a>
                                @else
                                    {{ $exp->organization }}
                                @endif
                            </td>
                            <td class="py-2 px-4">{{ $exp->period }}</td>
                            <td class="py-2 px-4">{{ Str::limit($exp->description, 60) }}</td>
                            <td class="py-2 px-4">
                                <a href="{{ route('admin.experience.edit', $exp->id) }}"
                                    class="text-blue-600 hover:underline mr-2">Edit</a>
                                <form action="{{ route('admin.experience.destroy', $exp->id) }}" method="POST"
                                    class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline"
                                        onclick="return confirm('Delete this experience?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="py-4 px-4 text-center text-gray-500">No experiences found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection --}}
