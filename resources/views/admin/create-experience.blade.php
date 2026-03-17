@extends('admin')

@section('content')
    <div class="container mx-auto px-4 py-8 max-w-xl">
        <h1 class="text-2xl font-bold mb-6">Add Experience</h1>
        <form action="{{ route('admin.experience.store') }}" method="POST" class="bg-white rounded shadow p-6 space-y-6">
            @csrf
            <div>
                <label class="block font-semibold mb-1">Position</label>
                <input type="text" name="position"
                    class="w-full border-gray-300 rounded px-3 py-2 focus:ring-emerald-600 focus:border-emerald-600" required>
            </div>
            <div>
                <label class="block font-semibold mb-1">Organization</label>
                <input type="text" name="organization"
                    class="w-full border-gray-300 rounded px-3 py-2 focus:ring-emerald-600 focus:border-emerald-600" required>
            </div>
            <div>
                <label class="block font-semibold mb-1">Organization URL <span
                        class="text-gray-400">(optional)</span></label>
                <input type="url" name="organization_url"
                    class="w-full border-gray-300 rounded px-3 py-2 focus:ring-emerald-600 focus:border-emerald-600">
            </div>
            <div>
                <label class="block font-semibold mb-1">Period</label>
                <input type="text" name="period"
                    class="w-full border-gray-300 rounded px-3 py-2 focus:ring-emerald-600 focus:border-emerald-600"
                    placeholder="e.g. 2024 – Present" required>
            </div>
            <div>
                <label class="block font-semibold mb-1">Description <span class="text-gray-400">(optional)</span></label>
                <textarea name="description" rows="3"
                    class="w-full border-gray-300 rounded px-3 py-2 focus:ring-emerald-600 focus:border-emerald-600"></textarea>
            </div>
            <div class="flex justify-end">
                <button type="submit"
                    class="bg-emerald-600 text-white px-6 py-2 rounded hover:bg-emerald-800 transition">Save</button>
            </div>
        </form>
    </div>
@endsection
