@if(isset($experiences) && count($experiences))
	<ul class="space-y-4">
		@foreach($experiences as $exp)
			<li class="border-l-4 border-green-400 pl-4 py-2 bg-green-50 rounded">
				<div class="font-semibold text-lg">{{ $exp->title ?? 'Untitled' }}</div>
				<div class="text-gray-600 text-sm">{{ $exp->organization ?? '' }}</div>
				<div class="text-xs text-gray-400 mt-1">{{ $exp->start_date ? $exp->start_date->format('M Y') : '' }}
					@if($exp->end_date) - {{ $exp->end_date->format('M Y') }} @else - Present @endif
				</div>
				<div class="text-gray-500 mt-1">{{ $exp->description ?? '' }}</div>
			</li>
		@endforeach
	</ul>
@else
	<p class="text-gray-500">No experience information available.</p>
@endif
