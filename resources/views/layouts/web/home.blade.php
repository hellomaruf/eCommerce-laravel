@extends('layouts.web.master')

@section('title', 'Stuffsus — Shop')

@section('content')

<div class="relative h-[425px] overflow-hidden bg-[#1a1a1a] max-md:h-[260px] max-[480px]:h-[220px]">
    <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=1400&h=400&fit=crop" alt="hero" class="w-full h-full object-cover opacity-65" />
    <div class="absolute bottom-[82px] left-0 right-0 font-bold text-white/90 leading-none px-6 pointer-events-none text-center max-md:bottom-[60px] max-[480px]:bottom-[40px]" style="font-size:clamp(80px,18vw,290px);letter-spacing:-4px;max-[480px]:letter-spacing:-2px;">Shop</div>
    <div class="absolute bottom-0 left-0 right-0 bg-white/97 py-4 px-6 flex items-center justify-between max-md:flex-col max-md:items-start max-md:gap-3 max-md:py-3 max-md:px-4">
        <h2 class="text-lg font-bold max-md:text-[0.95rem]">Give All You Need</h2>
        <div class="flex items-center gap-0 border border-[#d4d4d4] rounded-md overflow-hidden bg-white">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="mx-2.5 text-[#aaa] shrink-0">
                <circle cx="11" cy="11" r="8" />
                <path d="m21 21-4.35-4.35" />
            </svg>
            <input type="text" placeholder="Search on Stuffsus" class="border-none outline-none font-[inherit] text-[0.82rem] py-2 w-60 text-[#777] bg-transparent max-md:w-40 max-[480px]:w-30" />
            <button class="bg-[#111] text-white border-none py-2 px-4 text-[0.82rem] font-medium">Search</button>
        </div>
    </div>
</div>

