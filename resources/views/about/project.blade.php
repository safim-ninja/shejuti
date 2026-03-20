@if(isset($projects) && count($projects))
	<ul class="space-y-4">
		@foreach($projects as $project)
			<li class="border-l-4 border-purple-400 pl-4 py-2 bg-purple-50 rounded">
				<div class="font-semibold text-lg">{{ $project->title ?? 'Untitled' }}</div>
				<div class="text-gray-600 text-sm">{{ $project->description ?? '' }}</div>
				<div class="text-xs text-gray-400 mt-1">{{ $project->created_at ? $project->created_at->format('M d, Y') : '' }}</div>
			</li>
		@endforeach
	</ul>
@else
	<p class="text-gray-500">No project information available.</p>
@endif
