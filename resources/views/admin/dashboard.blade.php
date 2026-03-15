@extends('admin')

@section('content')
    <!-- DASHBOARD CARDS -->
    <div class="flex flex-wrap gap-4 mb-4">
        <div class="w-full sm:w-1/2 md:w-1/4">
            <div class="bg-white rounded-lg p-5 shadow-[0_5px_15px_rgba(0,0,0,0.05)]">
                <div class="text-sm text-gray-500">Experiences</div>
                <div class="text-2xl font-bold text-[#1B4332]">{{ $experienceCount ?? 5 }}</div>
            </div>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/4">
            <div class="bg-white rounded-lg p-5 shadow-[0_5px_15px_rgba(0,0,0,0.05)]">
                <div class="text-sm text-gray-500">Projects</div>
                <div class="text-2xl font-bold text-[#1B4332]">{{ $projectCount ?? 3 }}</div>
            </div>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/4">
            <div class="bg-white rounded-lg p-5 shadow-[0_5px_15px_rgba(0,0,0,0.05)]">
                <div class="text-sm text-gray-500">Expertise</div>
                <div class="text-2xl font-bold text-[#1B4332]">{{ $expertiseCount ?? 4 }}</div>
            </div>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/4">
            <div class="bg-white rounded-lg p-5 shadow-[0_5px_15px_rgba(0,0,0,0.05)]">
                <div class="text-sm text-gray-500">Awards</div>
                <div class="text-2xl font-bold text-[#1B4332]">{{ $awardCount ?? 5 }}</div>
            </div>
        </div>
    </div>

    <!-- EXAMPLE TABLE -->

    <div class="bg-white rounded-lg shadow-[0_5px_15px_rgba(0,0,0,0.05)] mb-6">
        <div class="bg-white rounded-t-lg px-6 py-4 border-b">
            <h6 class="mb-0 text-base font-semibold">Recent Experience</h6>
        </div>
        <div>
            <table class="w-full text-left">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="py-3 px-6">Position</th>
                        <th class="py-3 px-6">Organization</th>
                        <th class="py-3 px-6">Duration</th>
                        <th class="py-3 px-6 w-36">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b">
                        <td class="py-3 px-6">Program Officer</td>
                        <td class="py-3 px-6">Oxfam Bangladesh</td>
                        <td class="py-3 px-6">2024 - Present</td>
                        <td class="py-3 px-6">
                            <button class="bg-yellow-400 hover:bg-yellow-500 text-white text-xs font-semibold px-3 py-1 rounded mr-2">Edit</button>
                            <button class="bg-red-500 hover:bg-red-600 text-white text-xs font-semibold px-3 py-1 rounded">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3 px-6">Adjunct Faculty</td>
                        <td class="py-3 px-6">University of South Asia</td>
                        <td class="py-3 px-6">2022 - Present</td>
                        <td class="py-3 px-6">
                            <button class="bg-yellow-400 hover:bg-yellow-500 text-white text-xs font-semibold px-3 py-1 rounded mr-2">Edit</button>
                            <button class="bg-red-500 hover:bg-red-600 text-white text-xs font-semibold px-3 py-1 rounded">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
