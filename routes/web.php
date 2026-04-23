<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.web.home');
});

Route::get('blogs', function () {

    $blogTitle = "Blogs page";
    $blogsData = [
        (object) [
            "id" => 1,
            "title" => "Top 10 Trending Gadgets in 2026",
            "slug" => "top-10-trending-gadgets-2026",
            "author" => "Admin",
            "category" => "Gadgets",
            "image" => "https://images.unsplash.com/photo-1508830524289-0adcbe822b40?w=800",
            "excerpt" => "Discover the most trending gadgets of 2026 that are changing the tech world.",
            "content" => "In 2026, technology has taken a huge leap.",
            "published_at" => "2026-04-01"
        ],
        (object) [
            "id" => 2,
            "title" => "Best Budget Smartphones You Can Buy",
            "slug" => "best-budget-smartphones",
            "author" => "Maruf",
            "category" => "Mobile",
            "image" => "https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=800",
            "excerpt" => "Looking for a budget smartphone?",
            "content" => "Budget smartphones are getting better every year.",
            "published_at" => "2026-04-05"
        ],
        (object) [
            "id" => 3,
            "title" => "How to Start an Online Shop in 2026",
            "slug" => "start-online-shop-2026",
            "author" => "Admin",
            "category" => "Business",
            "image" => "https://images.unsplash.com/photo-1556740738-b6a63e27c4df?w=800",
            "excerpt" => "A complete guide to starting your own online store.",
            "content" => "Starting an online shop has never been easier.",
            "published_at" => "2026-04-10"
        ],
        (object) [
            "id" => 4,
            "title" => "Top Fashion Trends This Year",
            "slug" => "top-fashion-trends-2026",
            "author" => "Sarah",
            "category" => "Fashion",
            "image" => "https://images.unsplash.com/photo-1490481651871-ab68de25d43d?w=800",
            "excerpt" => "Stay ahead with the latest fashion trends.",
            "content" => "Fashion in 2026 is all about comfort and sustainability.",
            "published_at" => "2026-04-12"
        ],
        (object) [
            "id" => 5,
            "title" => "E-commerce SEO Tips for Beginners",
            "slug" => "ecommerce-seo-tips",
            "author" => "Maruf",
            "category" => "SEO",
            "image" => "https://images.unsplash.com/photo-1508830524289-0adcbe822b40?w=800",
            "excerpt" => "Learn how to optimize your online store.",
            "content" => "SEO is crucial for e-commerce success.",
            "published_at" => "2026-04-15"
        ],
        (object) [
            "id" => 6,
            "title" => "Top Laptop Picks for Developers",
            "slug" => "top-laptops-for-developers",
            "author" => "John",
            "category" => "Tech",
            "image" => "https://images.unsplash.com/photo-1517336714731-489689fd1ca8?w=800",
            "excerpt" => "Best laptops for coding and development.",
            "content" => "Choosing the right laptop is essential for developers.",
            "published_at" => "2026-04-18"
        ],
        (object) [
            "id" => 7,
            "title" => "Digital Marketing Strategies in 2026",
            "slug" => "digital-marketing-2026",
            "author" => "Emma",
            "category" => "Marketing",
            "image" => "https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800",
            "excerpt" => "Latest marketing strategies to grow your business.",
            "content" => "Digital marketing is evolving rapidly.",
            "published_at" => "2026-04-20"
        ],
        (object) [
            "id" => 8,
            "title" => "Best UI/UX Design Practices",
            "slug" => "ui-ux-design-practices",
            "author" => "Maruf",
            "category" => "Design",
            "image" => "https://images.unsplash.com/photo-1545235617-9465d2a55698?w=800",
            "excerpt" => "Improve your design skills with these tips.",
            "content" => "UI/UX design plays a crucial role in user experience.",
            "published_at" => "2026-04-22"
        ]
    ];

    // $blogsData = null;

    return view('layouts.web.blogs', compact('blogTitle', 'blogsData'));
});
