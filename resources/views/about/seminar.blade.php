@if(isset($seminars) && count($seminars))
	<ul class="space-y-4">
		@foreach($seminars as $seminar)
			<li class="border-l-4 border-pink-400 pl-4 py-2 bg-pink-50 rounded">
				<div class="font-semibold text-lg">{{ $seminar->title ?? 'Untitled' }}</div>
				<div class="text-gray-600 text-sm">{{ $seminar->description ?? '' }}</div>
				<div class="text-xs text-gray-400 mt-1">{{ $seminar->date ? $seminar->date->format('M d, Y') : '' }}</div>
			</li>
		@endforeach
	</ul>
@else
	<p class="text-gray-500">No seminar information available.</p>
@endif
