<nav class="w-full bg-white shadow-sm">
    <div class="container mx-auto flex flex-wrap items-center justify-between py-2 px-4">
        <a href="{{ route('home') }}" class="text-2xl font-bold">{{ profile()->name }}</a>
        <button class="block lg:hidden text-gray-700 focus:outline-none"
            onclick="document.getElementById('menu').classList.toggle('hidden')">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
        </button>
        <div class="w-full lg:items-center lg:w-auto hidden lg:block" id="menu">
            <ul class="flex flex-col lg:flex-row mt-4 lg:mt-0 lg:ml-auto">
                {{-- Home,Portfolio,Blogs,Contact,About me --}}
                <li><a class="block py-2 px-2 mx-2 {{ navActive('home') }}" href="{{ route('home') }}">Home</a></li>
                <li><a class="block py-2 px-2 mx-2 {{ navActive('blogs') }}" href="{{ route('blogs') }}">Blogs</a></li>
                <li><a class="block py-2 px-4 {{ navActive('about') }}" href="{{ route('about') }}">About Me</a></li>
                {{-- <li><a class="block py-2 px-4 {{ navActive('expertise') }}" href="#expertise">Expertise</a></li> --}}
                {{-- <li><a class="block py-2 px-4 {{ navActive('experience') }}" href="{{ route('experience') }}">Experience</a></li> --}}
                {{-- <li><a class="block py-2 px-4 {{ navActive('projects') }}" href="#projects">Impact</a></li> --}}
                <li><a class="block py-2 px-4 {{ navActive('contact') }}" href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