<div class="max-w-[1200px] mx-auto py-6 px-4 grid grid-cols-[200px_1fr] gap-6 max-lg:grid-cols-[180px_1fr] max-lg:gap-4 max-md:grid-cols-1 max-md:py-4 max-md:px-4 max-md:gap-2">

    <button class="hidden max-md:flex items-center gap-2 w-full border border-[#e8e8e8] bg-white rounded-[10px] py-2.5 px-3.5 text-[0.88rem] font-medium text-[#444] cursor-pointer mb-2 max-md:mb-0" id="sidebarToggle">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <line x1="4" y1="6" x2="20" y2="6" />
            <line x1="4" y1="12" x2="14" y2="12" />
            <line x1="4" y1="18" x2="10" y2="18" />
        </svg>
        Filter &amp; Categories
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="ml-auto">
            <polyline points="6,9 12,15 18,9" />
        </svg>
    </button>

    <aside class="bg-white rounded-xl py-5 px-[1.2rem] h-fit max-md:hidden" id="sidebar">
        <div class="text-xs font-bold tracking-widest uppercase text-[#aaa] mb-3">Category</div>
        <div class="flex items-center gap-2 bg-[#111] text-white rounded-lg py-[7px] px-2.5 mb-1.5 text-[0.83rem] font-medium">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <rect x="3" y="3" width="7" height="7" />
                <rect x="14" y="3" width="7" height="7" />
                <rect x="3" y="14" width="7" height="7" />
                <rect x="14" y="14" width="7" height="7" />
            </svg>
            All Product
            <span class="bg-white/20 rounded px-1.5 text-[0.75rem] ml-auto">29</span>
        </div>
        <div class="flex items-center gap-2 py-[7px] px-2.5 rounded-lg text-[0.83rem] text-[#444] cursor-pointer hover:bg-[#f3f3f3] transition-colors duration-150 mb-0.5">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="text-[#aaa] shrink-0">
                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                <polyline points="9,22 9,12 15,12 15,22" />
            </svg>
            For Home
        </div>
        <div class="flex items-center gap-2 py-[7px] px-2.5 rounded-lg text-[0.83rem] text-[#444] cursor-pointer hover:bg-[#f3f3f3] transition-colors duration-150 mb-0.5">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="text-[#aaa] shrink-0">
                <path d="M9 18V5l12-2v13" />
                <circle cx="6" cy="18" r="3" />
                <circle cx="18" cy="16" r="3" />
            </svg>
            For Music
        </div>
        <div class="flex items-center gap-2 py-[7px] px-2.5 rounded-lg text-[0.83rem] text-[#444] cursor-pointer hover:bg-[#f3f3f3] transition-colors duration-150 mb-0.5">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="text-[#aaa] shrink-0">
                <rect x="5" y="2" width="14" height="20" rx="2" ry="2" />
                <line x1="12" y1="18" x2="12.01" y2="18" />
            </svg>
            For Phone
        </div>
        <div class="flex items-center gap-2 py-[7px] px-2.5 rounded-lg text-[0.83rem] text-[#444] cursor-pointer hover:bg-[#f3f3f3] transition-colors duration-150 mb-0.5">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="text-[#aaa] shrink-0">
                <ellipse cx="12" cy="5" rx="9" ry="3" />
                <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5" />
            </svg>
            For Storage
        </div>

        <hr class="border-none border-t border-t-[#e8e8e8] my-4" />

        <div class="flex items-center justify-between py-1.5 text-[0.83rem] text-[#444] cursor-pointer hover:text-[#111]">
            <span>New Arrival</span>
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="text-[#aaa]">
                <polyline points="6,9 12,15 18,9" />
            </svg>
        </div>
        <div class="flex items-center justify-between py-1.5 text-[0.83rem] text-[#444] cursor-pointer hover:text-[#111]">
            <span>Best Seller</span>
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="text-[#aaa]">
                <polyline points="6,9 12,15 18,9" />
            </svg>
        </div>
        <div class="flex items-center justify-between py-1.5 text-[0.83rem] text-[#444] cursor-pointer hover:text-[#111]">
            <span>On Discount</span>
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="text-[#aaa]">
                <polyline points="6,9 12,15 18,9" />
            </svg>
        </div>
    </aside>

    <div>
        <div class="grid grid-cols-3 gap-4 mb-6 max-lg:grid-cols-2 max-md:gap-3 max-[480px]:grid-cols-1" id="productGrid">

            <div class="bg-white rounded-xl overflow-hidden transition-shadow duration-200 hover:shadow-[0_8px_30px_rgba(0,0,0,0.1)]">
                <div class="relative bg-[#f9f9f9] h-[180px] flex items-center justify-center max-md:h-[150px] max-[480px]:h-[200px]">
                    <span class="absolute top-2.5 right-2.5 bg-[#f3f3f3] text-[#777] text-[0.65rem] font-semibold py-[3px] px-2 rounded-[20px] tracking-[0.03em]">Other</span>
                    <img src="https://images.unsplash.com/photo-1586495777744-4e6232bf4e54?w=300&h=200&fit=crop" alt="Phone Holder" class="max-h-[180px] w-full object-cover transition-transform duration-300 hover:scale-105 max-[480px]:max-h-[160px]" />
                </div>
                <div class="p-[0.9rem] max-md:p-3">
                    <div class="font-semibold text-[0.88rem] mb-1 max-md:text-[0.82rem]">Phone Holder Sakti</div>
                    <div class="flex items-center gap-[5px] text-[0.75rem] text-[#777] mb-2"><span class="text-[#F5A623]">★</span> 5.0 (1.2k Reviews)</div>
                    <div class="font-bold text-[0.95rem] mb-2.5 max-md:text-[0.88rem]">$29.90</div>
                    <div class="flex gap-1.5">
                        <button class="flex-1 border border-[#d4d4d4] bg-white text-[#111] rounded-lg py-[7px] px-2 text-[0.78rem] font-medium hover:bg-[#f3f3f3] transition-colors duration-150 max-md:text-[0.72rem] max-md:py-1.5 max-md:px-1">Add to Chart</button>
                        <button class="flex-1 border-none bg-[#111] text-white rounded-lg py-[7px] px-2 text-[0.78rem] font-medium hover:bg-[#333] transition-colors duration-150 max-md:text-[0.72rem] max-md:py-1.5 max-md:px-1">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl overflow-hidden transition-shadow duration-200 hover:shadow-[0_8px_30px_rgba(0,0,0,0.1)]">
                <div class="relative bg-[#f9f9f9] h-[180px] flex items-center justify-center max-md:h-[150px] max-[480px]:h-[200px]">
                    <span class="absolute top-2.5 right-2.5 bg-[#f3f3f3] text-[#777] text-[0.65rem] font-semibold py-[3px] px-2 rounded-[20px] tracking-[0.03em]">Music</span>
                    <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=300&h=200&fit=crop" alt="Headphones" class="max-h-[180px] w-full object-cover transition-transform duration-300 hover:scale-105 max-[480px]:max-h-[160px]" />
                </div>
                <div class="p-[0.9rem] max-md:p-3">
                    <div class="font-semibold text-[0.88rem] mb-1 max-md:text-[0.82rem]">Headsound</div>
                    <div class="flex items-center gap-[5px] text-[0.75rem] text-[#777] mb-2"><span class="text-[#F5A623]">★</span> 5.0 (1.2k Reviews)</div>
                    <div class="font-bold text-[0.95rem] mb-2.5 max-md:text-[0.88rem]">$12.00</div>
                    <div class="flex gap-1.5">
                        <button class="flex-1 border border-[#d4d4d4] bg-white text-[#111] rounded-lg py-[7px] px-2 text-[0.78rem] font-medium hover:bg-[#f3f3f3] transition-colors duration-150 max-md:text-[0.72rem] max-md:py-1.5 max-md:px-1">Add to Chart</button>
                        <button class="flex-1 border-none bg-[#111] text-white rounded-lg py-[7px] px-2 text-[0.78rem] font-medium hover:bg-[#333] transition-colors duration-150 max-md:text-[0.72rem] max-md:py-1.5 max-md:px-1">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl overflow-hidden transition-shadow duration-200 hover:shadow-[0_8px_30px_rgba(0,0,0,0.1)]">
                <div class="relative bg-[#f9f9f9] h-[180px] flex items-center justify-center max-md:h-[150px] max-[480px]:h-[200px]">
                    <span class="absolute top-2.5 right-2.5 bg-[#f3f3f3] text-[#777] text-[0.65rem] font-semibold py-[3px] px-2 rounded-[20px] tracking-[0.03em]">Other</span>
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=300&h=200&fit=crop" alt="Cleaner" class="max-h-[180px] w-full object-cover transition-transform duration-300 hover:scale-105 max-[480px]:max-h-[160px]" />
                </div>
                <div class="p-[0.9rem] max-md:p-3">
                    <div class="font-semibold text-[0.88rem] mb-1 max-md:text-[0.82rem]">Adudu Cleaner</div>
                    <div class="flex items-center gap-[5px] text-[0.75rem] text-[#777] mb-2"><span class="text-[#F5A623]">★</span> 4.4 (1k Reviews)</div>
                    <div class="font-bold text-[0.95rem] mb-2.5 max-md:text-[0.88rem]">$29.90</div>
                    <div class="flex gap-1.5">
                        <button class="flex-1 border border-[#d4d4d4] bg-white text-[#111] rounded-lg py-[7px] px-2 text-[0.78rem] font-medium hover:bg-[#f3f3f3] transition-colors duration-150 max-md:text-[0.72rem] max-md:py-1.5 max-md:px-1">Add to Chart</button>
                        <button class="flex-1 border-none bg-[#111] text-white rounded-lg py-[7px] px-2 text-[0.78rem] font-medium hover:bg-[#333] transition-colors duration-150 max-md:text-[0.72rem] max-md:py-1.5 max-md:px-1">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl overflow-hidden transition-shadow duration-200 hover:shadow-[0_8px_30px_rgba(0,0,0,0.1)]">
                <div class="relative bg-[#f9f9f9] h-[180px] flex items-center justify-center max-md:h-[150px] max-[480px]:h-[200px]">
                    <span class="absolute top-2.5 right-2.5 bg-[#f3f3f3] text-[#777] text-[0.65rem] font-semibold py-[3px] px-2 rounded-[20px] tracking-[0.03em]">Home</span>
                    <img src="https://images.unsplash.com/photo-1585771724684-38269d6639fd?w=300&h=200&fit=crop" alt="CCTV" class="max-h-[180px] w-full object-cover transition-transform duration-300 hover:scale-105 max-[480px]:max-h-[160px]" />
                </div>
                <div class="p-[0.9rem] max-md:p-3">
                    <div class="font-semibold text-[0.88rem] mb-1 max-md:text-[0.82rem]">CCTV Maling</div>
                    <div class="flex items-center gap-[5px] text-[0.75rem] text-[#777] mb-2"><span class="text-[#F5A623]">★</span> 4.8 (120 Reviews)</div>
                    <div class="font-bold text-[0.95rem] mb-2.5 max-md:text-[0.88rem]">$50.00</div>
                    <div class="flex gap-1.5">
                        <button class="flex-1 border border-[#d4d4d4] bg-white text-[#111] rounded-lg py-[7px] px-2 text-[0.78rem] font-medium hover:bg-[#f3f3f3] transition-colors duration-150 max-md:text-[0.72rem] max-md:py-1.5 max-md:px-1">Add to Chart</button>
                        <button class="flex-1 border-none bg-[#111] text-white rounded-lg py-[7px] px-2 text-[0.78rem] font-medium hover:bg-[#333] transition-colors duration-150 max-md:text-[0.72rem] max-md:py-1.5 max-md:px-1">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl overflow-hidden transition-shadow duration-200 hover:shadow-[0_8px_30px_rgba(0,0,0,0.1)]">
                <div class="relative bg-[#f9f9f9] h-[180px] flex items-center justify-center max-md:h-[150px] max-[480px]:h-[200px]">
                    <span class="absolute top-2.5 right-2.5 bg-[#f3f3f3] text-[#777] text-[0.65rem] font-semibold py-[3px] px-2 rounded-[20px] tracking-[0.03em]">Other</span>
                    <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?w=300&h=200&fit=crop" alt="Speaker" class="max-h-[180px] w-full object-cover transition-transform duration-300 hover:scale-105 max-[480px]:max-h-[160px]" />
                </div>
                <div class="p-[0.9rem] max-md:p-3">
                    <div class="font-semibold text-[0.88rem] mb-1 max-md:text-[0.82rem]">Stuffus Peker 32</div>
                    <div class="flex items-center gap-[5px] text-[0.75rem] text-[#777] mb-2"><span class="text-[#F5A623]">★</span> 5.0 (1.2k Reviews)</div>
                    <div class="font-bold text-[0.95rem] mb-2.5 max-md:text-[0.88rem]">$9.90</div>
                    <div class="flex gap-1.5">
                        <button class="flex-1 border border-[#d4d4d4] bg-white text-[#111] rounded-lg py-[7px] px-2 text-[0.78rem] font-medium hover:bg-[#f3f3f3] transition-colors duration-150 max-md:text-[0.72rem] max-md:py-1.5 max-md:px-1">Add to Chart</button>
                        <button class="flex-1 border-none bg-[#111] text-white rounded-lg py-[7px] px-2 text-[0.78rem] font-medium hover:bg-[#333] transition-colors duration-150 max-md:text-[0.72rem] max-md:py-1.5 max-md:px-1">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl overflow-hidden transition-shadow duration-200 hover:shadow-[0_8px_30px_rgba(0,0,0,0.1)]">
                <div class="relative bg-[#f9f9f9] h-[180px] flex items-center justify-center max-md:h-[150px] max-[480px]:h-[200px]">
                    <span class="absolute top-2.5 right-2.5 bg-[#f3f3f3] text-[#777] text-[0.65rem] font-semibold py-[3px] px-2 rounded-[20px] tracking-[0.03em]">Music</span>
                    <img src="https://images.unsplash.com/photo-1590658268037-6bf12165a8df?w=300&h=200&fit=crop" alt="Earbuds" class="max-h-[180px] w-full object-cover transition-transform duration-300 hover:scale-105 max-[480px]:max-h-[160px]" />
                </div>
                <div class="p-[0.9rem] max-md:p-3">
                    <div class="font-semibold text-[0.88rem] mb-1 max-md:text-[0.82rem]">Stuffus R175</div>
                    <div class="flex items-center gap-[5px] text-[0.75rem] text-[#777] mb-2"><span class="text-[#F5A623]">★</span> 4.8 (2.4k Reviews)</div>
                    <div class="font-bold text-[0.95rem] mb-2.5 max-md:text-[0.88rem]">$34.10</div>
                    <div class="flex gap-1.5">
                        <button class="flex-1 border border-[#d4d4d4] bg-white text-[#111] rounded-lg py-[7px] px-2 text-[0.78rem] font-medium hover:bg-[#f3f3f3] transition-colors duration-150 max-md:text-[0.72rem] max-md:py-1.5 max-md:px-1">Add to Chart</button>
                        <button class="flex-1 border-none bg-[#111] text-white rounded-lg py-[7px] px-2 text-[0.78rem] font-medium hover:bg-[#333] transition-colors duration-150 max-md:text-[0.72rem] max-md:py-1.5 max-md:px-1">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl overflow-hidden transition-shadow duration-200 hover:shadow-[0_8px_30px_rgba(0,0,0,0.1)]">
                <div class="relative bg-[#f9f9f9] h-[180px] flex items-center justify-center max-md:h-[150px] max-[480px]:h-[200px]">
                    <span class="absolute top-2.5 right-2.5 bg-[#f3f3f3] text-[#777] text-[0.65rem] font-semibold py-[3px] px-2 rounded-[20px] tracking-[0.03em]">Home</span>
                    <img src="https://images.unsplash.com/photo-1585771724684-38269d6639fd?w=300&h=200&fit=crop" alt="CCTV" class="max-h-[180px] w-full object-cover transition-transform duration-300 hover:scale-105 max-[480px]:max-h-[160px]" />
                </div>
                <div class="p-[0.9rem] max-md:p-3">
                    <div class="font-semibold text-[0.88rem] mb-1 max-md:text-[0.82rem]">CCTV Maling</div>
                    <div class="flex items-center gap-[5px] text-[0.75rem] text-[#777] mb-2"><span class="text-[#F5A623]">★</span> 4.8 (120 Reviews)</div>
                    <div class="font-bold text-[0.95rem] mb-2.5 max-md:text-[0.88rem]">$50.00</div>
                    <div class="flex gap-1.5">
                        <button class="flex-1 border border-[#d4d4d4] bg-white text-[#111] rounded-lg py-[7px] px-2 text-[0.78rem] font-medium hover:bg-[#f3f3f3] transition-colors duration-150 max-md:text-[0.72rem] max-md:py-1.5 max-md:px-1">Add to Chart</button>
                        <button class="flex-1 border-none bg-[#111] text-white rounded-lg py-[7px] px-2 text-[0.78rem] font-medium hover:bg-[#333] transition-colors duration-150 max-md:text-[0.72rem] max-md:py-1.5 max-md:px-1">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl overflow-hidden transition-shadow duration-200 hover:shadow-[0_8px_30px_rgba(0,0,0,0.1)]">
                <div class="relative bg-[#f9f9f9] h-[180px] flex items-center justify-center max-md:h-[150px] max-[480px]:h-[200px]">
                    <span class="absolute top-2.5 right-2.5 bg-[#f3f3f3] text-[#777] text-[0.65rem] font-semibold py-[3px] px-2 rounded-[20px] tracking-[0.03em]">Other</span>
                    <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?w=300&h=200&fit=crop" alt="Speaker" class="max-h-[180px] w-full object-cover transition-transform duration-300 hover:scale-105 max-[480px]:max-h-[160px]" />
                </div>
                <div class="p-[0.9rem] max-md:p-3">
                    <div class="font-semibold text-[0.88rem] mb-1 max-md:text-[0.82rem]">Stuffus Peker 32</div>
                    <div class="flex items-center gap-[5px] text-[0.75rem] text-[#777] mb-2"><span class="text-[#F5A623]">★</span> 5.0 (1.2k Reviews)</div>
                    <div class="font-bold text-[0.95rem] mb-2.5 max-md:text-[0.88rem]">$9.90</div>
                    <div class="flex gap-1.5">
                        <button class="flex-1 border border-[#d4d4d4] bg-white text-[#111] rounded-lg py-[7px] px-2 text-[0.78rem] font-medium hover:bg-[#f3f3f3] transition-colors duration-150 max-md:text-[0.72rem] max-md:py-1.5 max-md:px-1">Add to Chart</button>
                        <button class="flex-1 border-none bg-[#111] text-white rounded-lg py-[7px] px-2 text-[0.78rem] font-medium hover:bg-[#333] transition-colors duration-150 max-md:text-[0.72rem] max-md:py-1.5 max-md:px-1">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl overflow-hidden transition-shadow duration-200 hover:shadow-[0_8px_30px_rgba(0,0,0,0.1)]">
                <div class="relative bg-[#f9f9f9] h-[180px] flex items-center justify-center max-md:h-[150px] max-[480px]:h-[200px]">
                    <span class="absolute top-2.5 right-2.5 bg-[#f3f3f3] text-[#777] text-[0.65rem] font-semibold py-[3px] px-2 rounded-[20px] tracking-[0.03em]">Music</span>
                    <img src="https://images.unsplash.com/photo-1590658268037-6bf12165a8df?w=300&h=200&fit=crop" alt="Earbuds" class="max-h-[180px] w-full object-cover transition-transform duration-300 hover:scale-105 max-[480px]:max-h-[160px]" />
                </div>
                <div class="p-[0.9rem] max-md:p-3">
                    <div class="font-semibold text-[0.88rem] mb-1 max-md:text-[0.82rem]">Stuffus R175</div>
                    <div class="flex items-center gap-[5px] text-[0.75rem] text-[#777] mb-2"><span class="text-[#F5A623]">★</span> 4.8 (2.4k Reviews)</div>
                    <div class="font-bold text-[0.95rem] mb-2.5 max-md:text-[0.88rem]">$34.10</div>
                    <div class="flex gap-1.5">
                        <button class="flex-1 border border-[#d4d4d4] bg-white text-[#111] rounded-lg py-[7px] px-2 text-[0.78rem] font-medium hover:bg-[#f3f3f3] transition-colors duration-150 max-md:text-[0.72rem] max-md:py-1.5 max-md:px-1">Add to Chart</button>
                        <button class="flex-1 border-none bg-[#111] text-white rounded-lg py-[7px] px-2 text-[0.78rem] font-medium hover:bg-[#333] transition-colors duration-150 max-md:text-[0.72rem] max-md:py-1.5 max-md:px-1">Buy Now</button>
                    </div>
                </div>
            </div>

        </div>

        <div class="flex items-center justify-center gap-1.5 py-4 max-md:flex-wrap max-md:gap-1">
            <button class="bg-none border-none text-[0.82rem] text-[#777] flex items-center gap-1 cursor-pointer py-1.5 px-2.5 max-md:py-1 max-md:px-1.5 max-md:text-[0.78rem] hover:text-[#111]">← Previous</button>
            <button class="w-8 h-8 rounded-md border border-[#e8e8e8] bg-[#111] text-white text-[0.82rem] flex items-center justify-center cursor-pointer">1</button>
            <button class="w-8 h-8 rounded-md border border-[#e8e8e8] bg-white text-[0.82rem] text-[#777] flex items-center justify-center cursor-pointer hover:bg-[#f3f3f3]">2</button>
            <button class="w-8 h-8 rounded-md border border-[#e8e8e8] bg-white text-[0.82rem] text-[#777] flex items-center justify-center cursor-pointer hover:bg-[#f3f3f3]">3</button>
            <button class="border-none bg-none text-[#aaa] text-[0.82rem]">...</button>
            <button class="w-8 h-8 rounded-md border border-[#e8e8e8] bg-white text-[0.82rem] text-[#777] flex items-center justify-center cursor-pointer hover:bg-[#f3f3f3]">8</button>
            <button class="w-8 h-8 rounded-md border border-[#e8e8e8] bg-white text-[0.82rem] text-[#777] flex items-center justify-center cursor-pointer hover:bg-[#f3f3f3]">9</button>
            <button class="w-8 h-8 rounded-md border border-[#e8e8e8] bg-white text-[0.82rem] text-[#777] flex items-center justify-center cursor-pointer hover:bg-[#f3f3f3]">10</button>
            <button class="bg-none border-none text-[0.82rem] text-[#777] flex items-center gap-1 cursor-pointer py-1.5 px-2.5 max-md:py-1 max-md:px-1.5 max-md:text-[0.78rem] hover:text-[#111]">Next →</button>
        </div>
    </div>
