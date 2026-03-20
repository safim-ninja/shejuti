<div class="sidebar fixed top-0 left-0 h-screen bg-emerald-900 text-white w-60 pt-8 flex flex-col">
    <h4 class="text-center pb-4 font-semibold text-lg border-b border-emerald-800">{{ profile()->name }}</h4>
    <a href="{{ route('admin.dashboard') }}" class="block px-6 py-3 text-white text-sm {{ request()->routeIs('admin.dashboard') ? 'bg-emerald-700' : 'hover:bg-emerald-800' }}">Dashboard</a>
    <a href="{{ route('admin.profile') }}" class="block px-6 py-3 text-white text-sm {{ request()->routeIs('admin.profile') ? 'bg-emerald-700' : 'hover:bg-emerald-800' }}">Profile</a>
    <a href="{{ route('admin.blogs') }}" class="block px-6 py-3 text-white text-sm {{ request()->routeIs('admin.blogs*') ? 'bg-emerald-700' : 'hover:bg-emerald-800' }}">Blog</a>
    <a href="{{ route('admin.experience') }}" class="block px-6 py-3 text-white text-sm {{ request()->routeIs('admin.experience*') ? 'bg-emerald-700' : 'hover:bg-emerald-800' }}">Experience</a>
    <a href="{{ route('admin.projects.index') }}" class="block px-6 py-3 text-white text-sm {{ request()->routeIs('admin.projects*') ? 'bg-emerald-700' : 'hover:bg-emerald-800' }}">Projects</a>
    <a href="{{ route('admin.research.index') }}" class="block px-6 py-3 text-white text-sm {{ request()->routeIs('admin.research*') ? 'bg-emerald-700' : 'hover:bg-emerald-800' }}">Research</a>
    <a href="{{ route('admin.seminars.index') }}" class="block px-6 py-3 text-white text-sm {{ request()->routeIs('admin.seminars*') ? 'bg-emerald-700' : 'hover:bg-emerald-800' }}">Seminars</a>
    {{-- <a href="{{ route('admin.expertise') }}" class="block px-6 py-3 text-white text-sm {{ request()->routeIs('admin.expertise*') ? 'bg-emerald-700' : 'hover:bg-emerald-800' }}">Expertise</a> --}}
    {{-- <a href="{{ route('admin.education') }}" class="block px-6 py-3 text-white text-sm {{ request()->routeIs('admin.education*') ? 'bg-emerald-700' : 'hover:bg-emerald-800' }}">Education</a> --}}
    {{-- <a href="{{ route('admin.awards') }}" class="block px-6 py-3 text-white text-sm {{ request()->routeIs('admin.awards*') ? 'bg-emerald-700' : 'hover:bg-emerald-800' }}">Awards</a> --}}
    {{-- <a href="{{ route('admin.contact') }}" class="block px-6 py-3 text-white text-sm {{ request()->routeIs('admin.contact*') ? 'bg-emerald-700' : 'hover:bg-emerald-800' }}">Contact</a> --}}
    <a href="{{ route('admin.settings') }}" class="block px-6 py-3 text-white text-sm {{ request()->routeIs('admin.settings') ? 'bg-emerald-700' : 'hover:bg-emerald-800' }}">Settings</a>
    <hr class="my-2 border-white/20">
    <a href="{{ route('home') }}" class="block px-6 py-3 text-white text-sm {{ request()->routeIs('home') ? 'bg-emerald-700' : 'hover:bg-emerald-800' }}">View Portfolio</a>
</div>
