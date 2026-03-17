@extends('admin')

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
@endsection
