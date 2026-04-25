@extends('layouts.web.master')
@section('title', $blog->title)

@section('content')

    <div class="max-w-[900px] mx-auto px-5 py-10 md:py-16">

        {{-- Top Meta --}}
        <div class="mb-6">
            <span class="inline-block bg-[#d4edda] text-[#155724] text-[0.75rem] font-medium py-1.5 px-4 rounded-full mb-4">
                {{ $blog->category }}
            </span>
            <p class="text-[#888] text-[0.85rem] mb-3">{{ $blog->published_at }}</p>
            <h1 class="text-[1.8rem] md:text-[2.4rem] font-bold text-[#111] leading-tight">
                {{ $blog->title }}
            </h1>
        </div>

        {{-- Featured Image --}}
        <div class="w-full rounded-2xl overflow-hidden mb-10">
            <img src="{{ $blog->image }}" alt="{{ $blog->title }}"
                class="w-full h-auto object-cover" />
        </div>

        {{-- Blog Content --}}
        <div class="text-[#333] leading-[1.8] text-[0.95rem]">
            <p class="text-[#555] mb-8 text-[0.9rem] leading-[1.75]">
                {{ $blog->content }}
            </p>
        </div>

    </div>

    {{-- Read Our Next Article Section --}}
    <div class="border-t border-[#eee] pt-10 pb-16">
        <div class="max-w-[1100px] mx-auto px-5">
            <div class="flex items-center justify-between mb-8">
                <h2 class="text-[1.5rem] md:text-[1.8rem] font-bold text-[#111]">Read Our Next Article</h2>
                <div class="flex items-center gap-3">
                    <button class="w-10 h-10 rounded-full border border-[#ccc] flex items-center justify-center text-[#333] hover:bg-[#f5f5f5] transition-colors">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </button>
                    <button class="w-10 h-10 rounded-full border border-[#ccc] flex items-center justify-center text-[#333] hover:bg-[#f5f5f5] transition-colors">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                {{-- Card 1 --}}
                <div class="relative rounded-2xl overflow-hidden h-[220px] group cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?w=600" alt="Next Article"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                    <div class="absolute inset-0 bg-linear-to-t from-black/70 via-black/30 to-transparent"></div>
                    <div class="absolute top-4 left-4">
                        <span class="bg-[#d4edda] text-[#155724] text-[0.7rem] font-medium py-1 px-3 rounded-full">
                            Accounts payable
                        </span>
                    </div>
                    <div class="absolute bottom-4 left-4 right-4">
                        <h3 class="text-white font-semibold text-[1rem] leading-snug">
                            5 Smart Ways to Reduce Business Expenses
                        </h3>
                    </div>
                </div>

                {{-- Card 2 --}}
                <div class="relative rounded-2xl overflow-hidden h-[220px] group cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600" alt="Next Article"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                    <div class="absolute inset-0 bg-linear-to-t from-black/70 via-black/30 to-transparent"></div>
                    <div class="absolute top-4 left-4">
                        <span class="bg-[#d4edda] text-[#155724] text-[0.7rem] font-medium py-1 px-3 rounded-full">
                            Business growth
                        </span>
                    </div>
                    <div class="absolute bottom-4 left-4 right-4">
                        <h3 class="text-white font-semibold text-[1rem] leading-snug">
                            How to Scale Your Startup in 2024
                        </h3>
                    </div>
                </div>

                {{-- Card 3 --}}
                <div class="relative rounded-2xl overflow-hidden h-[220px] group cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=600" alt="Next Article"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                    <div class="absolute inset-0 bg-linear-to-t from-black/70 via-black/30 to-transparent"></div>
                    <div class="absolute top-4 left-4">
                        <span class="bg-[#d4edda] text-[#155724] text-[0.7rem] font-medium py-1 px-3 rounded-full">
                            Accounts payable
                        </span>
                    </div>
                    <div class="absolute bottom-4 left-4 right-4">
                        <h3 class="text-white font-semibold text-[1rem] leading-snug">
                            Understanding Financial Audits for Small Businesses
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
