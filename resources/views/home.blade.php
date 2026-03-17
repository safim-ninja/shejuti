<x-master>

    <section class="bg-gradient-to-br from-emerald-700 to-emerald-500 text-white py-28">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row items-center">
                <div class="w-full lg:w-2/5 flex justify-center mb-8 lg:mb-0">
                    <img src="{{ asset('storage/' . profile()->profile_picture) }}"
                        class="w-[260px] h-[260px] rounded-full border-4 border-white shadow-xl object-cover" />
                </div>
                <div class="w-full lg:w-3/5">
                    <h1 class="text-4xl md:text-5xl font-bold mb-4">{{ profile()->name }}</h1>
                    <p class="text-xl opacity-90 mb-2">{{ profile()->title }}</p>
                    <p class="mb-4">{{ profile()->bio }}</p>
                    <a href="{{ profile()->linkedin_url }}"
                        class="inline-block bg-white text-emerald-700 font-semibold px-6 py-3 rounded-lg shadow hover:bg-emerald-50 hover:text-emerald-800 transition mt-3"
                        target="_blank">
                        LinkedIn Profile
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- <!-- FEATURED SECTION -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-10">Featured</h2>
            <div class="flex flex-col md:flex-row md:space-x-8 space-y-8 md:space-y-0 justify-center">
                <div class="md:w-1/3">
                    <div
                        class="bg-white p-8 rounded-xl shadow-lg h-full flex flex-col items-center hover:-translate-y-1 transition">
                        <img src="{{ asset('featured-1662609722999.jpeg') }}" alt="Featured in Newspaper"
                            class="w-full h-[270px] object-cover rounded-lg mb-4" />
                        <h6 class="font-semibold mb-1">Featured at Daily Ittefaq News Paper 18.12.2019</h6>
                        <p class="text-gray-700 text-center">Featured for environmental and climate change work in
                            Bangladesh.</p>
                    </div>
                </div>
                <div class="md:w-1/3">
                    <div
                        class="bg-white p-8 rounded-xl shadow-lg h-full flex flex-col items-center hover:-translate-y-1 transition">
                        <img src="{{ asset('featured-1696918920458.jpeg') }}" alt="Memories I will cherish forever"
                            class="w-full h-[270px] object-cover rounded-lg mb-4" />
                        <h6 class="font-semibold mb-1">Memories I will cherish forever</h6>
                        <p class="text-gray-700 text-center">Special moments from fieldwork and collaborations in
                            climate action.</p>
                    </div>
                </div>
                <div class="md:w-1/3">
                    <div
                        class="bg-white p-8 rounded-xl shadow-lg h-full flex flex-col items-center hover:-translate-y-1 transition">
                        <img src="{{ asset('featured-1661013337186.jpeg') }}" alt="UPG Sustainability Leader"
                            class="w-full h-[270px] object-cover rounded-lg mb-4" />
                        <h6 class="font-semibold mb-1">UPG Sustainability Leader</h6>
                        <p class="text-gray-700 text-center">Recognized for leadership in project management,
                            sustainability, and climate change education.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FEATURED -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row text-center md:space-x-8 space-y-8 md:space-y-0">
                <div class="md:w-1/3">
                    <div class="bg-white p-8 rounded-xl shadow-lg h-full">
                        <h4 class="text-xl font-bold mb-2">Climate Research</h4>
                        <p>Environmental research and climate adaptation strategies.</p>
                    </div>
                </div>
                <div class="md:w-1/3">
                    <div class="bg-white p-8 rounded-xl shadow-lg h-full">
                        <h4 class="text-xl font-bold mb-2">Development Programs</h4>
                        <p>Working with NGOs and institutions on sustainability initiatives.</p>
                    </div>
                </div>
                <div class="md:w-1/3">
                    <div class="bg-white p-8 rounded-xl shadow-lg h-full">
                        <h4 class="text-xl font-bold mb-2">Academic Teaching</h4>
                        <p>Teaching environmental science and sustainability courses.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- ABOUT -->
    <section id="about" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-10">About</h2>
            <div class="flex justify-center">
                <div class="w-full lg:w-2/3 text-center">
                    <p class="mb-4">
                        I am a development professional focusing on climate change adaptation,
                        sustainability and environmental research. My work focuses on building
                        climate resilience and supporting sustainable development initiatives.
                    </p>
                    <p>
                        My academic and professional journey combines environmental science,
                        climate modeling and development practice.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- EXPERTISE -->
    <section id="expertise" class="py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-10">Areas of Expertise</h2>
            <div class="flex flex-col md:flex-row md:space-x-6 space-y-6 md:space-y-0">
                <div class="md:w-1/4">
                    <div class="bg-white p-6 rounded-lg shadow text-center font-semibold">Climate Change Adaptation
                    </div>
                </div>
                <div class="md:w-1/4">
                    <div class="bg-white p-6 rounded-lg shadow text-center font-semibold">Environmental Research</div>
                </div>
                <div class="md:w-1/4">
                    <div class="bg-white p-6 rounded-lg shadow text-center font-semibold">Disaster Risk Management
                    </div>
                </div>
                <div class="md:w-1/4">
                    <div class="bg-white p-6 rounded-lg shadow text-center font-semibold">GIS & Remote Sensing</div>
                </div>
            </div>
        </div>
    </section>

    <!-- EXPERIENCE -->
    <section id="experience" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-10">Professional Experience</h2>
            <div class="border-l-4 border-emerald-700 pl-8">
                @foreach ($experiences as $experience)
                    <div class="mb-8">
                        <h5 class="text-lg font-bold">{{ $experience->position }}</h5>
                        <span class="text-emerald-700 font-semibold">{{ $experience->organization }} | {{ $experience->period }}</span>
                        <p>{{ $experience->description }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- PROJECTS -->
    <section id="projects" class="py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-10">Impact & Projects</h2>
            <div class="flex flex-col md:flex-row md:space-x-8 space-y-8 md:space-y-0">
                <div class="md:w-1/3">
                    <div class="bg-white rounded-lg p-8 shadow-lg h-full">
                        <h5 class="text-lg font-bold mb-2">Climate Justice Programs</h5>
                        <p>Working with Oxfam Bangladesh to support climate justice and natural resource rights
                            initiatives.</p>
                    </div>
                </div>
                <div class="md:w-1/3">
                    <div class="bg-white rounded-lg p-8 shadow-lg h-full">
                        <h5 class="text-lg font-bold mb-2">Environmental Capacity Building</h5>
                        <p>Organizing environmental training and capacity building programs for stakeholders and
                            institutions.</p>
                    </div>
                </div>
                <div class="md:w-1/3">
                    <div class="bg-white rounded-lg p-8 shadow-lg h-full">
                        <h5 class="text-lg font-bold mb-2">Sustainability Research</h5>
                        <p>Research initiatives focusing on environmental sustainability and climate resilience.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- AWARDS -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-10">Leadership & Awards</h2>
            <ul class="w-full lg:w-1/2 mx-auto space-y-4">
                <li class="bg-white rounded-lg shadow p-4 text-center font-medium">Duke of Edinburgh Gold Award</li>
                <li class="bg-white rounded-lg shadow p-4 text-center font-medium">UPG Sustainability Leader 2022</li>
                <li class="bg-white rounded-lg shadow p-4 text-center font-medium">World Food Forum Mentor (2023–2024)
                </li>
                <li class="bg-white rounded-lg shadow p-4 text-center font-medium">YVC Leader 2025</li>
                <li class="bg-white rounded-lg shadow p-4 text-center font-medium">Asian African Youth Leadership
                    Festival Alumni</li>
            </ul>
        </div>
    </section>

    <!-- CONTACT -->
    <section id="contact" class="py-20">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">Contact</h2>
            <p class="mb-4">Dhaka, Bangladesh</p>
            <a href="https://www.linkedin.com/in/rubaya-nasrin-shejuti-66713a6b"
                class="inline-block px-8 py-4 rounded-lg bg-gradient-to-br from-emerald-600 to-emerald-500 hover:bg-gradient-to-tr hover:from-emerald-600 hover:to-emerald-500 text-white text-lg font-semibold" target="_blank">
                LinkedIn Profile
            </a>
        </div>
    </section>
</x-master>