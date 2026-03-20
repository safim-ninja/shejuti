<x-master>
    <section class="py-20 bg-gray-50 min-h-screen">
        <div class="container mx-auto px-4">

            <h1 class="text-4xl font-bold text-center mb-12">Latest Blog Posts</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($blogs as $blog)
                    <div
                        class="bg-white rounded-xl shadow-lg overflow-hidden flex flex-col hover:-translate-y-1 transition">
                        <a href="{{ route('blog.show', $blog->id) }}">
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="w-full h-80 object-cover" />
                        </a>
                        <div class="p-6 flex flex-col flex-1">
                            <h2 class="text-2xl font-bold mb-2">
                                <a href="{{ route('blog.show', $blog->id) }}"
                                    class="hover:text-emerald-700 transition">{{ $blog->title }}</a>
                            </h2>
                            <p class="text-gray-600 mb-4 flex-1">{{ $blog->content }}</p>
                            <div class="flex items-center justify-between text-sm text-gray-500 mt-auto">
                                <span>By {{ $blog->author ?? 'Rubaya Nasrin Shejuti' }}</span>
                                <span>{{ $blog->created_at->format('F j, Y') }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-master>
