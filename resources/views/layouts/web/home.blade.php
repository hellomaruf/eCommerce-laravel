@extends('layouts.web.master')
@section('title', 'Stuffsus — Shop')
@section('content')

<!-- HERO -->
<div class="hero">
    <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=1400&h=400&fit=crop" alt="hero" />
    <div class="hero-title">Shop</div>
    <div class="hero-search-bar">
        <h2>Give All You Need</h2>
        <div class="search-input-wrap">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="11" cy="11" r="8" />
                <path d="m21 21-4.35-4.35" />
            </svg>
            <input type="text" placeholder="Search on Stuffsus" />
            <button class="search-btn">Search</button>
        </div>
    </div>
</div>

<!-- MAIN -->
<div class="main-wrapper">

    <!-- MOBILE FILTER TOGGLE -->
    <button class="mobile-sidebar-toggle" id="sidebarToggle">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <line x1="4" y1="6" x2="20" y2="6" />
            <line x1="4" y1="12" x2="14" y2="12" />
            <line x1="4" y1="18" x2="10" y2="18" />
        </svg>
        Filter &amp; Categories
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            style="margin-left:auto">
            <polyline points="6,9 12,15 18,9" />
        </svg>
    </button>

    <!-- SIDEBAR -->
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-title">Category</div>
        <div class="cat-all">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <rect x="3" y="3" width="7" height="7" />
                <rect x="14" y="3" width="7" height="7" />
                <rect x="3" y="14" width="7" height="7" />
                <rect x="14" y="14" width="7" height="7" />
            </svg>
            All Product
            <span class="cat-all-count">29</span>
        </div>
        <div class="cat-item">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                <polyline points="9,22 9,12 15,12 15,22" />
            </svg>
            For Home
        </div>
        <div class="cat-item">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M9 18V5l12-2v13" />
                <circle cx="6" cy="18" r="3" />
                <circle cx="18" cy="16" r="3" />
            </svg>
            For Music
        </div>
        <div class="cat-item">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <rect x="5" y="2" width="14" height="20" rx="2" ry="2" />
                <line x1="12" y1="18" x2="12.01" y2="18" />
            </svg>
            For Phone
        </div>
        <div class="cat-item">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <ellipse cx="12" cy="5" rx="9" ry="3" />
                <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3" />
                <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5" />
            </svg>
            For Storage
        </div>

        <hr class="sidebar-divider" />

        <div class="filter-item">
            <span>New Arrival</span>
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polyline points="6,9 12,15 18,9" />
            </svg>
        </div>
        <div class="filter-item">
            <span>Best Seller</span>
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polyline points="6,9 12,15 18,9" />
            </svg>
        </div>
        <div class="filter-item">
            <span>On Discount</span>
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polyline points="6,9 12,15 18,9" />
            </svg>
        </div>
    </aside>

    <!-- PRODUCTS -->
    <div class="products-area">
        <div class="products-grid" id="productGrid">

            <div class="prod-card">
                <div class="prod-img-wrap">
                    <span class="prod-badge">Other</span>
                    <img src="https://images.unsplash.com/photo-1586495777744-4e6232bf4e54?w=300&h=200&fit=crop"
                        alt="Phone Holder" />
                </div>
                <div class="prod-body">
                    <div class="prod-name">Phone Holder Sakti</div>
                    <div class="prod-rating"><span class="star">★</span> 5.0 (1.2k Reviews)</div>
                    <div class="prod-price">$29.90</div>
                    <div class="prod-btns">
                        <button class="btn-cart">Add to Chart</button>
                        <button class="btn-buy">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="prod-card">
                <div class="prod-img-wrap">
                    <span class="prod-badge">Music</span>
                    <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=300&h=200&fit=crop"
                        alt="Headphones" />
                </div>
                <div class="prod-body">
                    <div class="prod-name">Headsound</div>
                    <div class="prod-rating"><span class="star">★</span> 5.0 (1.2k Reviews)</div>
                    <div class="prod-price">$12.00</div>
                    <div class="prod-btns">
                        <button class="btn-cart">Add to Chart</button>
                        <button class="btn-buy">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="prod-card">
                <div class="prod-img-wrap">
                    <span class="prod-badge">Other</span>
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=300&h=200&fit=crop"
                        alt="Cleaner" />
                </div>
                <div class="prod-body">
                    <div class="prod-name">Adudu Cleaner</div>
                    <div class="prod-rating"><span class="star">★</span> 4.4 (1k Reviews)</div>
                    <div class="prod-price">$29.90</div>
                    <div class="prod-btns">
                        <button class="btn-cart">Add to Chart</button>
                        <button class="btn-buy">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="prod-card">
                <div class="prod-img-wrap">
                    <span class="prod-badge">Home</span>
                    <img src="https://images.unsplash.com/photo-1585771724684-38269d6639fd?w=300&h=200&fit=crop"
                        alt="CCTV" />
                </div>
                <div class="prod-body">
                    <div class="prod-name">CCTV Maling</div>
                    <div class="prod-rating"><span class="star">★</span> 4.8 (120 Reviews)</div>
                    <div class="prod-price">$50.00</div>
                    <div class="prod-btns">
                        <button class="btn-cart">Add to Chart</button>
                        <button class="btn-buy">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="prod-card">
                <div class="prod-img-wrap">
                    <span class="prod-badge">Other</span>
                    <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?w=300&h=200&fit=crop"
                        alt="Speaker" />
                </div>
                <div class="prod-body">
                    <div class="prod-name">Stuffus Peker 32</div>
                    <div class="prod-rating"><span class="star">★</span> 5.0 (1.2k Reviews)</div>
                    <div class="prod-price">$9.90</div>
                    <div class="prod-btns">
                        <button class="btn-cart">Add to Chart</button>
                        <button class="btn-buy">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="prod-card">
                <div class="prod-img-wrap">
                    <span class="prod-badge">Music</span>
                    <img src="https://images.unsplash.com/photo-1590658268037-6bf12165a8df?w=300&h=200&fit=crop"
                        alt="Earbuds" />
                </div>
                <div class="prod-body">
                    <div class="prod-name">Stuffus R175</div>
                    <div class="prod-rating"><span class="star">★</span> 4.8 (2.4k Reviews)</div>
                    <div class="prod-price">$34.10</div>
                    <div class="prod-btns">
                        <button class="btn-cart">Add to Chart</button>
                        <button class="btn-buy">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="prod-card">
                <div class="prod-img-wrap">
                    <span class="prod-badge">Home</span>
                    <img src="https://images.unsplash.com/photo-1585771724684-38269d6639fd?w=300&h=200&fit=crop"
                        alt="CCTV" />
                </div>
                <div class="prod-body">
                    <div class="prod-name">CCTV Maling</div>
                    <div class="prod-rating"><span class="star">★</span> 4.8 (120 Reviews)</div>
                    <div class="prod-price">$50.00</div>
                    <div class="prod-btns">
                        <button class="btn-cart">Add to Chart</button>
                        <button class="btn-buy">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="prod-card">
                <div class="prod-img-wrap">
                    <span class="prod-badge">Other</span>
                    <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?w=300&h=200&fit=crop"
                        alt="Speaker" />
                </div>
                <div class="prod-body">
                    <div class="prod-name">Stuffus Peker 32</div>
                    <div class="prod-rating"><span class="star">★</span> 5.0 (1.2k Reviews)</div>
                    <div class="prod-price">$9.90</div>
                    <div class="prod-btns">
                        <button class="btn-cart">Add to Chart</button>
                        <button class="btn-buy">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="prod-card">
                <div class="prod-img-wrap">
                    <span class="prod-badge">Music</span>
                    <img src="https://images.unsplash.com/photo-1590658268037-6bf12165a8df?w=300&h=200&fit=crop"
                        alt="Earbuds" />
                </div>
                <div class="prod-body">
                    <div class="prod-name">Stuffus R175</div>
                    <div class="prod-rating"><span class="star">★</span> 4.8 (2.4k Reviews)</div>
                    <div class="prod-price">$34.10</div>
                    <div class="prod-btns">
                        <button class="btn-cart">Add to Chart</button>
                        <button class="btn-buy">Buy Now</button>
                    </div>
                </div>
            </div>

        </div>

        <!-- PAGINATION -->
        <div class="pagination">
            <button class="page-btn-nav">← Previous</button>
            <button class="page-btn active">1</button>
            <button class="page-btn">2</button>
            <button class="page-btn">3</button>
            <button class="page-btn" style="border:none;background:none;color:var(--gray-400);">...</button>
            <button class="page-btn">8</button>
            <button class="page-btn">9</button>
            <button class="page-btn">10</button>
            <button class="page-btn-nav">Next →</button>
        </div>
    </div>
