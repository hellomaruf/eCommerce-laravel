<!-- NAVBAR -->
<nav class="navbar">
    <div class="navbar-logo">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M4 4l4-2 4 2 4-2 4 2v16l-4-2-4 2-4-2-4 2V4z" />
        </svg>
        Stuffsus
    </div>
    <div class="nav-links">
        <a href="#">Beranda</a>
        <a href="#" class="active">Shop</a>
        <a href="#">Blog</a>
    </div>
    <div class="nav-actions">
        <button class="nav-icon-btn">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="11" cy="11" r="8" />
                <path d="m21 21-4.35-4.35" />
            </svg>
        </button>
        <button class="nav-icon-btn">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z" />
                <line x1="3" y1="6" x2="21" y2="6" />
                <path d="M16 10a4 4 0 0 1-8 0" />
            </svg>
            <span class="nav-cart-count">1</span>
        </button>
        <div class="nav-avatar">
            <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?w=64&h=64&fit=crop&crop=face"
                alt="avatar" />
        </div>
        <button class="hamburger" id="hamburger" aria-label="Menu">
            <span></span><span></span><span></span>
        </button>
    </div>
</nav>

<!-- MOBILE MENU DRAWER -->
<div class="mobile-menu" id="mobileMenu">
    <ul class="nav-links">
        <li><a href="#">Beranda</a></li>
        <li><a href="#" class="active">Shop</a></li>
        <li><a href="#">Blog</a></li>
    </ul>
    <hr style="margin:1rem 0;border:none;border-top:1px solid var(--gray-100);">
    <div
        style="font-size:0.75rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase;color:var(--gray-400);margin-bottom:0.8rem;">
        Category</div>
    <div class="cat-all" style="margin-bottom:6px;">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <rect x="3" y="3" width="7" height="7" />
            <rect x="14" y="3" width="7" height="7" />
            <rect x="3" y="14" width="7" height="7" />
            <rect x="14" y="14" width="7" height="7" />
        </svg>
        All Product <span class="cat-all-count">29</span>
    </div>
    <div class="cat-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="2">
            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
        </svg> For Home</div>
    <div class="cat-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="2">
            <path d="M9 18V5l12-2v13" />
            <circle cx="6" cy="18" r="3" />
            <circle cx="18" cy="16" r="3" />
        </svg> For Music</div>
    <div class="cat-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="2">
            <rect x="5" y="2" width="14" height="20" rx="2" />
        </svg> For Phone</div>
    <div class="cat-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="2">
            <ellipse cx="12" cy="5" rx="9" ry="3" />
            <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5" />
        </svg> For Storage</div>
</div>
