<x-master>
    <section class="py-20 bg-gray-50 min-h-screen">
        <div class="container mx-auto px-4 max-w-3xl">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}"
                    class="w-full h-80 object-cover" />
                <div class="p-8">
                    <h1 class="text-4xl font-bold mb-4">{{ $blog->title }}</h1>
                    <div class="flex items-center space-x-4 text-gray-500 text-sm mb-6">
                        <span>By {{ $blog->author ?? 'Rubaya Nasrin Shejuti' }}</span>
                        <span>•</span>
                        <span>{{ $blog->created_at->format('F j, Y') }}</span>
                    </div>
                    <div class="prose max-w-none text-gray-700 text-lg">
                        {!! nl2br(e($blog->content)) !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-master>
