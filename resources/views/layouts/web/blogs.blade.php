@extends('layouts.web.master')

@section('title', 'Blogs')

@section('content')

    <div class="max-w-[1200px] mx-auto py-12 px-4 max-md:py-8">

        <h2 class="text-2xl font-bold text-center mb-8 text-[#111]">Latest Blog Posts</h2>

        <div class="grid grid-cols-3 gap-5 max-lg:grid-cols-2 max-md:grid-cols-1">

            {{-- Blog Card 1 --}}

            @foreach ($blogsData as $blog)
                <div
                    class="bg-white rounded-2xl overflow-hidden shadow-[0_4px_20px_rgba(0,0,0,0.08)] hover:shadow-[0_12px_40px_rgba(0,0,0,0.15)] transition-all duration-300 group">
                    <div class="relative  overflow-hidden" style="height: 200px;">
                        <span
                            class="absolute  z-10 bg-white backdrop-blur-sm text-[#111] text-[0.7rem] font-bold py-1.5 px-4 rounded-full tracking-wide">
                            {{ $blog->category }}
                        </span>
                        <img src="{{ $blog->image }}" alt="Top 10 Trending Gadgets in 2026"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-8 h-8 rounded-full bg-[#f3f3f3] flex items-center justify-center">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#666" stroke-width="2">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
                                    <circle cx="12" cy="7" r="4" />
                                </svg>
                            </div>
                            <div>
                                <span class="text-[0.8rem] font-semibold text-[#111]">{{ $blog->author }}</span>
                                <span class="text-[0.75rem] text-[#999] ml-2">2026-04-01</span>
                            </div>
                        </div>
                        <h3
                            class="font-bold text-[1.1rem] text-[#111] leading-tight mb-3 group-hover:text-[#444] transition-colors duration-200">
                            Top 10 Trending Gadgets in 2026
                        </h3>
                        <p class="text-[0.85rem] text-[#666] leading-relaxed mb-5 line-clamp-2">
                            Discover the most trending gadgets of 2026 that are changing the tech world.
                        </p>
                        <a href="#"
                            class="inline-flex items-center gap-2 bg-[#111] text-white text-[0.8rem] font-semibold py-2.5 px-5 rounded-lg hover:bg-[#333] transition-all duration-200 group/btn">
                            Read Article
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                                class="transition-transform duration-200 group-hover/btn:translate-x-1">
                                <polyline points="9,18 15,12 9,6" />
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection