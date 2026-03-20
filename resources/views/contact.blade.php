<x-master>
    <!-- CONTACT -->
    <section id="contact" class="py-20 text-emerald-700">
        <div class="container mx-auto px-4">
            <div class="max-w-2xl mx-auto">
                <h2 class="text-4xl font-bold text-center mb-12">Get In Touch</h2>

                <div class="bg-white bg-opacity-30 backdrop-blur-md rounded-2xl p-12 shadow-2xl">
                    <div class="space-y-6 text-center mb-8">

                        @if (profile()->email)
                            <div>
                                <p class="text-emerald-700 text-sm uppercase tracking-wide mb-2">Email</p>
                                <a href="mailto:{{ profile()->email }}" class="text-xl font-semibold hover:text-emerald-800 transition">{{ profile()->email }}</a>
                            </div>
                        @endif

                        @if (profile()->phone)
                            <div>
                                <p class="text-emerald-700 text-sm uppercase tracking-wide mb-2">Phone</p>
                                <a href="tel:{{ profile()->phone }}" class="text-xl font-semibold hover:text-emerald-800 transition">{{ profile()->phone }}</a>
                            </div>
                        @endif
                    </div>

                    <div class="pt-8 border-t border-emerald-700 border-opacity-20">
                        <a href="https://www.linkedin.com/in/rubaya-nasrin-shejuti-66713a6b"
                            class="block w-full bg-emerald-600 text-white hover:bg-emerald-700 font-bold py-4 px-8 rounded-lg transition transform text-center text-lg"
                            target="_blank">
                            Connect on LinkedIn
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-master>