</div>

<section class="max-w-[1200px] mx-auto py-4 px-4 pb-8 max-md:py-3 max-md:px-4 max-md:pb-6">
    <div class="flex items-center justify-between mb-5">
        <h2 class="text-xl font-bold max-md:text-base">Explore our recomendations</h2>
        <div class="flex gap-2">
            <button class="w-8 h-8 rounded-full border border-[#d4d4d4] bg-white flex items-center justify-center cursor-pointer text-[#777] hover:bg-[#111] hover:text-white hover:border-[#111] transition-all duration-150">←</button>
            <button class="w-8 h-8 rounded-full border border-[#d4d4d4] bg-white flex items-center justify-center cursor-pointer text-[#777] hover:bg-[#111] hover:text-white hover:border-[#111] transition-all duration-150">→</button>
        </div>
    </div>
    <div class="grid grid-cols-4 gap-4 overflow-hidden max-lg:grid-cols-3 max-md:grid-cols-2 max-[480px]:grid-cols-1">

        <div class="bg-white rounded-xl overflow-hidden transition-shadow duration-200 hover:shadow-[0_8px_30px_rgba(0,0,0,0.1)]">
            <div class="relative bg-[#f9f9f9] h-[180px] flex items-center justify-center max-md:h-[150px] max-[480px]:h-[200px]">
                <span class="absolute top-2.5 right-2.5 bg-[#f3f3f3] text-[#777] text-[0.65rem] font-semibold py-[3px] px-2 rounded-[20px] tracking-[0.03em]">Other</span>
                <img src="https://images.unsplash.com/photo-1590658268037-6bf12165a8df?w=300&h=200&fit=crop" alt="TWS" class="max-h-[180px] w-full object-cover" />
            </div>
            <div class="p-[0.9rem] max-md:p-3">
                <div class="font-semibold text-[0.88rem] mb-1 max-md:text-[0.82rem]">TWS Bujug</div>
                <div class="flex items-center gap-[5px] text-[0.75rem] text-[#777] mb-2"><span class="text-[#F5A623]">★</span> 5.0 (1.2k Reviews)</div>
                <div class="font-bold text-[0.95rem] mb-2.5">$29.90</div>
                <div class="flex gap-1.5">
                    <button class="flex-1 border border-[#d4d4d4] bg-white text-[#111] rounded-lg py-[7px] px-2 text-[0.78rem] font-medium hover:bg-[#f3f3f3] transition-colors duration-150 max-md:text-[0.72rem] max-md:py-1.5 max-md:px-1">Add to Chart</button>
                    <button class="flex-1 border-none bg-[#111] text-white rounded-lg py-[7px] px-2 text-[0.78rem] font-medium hover:bg-[#333] transition-colors duration-150 max-md:text-[0.72rem] max-md:py-1.5 max-md:px-1">Buy Now</button>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl overflow-hidden transition-shadow duration-200 hover:shadow-[0_8px_30px_rgba(0,0,0,0.1)]">
            <div class="relative bg-[#f9f9f9] h-[180px] flex items-center justify-center max-md:h-[150px] max-[480px]:h-[200px]">
                <span class="absolute top-2.5 right-2.5 bg-[#f3f3f3] text-[#777] text-[0.65rem] font-semibold py-[3px] px-2 rounded-[20px] tracking-[0.03em]">Music</span>
                <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=300&h=200&fit=crop" alt="Headphones" class="max-h-[180px] w-full object-cover" />
            </div>
            <div class="p-[0.9rem] max-md:p-3">
                <div class="font-semibold text-[0.88rem] mb-1 max-md:text-[0.82rem]">Headsound Baptis</div>
                <div class="flex items-center gap-[5px] text-[0.75rem] text-[#777] mb-2"><span class="text-[#F5A623]">★</span> 5.0 (1.2k Reviews)</div>
                <div class="font-bold text-[0.95rem] mb-2.5">$12.00</div>
                <div class="flex gap-1.5">
                    <button class="flex-1 border border-[#d4d4d4] bg-white text-[#111] rounded-lg py-[7px] px-2 text-[0.78rem] font-medium hover:bg-[#f3f3f3] transition-colors duration-150 max-md:text-[0.72rem] max-md:py-1.5 max-md:px-1">Add to Chart</button>
                    <button class="flex-1 border-none bg-[#111] text-white rounded-lg py-[7px] px-2 text-[0.78rem] font-medium hover:bg-[#333] transition-colors duration-150 max-md:text-[0.72rem] max-md:py-1.5 max-md:px-1">Buy Now</button>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl overflow-hidden transition-shadow duration-200 hover:shadow-[0_8px_30px_rgba(0,0,0,0.1)]">
            <div class="relative bg-[#f9f9f9] h-[180px] flex items-center justify-center max-md:h-[150px] max-[480px]:h-[200px]">
                <span class="absolute top-2.5 right-2.5 bg-[#f3f3f3] text-[#777] text-[0.65rem] font-semibold py-[3px] px-2 rounded-[20px] tracking-[0.03em]">Music</span>
                <img src="https://images.unsplash.com/photo-1520523839897-bd0b52f945a0?w=300&h=200&fit=crop" alt="Piano" class="max-h-[180px] w-full object-cover" />
            </div>
            <div class="p-[0.9rem] max-md:p-3">
                <div class="font-semibold text-[0.88rem] mb-1 max-md:text-[0.82rem]">Adudu Cleaner</div>
                <div class="flex items-center gap-[5px] text-[0.75rem] text-[#777] mb-2"><span class="text-[#F5A623]">★</span> 4.4 (1k Reviews)</div>
                <div class="font-bold text-[0.95rem] mb-2.5">$29.90</div>
                <div class="flex gap-1.5">
                    <button class="flex-1 border border-[#d4d4d4] bg-white text-[#111] rounded-lg py-[7px] px-2 text-[0.78rem] font-medium hover:bg-[#f3f3f3] transition-colors duration-150 max-md:text-[0.72rem] max-md:py-1.5 max-md:px-1">Add to Chart</button>
                    <button class="flex-1 border-none bg-[#111] text-white rounded-lg py-[7px] px-2 text-[0.78rem] font-medium hover:bg-[#333] transition-colors duration-150 max-md:text-[0.72rem] max-md:py-1.5 max-md:px-1">Buy Now</button>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl overflow-hidden transition-shadow duration-200 hover:shadow-[0_8px_30px_rgba(0,0,0,0.1)]">
            <div class="relative bg-[#f9f9f9] h-[180px] flex items-center justify-center max-md:h-[150px] max-[480px]:h-[200px]">
                <span class="absolute top-2.5 right-2.5 bg-[#f3f3f3] text-[#777] text-[0.65rem] font-semibold py-[3px] px-2 rounded-[20px] tracking-[0.03em]">Other</span>
                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=300&h=200&fit=crop" alt="Cleaner" class="max-h-[180px] w-full object-cover" />
            </div>
            <div class="p-[0.9rem] max-md:p-3">
                <div class="font-semibold text-[0.88rem] mb-1 max-md:text-[0.82rem]">Adudu Cleaner</div>
                <div class="flex items-center gap-[5px] text-[0.75rem] text-[#777] mb-2"><span class="text-[#F5A623]">★</span> 4.4 (1k Reviews)</div>
                <div class="font-bold text-[0.95rem] mb-2.5">$29.90</div>
                <div class="flex gap-1.5">
                    <button class="flex-1 border border-[#d4d4d4] bg-white text-[#111] rounded-lg py-[7px] px-2 text-[0.78rem] font-medium hover:bg-[#f3f3f3] transition-colors duration-150 max-md:text-[0.72rem] max-md:py-1.5 max-md:px-1">Add to Chart</button>
                    <button class="flex-1 border-none bg-[#111] text-white rounded-lg py-[7px] px-2 text-[0.78rem] font-medium hover:bg-[#333] transition-colors duration-150 max-md:text-[0.72rem] max-md:py-1.5 max-md:px-1">Buy Now</button>
                </div>
            </div>
        </div>

    </div>
