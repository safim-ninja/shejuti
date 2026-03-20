<x-master>
	<div class="w-full max-w-3xl mx-auto m-12">
		<!-- Tab headers -->
		<div class="flex flex-wrap gap-2 justify-center m-8" id="tabs">
			<button class="tab-link px-6 py-2 rounded font-semibold text-gray-700 bg-gray-100 hover:bg-emerald-100 border-b-4 border-transparent transition-all duration-200" onclick="openTab(event, 'research')">Research</button>
			<button class="tab-link px-6 py-2 rounded font-semibold text-gray-700 bg-gray-100 hover:bg-green-100 border-b-4 border-transparent transition-all duration-200" onclick="openTab(event, 'experience')">Experience</button>
			<button class="tab-link px-6 py-2 rounded font-semibold text-gray-700 bg-gray-100 hover:bg-teal-100 border-b-4 border-transparent transition-all duration-200" onclick="openTab(event, 'project')">Project</button>
			<button class="tab-link px-6 py-2 rounded font-semibold text-gray-700 bg-gray-100 hover:bg-cyan-100 border-b-4 border-transparent transition-all duration-200" onclick="openTab(event, 'seminar')">Seminar</button>
		</div>

		<!-- Tab contents -->
		<div class="bg-white rounded-lg shadow p-6 min-h-[300px]">
			<div id="research" class="tab-content hidden">
				<h2 class="text-2xl font-bold mb-6 text-emerald-700 flex items-center gap-2">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m7-7v14" /></svg>
					Research
				</h2>
				@if(isset($researches) && count($researches))
					<div class="space-y-6">
						@foreach($researches as $research)
							<div class="bg-gradient-to-r from-emerald-50 to-emerald-100 border border-emerald-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
								<div class="flex flex-col md:flex-row md:items-center md:justify-between mb-2">
									<div class="font-semibold text-xl text-emerald-900">{{ $research->title ?? 'Untitled' }}</div>
									<div class="text-xs text-gray-500 mt-1 md:mt-0 flex items-center gap-1">
										<svg xmlns='http://www.w3.org/2000/svg' class='h-4 w-4 text-emerald-400' fill='none' viewBox='0 0 24 24' stroke='currentColor'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z'/></svg>
										{{ $research->published_at ? \Carbon\Carbon::parse($research->published_at)->format('M d, Y') : ($research->created_at ? $research->created_at->format('M d, Y') : '') }}
									</div>
								</div>
								<div class="mb-2">
									<span class="inline-block bg-emerald-200 text-emerald-800 text-xs px-2 py-1 rounded mr-2 font-medium">Topic: {{ $research->topic ?? 'N/A' }}</span>
								</div>
								<div class="text-gray-700 mb-3">{{ $research->description ?? '' }}</div>
								@if(!empty($research->link))
									<a href="{{ $research->link }}" target="_blank" class="inline-flex items-center text-emerald-600 hover:underline font-medium text-sm">
										<svg xmlns='http://www.w3.org/2000/svg' class='h-4 w-4 mr-1' fill='none' viewBox='0 0 24 24' stroke='currentColor'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M14 3h7m0 0v7m0-7L10 14m-4 0h4v4'/></svg>
										View Publication
									</a>
								@endif
							</div>
						@endforeach
					</div>
				@else
					<p class="text-gray-500">No research information available.</p>
				@endif
			</div>
			<div id="experience" class="tab-content hidden">
				<h2 class="text-2xl font-bold mb-6 text-green-700 flex items-center gap-2">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6a2 2 0 012-2h2a2 2 0 012 2v6" /></svg>
					Experience
				</h2>
				@if(isset($experiences) && count($experiences))
					<div class="space-y-6">
						@foreach($experiences as $experience)
							<div class="bg-gradient-to-r from-green-50 to-green-100 border border-green-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
								<div class="flex flex-col md:flex-row md:items-center md:justify-between mb-2">
									<div class="font-semibold text-xl text-green-900">{{ $experience->position ?? ($experience->title ?? 'Untitled') }}</div>
									<div class="text-xs text-green-700 font-semibold mt-1 md:mt-0 flex items-center gap-1">
										<svg xmlns='http://www.w3.org/2000/svg' class='h-4 w-4 text-green-400' fill='none' viewBox='0 0 24 24' stroke='currentColor'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M9 17v-6a2 2 0 012-2h2a2 2 0 012 2v6' /></svg>
										{{ $experience->organization ?? '' }}
										@if(!empty($experience->period))
											<span class="mx-2">|</span> {{ $experience->period }}
										@else
											<span class="mx-2">|</span>
											{{ $experience->start_date ? $experience->start_date->format('M Y') : '' }}
											@if($experience->end_date) - {{ $experience->end_date->format('M Y') }} @else - Present @endif
										@endif
									</div>
								</div>
								<div class="text-gray-700">{{ $experience->description ?? '' }}</div>
							</div>
						@endforeach
					</div>
				@else
					<p class="text-gray-500">No experience information available.</p>
				@endif
			</div>
			<div id="project" class="tab-content hidden">
				<h2 class="text-2xl font-bold mb-6 text-teal-700 flex items-center gap-2">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-teal-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3" /></svg>
					Projects
				</h2>
				@if(isset($projects) && count($projects))
					<div class="space-y-8">
						@foreach($projects as $project)
							<div class="bg-gradient-to-r from-teal-50 to-teal-100 border border-teal-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
								<div class="flex flex-col md:flex-row md:items-center md:justify-between mb-2">
									<div class="font-semibold text-xl text-teal-900">{{ $project->title ?? 'Untitled' }}</div>
									<div class="text-xs text-teal-700 font-semibold mt-1 md:mt-0 flex items-center gap-1">
										<svg xmlns='http://www.w3.org/2000/svg' class='h-4 w-4 text-teal-400' fill='none' viewBox='0 0 24 24' stroke='currentColor'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M12 8v4l3 3' /></svg>
										@if(!empty($project->timeline))
											{{ $project->timeline }}
										@else
											{{ $project->created_at ? $project->created_at->format('M d, Y') : '' }}
										@endif
									</div>
								</div>
								<div class="text-gray-700 mb-3">{{ $project->description ?? '' }}</div>
								@if(!empty($project->image))
									<div class="mb-3">
										<img src="{{ asset('storage/' . $project->image) }}" alt="Project Image" class="w-full max-w-md rounded shadow border border-teal-200">
									</div>
								@endif
								@if(!empty($project->video_link))
									<div class="mb-2">
										<a href="{{ $project->video_link }}" target="_blank" class="inline-flex items-center text-teal-600 hover:underline font-medium text-sm">
											<svg xmlns='http://www.w3.org/2000/svg' class='h-4 w-4 mr-1' fill='none' viewBox='0 0 24 24' stroke='currentColor'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M15 10l4.553 2.276A2 2 0 0121 14.118V17a2 2 0 01-2 2H5a2 2 0 01-2-2v-2.882a2 2 0 01.447-1.342L8 10m7 0V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v4m7 0H8' /></svg>
											Watch Video
										</a>
									</div>
									@if(Str::contains($project->video_link, 'youtube.com') || Str::contains($project->video_link, 'youtu.be'))
										<div class="aspect-w-16 aspect-h-9 mb-2">
											<iframe class="rounded-lg w-full h-64" src="https://www.youtube.com/embed/{{ Str::afterLast($project->video_link, '=') }}" frameborder="0" allowfullscreen></iframe>
										</div>
									@endif
								@endif
							</div>
						@endforeach
					</div>
				@else
					<p class="text-gray-500">No project information available.</p>
				@endif
			</div>
			<div id="seminar" class="tab-content hidden">
				<h2 class="text-2xl font-bold mb-6 text-cyan-700 flex items-center gap-2">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" /></svg>
					Seminar
				</h2>
				@if(isset($seminars) && count($seminars))
					<div class="space-y-8">
						@foreach($seminars as $seminar)
							<div class="bg-gradient-to-r from-cyan-50 to-cyan-100 border border-cyan-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
								<div class="flex flex-col md:flex-row md:items-center md:justify-between mb-2">
									<div class="font-semibold text-xl text-cyan-900">{{ $seminar->title ?? 'Untitled' }}</div>
									<div class="text-xs text-cyan-700 font-semibold mt-1 md:mt-0 flex items-center gap-1">
										<svg xmlns='http://www.w3.org/2000/svg' class='h-4 w-4 text-cyan-400' fill='none' viewBox='0 0 24 24' stroke='currentColor'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9' /></svg>
										@if(!empty($seminar->location))
											{{ $seminar->location }}
										@endif
										@if(!empty($seminar->date))
											<span class="mx-2">|</span> {{ $seminar->date ? (is_a($seminar->date, 'Illuminate\\Support\\Carbon') ? $seminar->date->format('M d, Y h:i A') : $seminar->date) : '' }}
										@endif
										@if(!empty($seminar->time))
											<span class="mx-2">|</span> {{ $seminar->time }}
										@endif
									</div>
								</div>
								<div class="text-gray-700 mb-3">{{ $seminar->description ?? '' }}</div>
								@if(!empty($seminar->image))
									<div class="mb-3">
										<img src="{{ asset('storage/' . $seminar->image) }}" alt="Seminar Image" class="w-full max-w-md rounded shadow border border-cyan-200">
									</div>
								@endif
								@if(!empty($seminar->video_link))
									<div class="mb-2">
										<a href="{{ $seminar->video_link }}" target="_blank" class="inline-flex items-center text-cyan-600 hover:underline font-medium text-sm">
											<svg xmlns='http://www.w3.org/2000/svg' class='h-4 w-4 mr-1' fill='none' viewBox='0 0 24 24' stroke='currentColor'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M15 10l4.553 2.276A2 2 0 0121 14.118V17a2 2 0 01-2 2H5a2 2 0 01-2-2v-2.882a2 2 0 01.447-1.342L8 10m7 0V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v4m7 0H8' /></svg>
											Watch Video
										</a>
									</div>
									@if(Str::contains($seminar->video_link, 'youtube.com') || Str::contains($seminar->video_link, 'youtu.be'))
										<div class="aspect-w-16 aspect-h-9 mb-2">
											<iframe class="rounded-lg w-full h-64" src="https://www.youtube.com/embed/{{ Str::afterLast($seminar->video_link, '=') }}" frameborder="0" allowfullscreen></iframe>
										</div>
									@endif
								@endif
							</div>
						@endforeach
					</div>
				@else
					<p class="text-gray-500">No seminar information available.</p>
				@endif
			</div>
		</div>
	</div>

	<script>
		function openTab(evt, tabName) {
			var i, tabcontent, tablinks;
			tabcontent = document.getElementsByClassName("tab-content");
			for (i = 0; i < tabcontent.length; i++) {
				tabcontent[i].classList.add("hidden");
			}
			tablinks = document.getElementsByClassName("tab-link");
			for (i = 0; i < tablinks.length; i++) {
				tablinks[i].classList.remove(
                    "border-emerald-500","text-emerald-600",
                    "border-green-500", "text-green-600",
                    "border-teal-500", "text-teal-600",
                    "border-cyan-500", "text-cyan-600",
                "bg-white");
			}
			document.getElementById(tabName).classList.remove("hidden");
			// Add color to active tab
			if(tabName === 'research') {
				evt.currentTarget.classList.add("border-emerald-500", "text-emerald-600", "bg-white");
			} else if(tabName === 'experience') {
				evt.currentTarget.classList.add("border-green-500", "text-green-600", "bg-white");
			} else if(tabName === 'project') {
				evt.currentTarget.classList.add("border-teal-500", "text-teal-600", "bg-white");
			} else if(tabName === 'seminar') {
				evt.currentTarget.classList.add("border-cyan-500", "text-cyan-600", "bg-white");
			}
		}
		// Set default open tab
		document.addEventListener("DOMContentLoaded", function() {
			document.querySelectorAll('.tab-link')[0].click();
		});
	</script>
</x-master>