</div>

<!-- RECOMMENDATIONS -->
<section class="reco-section">
    <div class="reco-header">
        <h2 class="reco-title">Explore our recomendations</h2>
        <div class="reco-nav">
            <button class="reco-nav-btn">←</button>
            <button class="reco-nav-btn">→</button>
        </div>
    </div>
    <div class="reco-grid">

        <div class="prod-card">
            <div class="prod-img-wrap">
                <span class="prod-badge">Other</span>
                <img src="https://images.unsplash.com/photo-1590658268037-6bf12165a8df?w=300&h=200&fit=crop"
                    alt="TWS" />
            </div>
            <div class="prod-body">
                <div class="prod-name">TWS Bujug</div>
                <div class="prod-rating"><span class="star">★</span> 5.0 (1.2k Reviews)</div>
                <div class="prod-price">$29.90</div>
                <div class="prod-btns">
                    <button class="btn-cart">Add to Chart</button>
                    <button class="btn-buy">Buy Now</button>
                </div>
            </div>
        </div>

        <div class="prod-card">
            <div class="prod-img-wrap">
                <span class="prod-badge">Music</span>
                <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=300&h=200&fit=crop"
                    alt="Headphones" />
            </div>
            <div class="prod-body">
                <div class="prod-name">Headsound Baptis</div>
                <div class="prod-rating"><span class="star">★</span> 5.0 (1.2k Reviews)</div>
                <div class="prod-price">$12.00</div>
                <div class="prod-btns">
                    <button class="btn-cart">Add to Chart</button>
                    <button class="btn-buy">Buy Now</button>
                </div>
            </div>
        </div>

        <div class="prod-card">
            <div class="prod-img-wrap">
                <span class="prod-badge">Music</span>
                <img src="https://images.unsplash.com/photo-1520523839897-bd0b52f945a0?w=300&h=200&fit=crop"
                    alt="Piano" />
            </div>
            <div class="prod-body">
                <div class="prod-name">Adudu Cleaner</div>
                <div class="prod-rating"><span class="star">★</span> 4.4 (1k Reviews)</div>
                <div class="prod-price">$29.90</div>
                <div class="prod-btns">
                    <button class="btn-cart">Add to Chart</button>
                    <button class="btn-buy">Buy Now</button>
                </div>
            </div>
        </div>

        <div class="prod-card">
            <div class="prod-img-wrap">
                <span class="prod-badge">Other</span>
                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=300&h=200&fit=crop"
                    alt="Cleaner" />
            </div>
            <div class="prod-body">
                <div class="prod-name">Adudu Cleaner</div>
                <div class="prod-rating"><span class="star">★</span> 4.4 (1k Reviews)</div>
                <div class="prod-price">$29.90</div>
                <div class="prod-btns">
                    <button class="btn-cart">Add to Chart</button>
                    <button class="btn-buy">Buy Now</button>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- CTA BANNER -->
<div class="cta-banner">
    <div>
        <h2 class="cta-title">Ready to Get<br>Our New Stuff?</h2>
        <div class="cta-form">
            <input type="email" placeholder="Your Email" />
            <button>Send</button>
        </div>
    </div>
    <div class="cta-right">
        <div class="cta-right-title">Stuffsus for Homes and Needs</div>
        <p class="cta-right-text">We'll listen to your needs, identify the best approach, and then create a bespoke
            smart EV charging solution that's right for you.</p>
    </div>
</div>

@endsection
