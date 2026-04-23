<nav
    class="bg-white flex items-center px-8 h-[60px] border-b border-[#e8e8e8] sticky top-0 z-100 max-md:px-4 max-[480px]:h-[54px]">
    <div class="flex items-center gap-1.5 font-bold text-base mr-12 max-md:mr-auto max-[480px]:text-[0.9rem]">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-5 h-5">
            <path d="M4 4l4-2 4 2 4-2 4 2v16l-4-2-4 2-4-2-4 2V4z" />
        </svg>
        Stuffsus
    </div>
    <div class="flex gap-7 flex-1 max-md:hidden">
        <a href="#" class="text-sm text-[#777] hover:text-[#111] transition-colors duration-150">Beranda</a>
        <a href="{{ url('/') }}" class="text-sm text-[#111] font-medium">Shop</a>
        <a href="{{ url('blogs') }}"
            class="text-sm text-[#777] hover:text-[#111] transition-colors duration-150">Blog</a>
    </div>
    <div class="flex items-center gap-4 ml-auto">
        <button class="bg-none border-none p-1.5 text-[#444] flex items-center relative max-[480px]:hidden">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="11" cy="11" r="8" />
                <path d="m21 21-4.35-4.35" />
            </svg>
        </button>
        <button class="bg-none border-none p-1.5 text-[#444] flex items-center relative">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z" />
                <line x1="3" y1="6" x2="21" y2="6" />
                <path d="M16 10a4 4 0 0 1-8 0" />
            </svg>
            <span
                class="absolute top-0 right-0 bg-red-500 text-white rounded-full w-4 h-4 text-[9px] flex items-center justify-center font-bold">1</span>
        </button>
        <div class="w-8 h-8 rounded-full bg-[#e8e8e8] overflow-hidden flex items-center justify-center">
            <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?w=64&h=64&fit=crop&crop=face"
                alt="avatar" class="w-full h-full object-cover" />
        </div>
        <button class="hidden flex-col justify-center gap-[5px] bg-none border-none p-1.5 cursor-pointer max-md:flex"
            id="hamburger" aria-label="Menu">
            <span class="block w-[22px] h-[2px] bg-[#111] rounded-sm transition-all duration-250"></span>
            <span class="block w-[22px] h-[2px] bg-[#111] rounded-sm transition-all duration-250"></span>
            <span class="block w-[22px] h-[2px] bg-[#111] rounded-sm transition-all duration-250"></span>
        </button>
    </div>
</nav>

<div class="hidden fixed top-[60px] left-0 right-0 bottom-0 bg-white z-99 p-6 overflow-y-auto -translate-x-full transition-transform duration-300 max-md:block max-[480px]:top-[54px]"
    id="mobileMenu">
    <ul class="flex flex-col gap-0">
        <li><a href="#" class="block py-3.5 border-b border-[#f3f3f3] text-base">Beranda</a></li>
        <li><a href="#" class="block py-3.5 border-b border-[#f3f3f3] text-base font-medium text-[#111]">Shop</a></li>
        <li><a href="blogs" class="block py-3.5 border-b border-[#f3f3f3] text-base">Blog</a></li>
    </ul>
    <hr class="my-4 border-none border-t border-t-[#f3f3f3]">
    <div class="text-xs font-bold tracking-widest uppercase text-[#aaa] mb-3">Category</div>
    <div
        class="flex items-center gap-2 bg-[#111] text-white rounded-lg py-[7px] px-2.5 mb-1.5 text-[0.83rem] font-medium mb-1.5">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <rect x="3" y="3" width="7" height="7" />
            <rect x="14" y="3" width="7" height="7" />
            <rect x="3" y="14" width="7" height="7" />
            <rect x="14" y="14" width="7" height="7" />
        </svg>
        All Product <span class="bg-white/20 rounded px-1.5 text-xs ml-auto">29</span>
    </div>
    <div
        class="flex items-center gap-2 py-[7px] px-2.5 rounded-lg text-[0.83rem] text-[#444] cursor-pointer hover:bg-[#f3f3f3] mb-0.5">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            class="text-[#aaa] shrink-0">
            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
            <polyline points="9,22 9,12 15,12 15,22" />
        </svg>
        For Home
    </div>
    <div
        class="flex items-center gap-2 py-[7px] px-2.5 rounded-lg text-[0.83rem] text-[#444] cursor-pointer hover:bg-[#f3f3f3] mb-0.5">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            class="text-[#aaa] shrink-0">
            <path d="M9 18V5l12-2v13" />
            <circle cx="6" cy="18" r="3" />
            <circle cx="18" cy="16" r="3" />
        </svg>
        For Music
    </div>
    <div
        class="flex items-center gap-2 py-[7px] px-2.5 rounded-lg text-[0.83rem] text-[#444] cursor-pointer hover:bg-[#f3f3f3] mb-0.5">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            class="text-[#aaa] shrink-0">
            <rect x="5" y="2" width="14" height="20" rx="2" ry="2" />
            <line x1="12" y1="18" x2="12.01" y2="18" />
        </svg>
        For Phone
    </div>
    <div
        class="flex items-center gap-2 py-[7px] px-2.5 rounded-lg text-[0.83rem] text-[#444] cursor-pointer hover:bg-[#f3f3f3] mb-0.5">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            class="text-[#aaa] shrink-0">
            <ellipse cx="12" cy="5" rx="9" ry="3" />
            <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5" />
        </svg>
        For Storage
    </div>
</div>