</section>

<div class="bg-[#111] text-white mx-4 mb-8 rounded-2xl py-12 px-12 grid grid-cols-2 gap-8 items-center max-md:grid-cols-1 max-md:gap-6 max-md:rounded-xl max-md:py-8 max-md:px-6 max-md:mb-6 max-[480px]:mx-3 max-[480px]:py-6 max-[480px]:px-5">
    <div>
        <h2 class="text-3xl font-extrabold leading-[1.15] mb-6 max-md:text-2xl max-md:mb-4 max-[480px]:text-[1.3rem]">Ready to Get<br>Our New Stuff?</h2>
        <div class="flex gap-0 max-w-[320px] max-md:max-w-full max-[480px]:max-w-full">
            <input type="email" placeholder="Your Email" class="flex-1 py-2.5 px-3.5 border border-white/15 border-r-0 bg-white/8 text-white text-[0.82rem] outline-none rounded-l-lg max-[480px]:text-[0.78rem] max-[480px]:py-[9px] max-[480px]:px-2.5" />
            <button class="bg-white text-[#111] border-none py-2.5 px-4 text-[0.82rem] font-semibold rounded-r-lg max-[480px]:text-[0.78rem] max-[480px]:py-[9px] max-[480px]:px-3.5">Send</button>
        </div>
    </div>
    <div>
        <div class="font-bold text-[0.9rem] mb-2">Stuffsus for Homes and Needs</div>
        <p class="text-[0.82rem] text-white/55 leading-relaxed max-[480px]:text-[0.8rem]">We'll listen to your needs, identify the best approach, and then create a bespoke smart EV charging solution that's right for you.</p>
    </div>
</div>

@endsection