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
        "author_avatar" => "https://i.pravatar.cc/150?img=1",
        "author_bio" => "Tech enthusiast and gadget reviewer with 5+ years of experience.",
        "category" => "Gadgets",
        "tags" => ["Gadgets", "Tech", "2026", "Trending"],
        "image" => "https://images.unsplash.com/photo-1508830524289-0adcbe822b40?w=800",
        "excerpt" => "Discover the most trending gadgets of 2026 that are changing the tech world.",
        "content" => "In 2026, technology has taken a huge leap. From AI-powered smartwatches to foldable displays, gadgets have become smarter and more accessible. This year, consumers are leaning towards devices that seamlessly integrate into their daily lifestyle. Whether you're a tech enthusiast or a casual user, these top 10 gadgets will blow your mind. From wireless earbuds with noise cancellation to portable solar chargers, the market is full of innovation. Let's dive deep into the most trending gadgets that everyone is talking about in 2026.",
        "published_at" => "2026-04-01",
        "updated_at" => "2026-04-03",
        "read_time" => "5 min read",
        "views" => 1240,
        "likes" => 87,
        "comments_count" => 14,
        "is_featured" => true,
        "status" => "published",
        "meta_title" => "Top 10 Trending Gadgets in 2026 | TechBlog",
        "meta_description" => "Explore the most popular and trending gadgets of 2026 that are revolutionizing everyday life.",
        "related_post_ids" => [2, 6],
        "comments" => [
            (object)[
                "user" => "Rahim",
                "avatar" => "https://i.pravatar.cc/150?img=10",
                "comment" => "Great article! Very informative.",
                "date" => "2026-04-02"
            ],
            (object)[
                "user" => "Karim",
                "avatar" => "https://i.pravatar.cc/150?img=11",
                "comment" => "I already bought the smartwatch you mentioned!",
                "date" => "2026-04-03"
            ],
        ]
    ],
    (object) [
        "id" => 2,
        "title" => "Best Budget Smartphones You Can Buy",
        "slug" => "best-budget-smartphones",
        "author" => "Maruf",
        "author_avatar" => "https://i.pravatar.cc/150?img=2",
        "author_bio" => "Mobile tech reviewer and software developer from Dhaka.",
        "category" => "Mobile",
        "tags" => ["Smartphone", "Budget", "Mobile", "Android"],
        "image" => "https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=800",
        "excerpt" => "Looking for a budget smartphone?",
        "content" => "Budget smartphones are getting better every year. In 2026, you don't have to spend a fortune to get a great device. Brands like Xiaomi, Realme, and Samsung are offering feature-packed phones at affordable prices. From 108MP cameras to 5000mAh batteries, budget phones now rival flagships in many aspects. In this article, we'll cover the best budget smartphones you can buy right now, with honest reviews and detailed comparisons to help you make the right decision.",
        "published_at" => "2026-04-05",
        "updated_at" => "2026-04-06",
        "read_time" => "6 min read",
        "views" => 980,
        "likes" => 65,
        "comments_count" => 9,
        "is_featured" => false,
        "status" => "published",
        "meta_title" => "Best Budget Smartphones 2026 | TechBlog",
        "meta_description" => "Find the best budget smartphones available in 2026 with top specs and great value.",
        "related_post_ids" => [1, 6],
        "comments" => [
            (object)[
                "user" => "Nasrin",
                "avatar" => "https://i.pravatar.cc/150?img=20",
                "comment" => "This helped me choose my new phone!",
                "date" => "2026-04-06"
            ],
        ]
    ],
    (object) [
        "id" => 3,
        "title" => "How to Start an Online Shop in 2026",
        "slug" => "start-online-shop-2026",
        "author" => "Admin",
        "author_avatar" => "https://i.pravatar.cc/150?img=3",
        "author_bio" => "E-commerce consultant and online business strategist.",
        "category" => "Business",
        "tags" => ["E-commerce", "Business", "Online Shop", "Startup"],
        "image" => "https://images.unsplash.com/photo-1556740738-b6a63e27c4df?w=800",
        "excerpt" => "A complete guide to starting your own online store.",
        "content" => "Starting an online shop has never been easier. With platforms like Shopify, WooCommerce, and local solutions, you can launch your store in just a few hours. In this complete guide, we'll walk you through everything — from choosing your niche and setting up your store to managing inventory and marketing your products. Whether you want to sell fashion, electronics, or handmade crafts, this guide will set you on the right path for a successful e-commerce journey in 2026.",
        "published_at" => "2026-04-10",
        "updated_at" => "2026-04-11",
        "read_time" => "8 min read",
        "views" => 1540,
        "likes" => 102,
        "comments_count" => 21,
        "is_featured" => true,
        "status" => "published",
        "meta_title" => "How to Start an Online Shop in 2026 | Business Guide",
        "meta_description" => "Step-by-step guide to launching your own online store in 2026 with minimal investment.",
        "related_post_ids" => [5, 7],
        "comments" => [
            (object)[
                "user" => "Sumaiya",
                "avatar" => "https://i.pravatar.cc/150?img=30",
                "comment" => "Very helpful for beginners like me!",
                "date" => "2026-04-11"
            ],
            (object)[
                "user" => "Tarek",
                "avatar" => "https://i.pravatar.cc/150?img=31",
                "comment" => "I followed this guide and launched my shop!",
                "date" => "2026-04-12"
            ],
        ]
    ],
    (object) [
        "id" => 4,
        "title" => "Top Fashion Trends This Year",
        "slug" => "top-fashion-trends-2026",
        "author" => "Sarah",
        "author_avatar" => "https://i.pravatar.cc/150?img=4",
        "author_bio" => "Fashion blogger and stylist with a passion for sustainable clothing.",
        "category" => "Fashion",
        "tags" => ["Fashion", "Trends", "Style", "2026"],
        "image" => "https://images.unsplash.com/photo-1490481651871-ab68de25d43d?w=800",
        "excerpt" => "Stay ahead with the latest fashion trends.",
        "content" => "Fashion in 2026 is all about comfort and sustainability. Gone are the days of fast fashion — today's consumers want clothes that are both stylish and eco-friendly. From oversized blazers to recycled fabric streetwear, the runways are full of exciting new looks. This article covers the top fashion trends of 2026 that you absolutely need to know, along with tips on how to incorporate them into your everyday wardrobe without breaking the bank.",
        "published_at" => "2026-04-12",
        "updated_at" => "2026-04-13",
        "read_time" => "4 min read",
        "views" => 760,
        "likes" => 54,
        "comments_count" => 7,
        "is_featured" => false,
        "status" => "published",
        "meta_title" => "Top Fashion Trends 2026 | Style Guide",
        "meta_description" => "Discover the hottest fashion trends of 2026 and how to style them for every occasion.",
        "related_post_ids" => [],
        "comments" => [
            (object)[
                "user" => "Mitu",
                "avatar" => "https://i.pravatar.cc/150?img=40",
                "comment" => "Love the sustainable fashion section!",
                "date" => "2026-04-13"
            ],
        ]
    ],
    (object) [
        "id" => 5,
        "title" => "E-commerce SEO Tips for Beginners",
        "slug" => "ecommerce-seo-tips",
        "author" => "Maruf",
        "author_avatar" => "https://i.pravatar.cc/150?img=2",
        "author_bio" => "Mobile tech reviewer and software developer from Dhaka.",
        "category" => "SEO",
        "tags" => ["SEO", "E-commerce", "Digital Marketing", "Google"],
        "image" => "https://images.unsplash.com/photo-1508830524289-0adcbe822b40?w=800",
        "excerpt" => "Learn how to optimize your online store.",
        "content" => "SEO is crucial for e-commerce success. Without proper optimization, your store might remain invisible to potential customers. In this beginner-friendly guide, we'll explain the basics of on-page SEO, keyword research, product description optimization, image alt tags, and link building. By following these simple yet effective tips, you can significantly increase your store's visibility on search engines and drive more organic traffic to boost your sales in 2026.",
        "published_at" => "2026-04-15",
        "updated_at" => "2026-04-16",
        "read_time" => "7 min read",
        "views" => 890,
        "likes" => 73,
        "comments_count" => 11,
        "is_featured" => false,
        "status" => "published",
        "meta_title" => "E-commerce SEO Tips for Beginners 2026 | TechBlog",
        "meta_description" => "Learn beginner-friendly SEO strategies to rank your online store higher on Google in 2026.",
        "related_post_ids" => [3, 7],
        "comments" => [
            (object)[
                "user" => "Arif",
                "avatar" => "https://i.pravatar.cc/150?img=50",
                "comment" => "Finally an SEO guide that makes sense!",
                "date" => "2026-04-16"
            ],
        ]
    ],
    (object) [
        "id" => 6,
        "title" => "Top Laptop Picks for Developers",
        "slug" => "top-laptops-for-developers",
        "author" => "John",
        "author_avatar" => "https://i.pravatar.cc/150?img=5",
        "author_bio" => "Full-stack developer and open-source contributor.",
        "category" => "Tech",
        "tags" => ["Laptop", "Developer", "Coding", "Tech"],
        "image" => "https://images.unsplash.com/photo-1517336714731-489689fd1ca8?w=800",
        "excerpt" => "Best laptops for coding and development.",
        "content" => "Choosing the right laptop is essential for developers. A good development machine needs a fast processor, sufficient RAM, a comfortable keyboard, and a long battery life. In 2026, the market offers some incredible options — from Apple's MacBook Pro with M5 chips to powerful Linux-ready ThinkPads. This guide compares the top laptops for developers based on performance, build quality, display, and value for money, so you can make the best choice for your workflow.",
        "published_at" => "2026-04-18",
        "updated_at" => "2026-04-19",
        "read_time" => "6 min read",
        "views" => 1120,
        "likes" => 91,
        "comments_count" => 18,
        "is_featured" => true,
        "status" => "published",
        "meta_title" => "Best Laptops for Developers 2026 | TechBlog",
        "meta_description" => "Compare the top laptops for developers in 2026 — performance, price, and build quality reviewed.",
        "related_post_ids" => [1, 2],
        "comments" => [
            (object)[
                "user" => "Rifat",
                "avatar" => "https://i.pravatar.cc/150?img=60",
                "comment" => "Switched to ThinkPad after reading this!",
                "date" => "2026-04-19"
            ],
            (object)[
                "user" => "Tanvir",
                "avatar" => "https://i.pravatar.cc/150?img=61",
                "comment" => "MacBook M5 is a beast for development.",
                "date" => "2026-04-20"
            ],
        ]
    ],
    (object) [
        "id" => 7,
        "title" => "Digital Marketing Strategies in 2026",
        "slug" => "digital-marketing-2026",
        "author" => "Emma",
        "author_avatar" => "https://i.pravatar.cc/150?img=6",
        "author_bio" => "Digital marketing expert specializing in social media and content strategy.",
        "category" => "Marketing",
        "tags" => ["Marketing", "Digital", "Social Media", "Strategy"],
        "image" => "https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800",
        "excerpt" => "Latest marketing strategies to grow your business.",
        "content" => "Digital marketing is evolving rapidly. In 2026, AI-driven marketing tools, short-form video content, and personalized customer experiences are dominating the landscape. Brands that adapt quickly to these changes are seeing massive growth. This article breaks down the most effective digital marketing strategies of 2026 — including influencer marketing, AI chatbots for customer service, email automation, and data-driven ad campaigns — to help your business stay competitive and reach the right audience.",
        "published_at" => "2026-04-20",
        "updated_at" => "2026-04-21",
        "read_time" => "7 min read",
        "views" => 1350,
        "likes" => 110,
        "comments_count" => 25,
        "is_featured" => true,
        "status" => "published",
        "meta_title" => "Digital Marketing Strategies 2026 | Marketing Guide",
        "meta_description" => "Discover the top digital marketing strategies for 2026 to grow your brand and reach more customers.",
        "related_post_ids" => [3, 5],
        "comments" => [
            (object)[
                "user" => "Nadia",
                "avatar" => "https://i.pravatar.cc/150?img=70",
                "comment" => "AI marketing tools are a game changer!",
                "date" => "2026-04-21"
            ],
        ]
    ],
    (object) [
        "id" => 8,
        "title" => "Best UI/UX Design Practices",
        "slug" => "ui-ux-design-practices",
        "author" => "Maruf",
        "author_avatar" => "https://i.pravatar.cc/150?img=2",
        "author_bio" => "Mobile tech reviewer and software developer from Dhaka.",
        "category" => "Design",
        "tags" => ["UI", "UX", "Design", "Web Design"],
        "image" => "https://images.unsplash.com/photo-1545235617-9465d2a55698?w=800",
        "excerpt" => "Improve your design skills with these tips.",
        "content" => "UI/UX design plays a crucial role in user experience. A well-designed interface not only looks beautiful but also makes it easy for users to navigate and complete their goals. In 2026, design trends like glassmorphism, micro-interactions, and accessible design are becoming standard. This article covers the best UI/UX practices that every designer should follow — from wireframing and prototyping to usability testing and accessibility — to create products that users truly love.",
        "published_at" => "2026-04-22",
        "updated_at" => "2026-04-22",
        "read_time" => "5 min read",
        "views" => 670,
        "likes" => 48,
        "comments_count" => 6,
        "is_featured" => false,
        "status" => "published",
        "meta_title" => "Best UI/UX Design Practices 2026 | Design Guide",
        "meta_description" => "Learn the most effective UI/UX design practices of 2026 to build beautiful and user-friendly products.",
        "related_post_ids" => [6, 7],
        "comments" => [
            (object)[
                "user" => "Lamia",
                "avatar" => "https://i.pravatar.cc/150?img=80",
                "comment" => "Micro-interactions are so underrated!",
                "date" => "2026-04-22"
            ],
        ]
    ],
];

    // $blogsData = null;

    return view('layouts.web.blogs', compact('blogTitle', 'blogsData'));
});

Route::get('blogs/{slug}', function ($slug) {
    $blogsData = [
        (object) [
            "id" => 1,
            "title" => "Top 10 Trending Gadgets in 2026",
            "slug" => "top-10-trending-gadgets-2026",
            "author" => "Admin",
            "author_avatar" => "https://i.pravatar.cc/150?img=1",
            "author_bio" => "Tech enthusiast and gadget reviewer with 5+ years of experience.",
            "category" => "Gadgets",
            "tags" => ["Gadgets", "Tech", "2026", "Trending"],
            "image" => "https://images.unsplash.com/photo-1508830524289-0adcbe822b40?w=800",
            "excerpt" => "Discover the most trending gadgets of 2026 that are changing the tech world.",
            "content" => "In 2026, technology has taken a huge leap. From AI-powered smartwatches to foldable displays, gadgets have become smarter and more accessible. This year, consumers are leaning towards devices that seamlessly integrate into their daily lifestyle. Whether you're a tech enthusiast or a casual user, these top 10 gadgets will blow your mind. From wireless earbuds with noise cancellation to portable solar chargers, the market is full of innovation. Let's dive deep into the most trending gadgets that everyone is talking about in 2026.",
            "published_at" => "2026-04-01",
            "updated_at" => "2026-04-03",
            "read_time" => "5 min read",
            "views" => 1240,
            "likes" => 87,
            "comments_count" => 14,
            "is_featured" => true,
            "status" => "published",
            "meta_title" => "Top 10 Trending Gadgets in 2026 | TechBlog",
            "meta_description" => "Explore the most popular and trending gadgets of 2026 that are revolutionizing everyday life.",
            "related_post_ids" => [2, 6],
            "comments" => [
                (object)[
                    "user" => "Rahim",
                    "avatar" => "https://i.pravatar.cc/150?img=10",
                    "comment" => "Great article! Very informative.",
                    "date" => "2026-04-02"
                ],
                (object)[
                    "user" => "Karim",
                    "avatar" => "https://i.pravatar.cc/150?img=11",
                    "comment" => "I already bought the smartwatch you mentioned!",
                    "date" => "2026-04-03"
                ],
            ]
        ],
        (object) [
            "id" => 2,
            "title" => "Best Budget Smartphones You Can Buy",
            "slug" => "best-budget-smartphones",
            "author" => "Maruf",
            "author_avatar" => "https://i.pravatar.cc/150?img=2",
            "author_bio" => "Mobile tech reviewer and software developer from Dhaka.",
            "category" => "Mobile",
            "tags" => ["Smartphone", "Budget", "Mobile", "Android"],
            "image" => "https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=800",
            "excerpt" => "Looking for a budget smartphone?",
            "content" => "Budget smartphones are getting better every year. In 2026, you don't have to spend a fortune to get a great device. Brands like Xiaomi, Realme, and Samsung are offering feature-packed phones at affordable prices. From 108MP cameras to 5000mAh batteries, budget phones now rival flagships in many aspects. In this article, we'll cover the best budget smartphones you can buy right now, with honest reviews and detailed comparisons to help you make the right decision.",
            "published_at" => "2026-04-05",
            "updated_at" => "2026-04-06",
            "read_time" => "6 min read",
            "views" => 980,
            "likes" => 65,
            "comments_count" => 9,
            "is_featured" => false,
            "status" => "published",
            "meta_title" => "Best Budget Smartphones 2026 | TechBlog",
            "meta_description" => "Find the best budget smartphones available in 2026 with top specs and great value.",
            "related_post_ids" => [1, 6],
            "comments" => [
                (object)[
                    "user" => "Nasrin",
                    "avatar" => "https://i.pravatar.cc/150?img=20",
                    "comment" => "This helped me choose my new phone!",
                    "date" => "2026-04-06"
                ],
            ]
        ],
        (object) [
            "id" => 3,
            "title" => "How to Start an Online Shop in 2026",
            "slug" => "start-online-shop-2026",
            "author" => "Admin",
            "author_avatar" => "https://i.pravatar.cc/150?img=3",
            "author_bio" => "E-commerce consultant and online business strategist.",
            "category" => "Business",
            "tags" => ["E-commerce", "Business", "Online Shop", "Startup"],
            "image" => "https://images.unsplash.com/photo-1556740738-b6a63e27c4df?w=800",
            "excerpt" => "A complete guide to starting your own online store.",
            "content" => "Starting an online shop has never been easier. With platforms like Shopify, WooCommerce, and local solutions, you can launch your store in just a few hours. In this complete guide, we'll walk you through everything — from choosing your niche and setting up your store to managing inventory and marketing your products. Whether you want to sell fashion, electronics, or handmade crafts, this guide will set you on the right path for a successful e-commerce journey in 2026.",
            "published_at" => "2026-04-10",
            "updated_at" => "2026-04-11",
            "read_time" => "8 min read",
            "views" => 1540,
            "likes" => 102,
            "comments_count" => 21,
            "is_featured" => true,
            "status" => "published",
            "meta_title" => "How to Start an Online Shop in 2026 | Business Guide",
            "meta_description" => "Step-by-step guide to launching your own online store in 2026 with minimal investment.",
            "related_post_ids" => [5, 7],
            "comments" => [
                (object)[
                    "user" => "Sumaiya",
                    "avatar" => "https://i.pravatar.cc/150?img=30",
                    "comment" => "Very helpful for beginners like me!",
                    "date" => "2026-04-11"
                ],
                (object)[
                    "user" => "Tarek",
                    "avatar" => "https://i.pravatar.cc/150?img=31",
                    "comment" => "I followed this guide and launched my shop!",
                    "date" => "2026-04-12"
                ],
            ]
        ],
        (object) [
            "id" => 4,
            "title" => "Top Fashion Trends This Year",
            "slug" => "top-fashion-trends-2026",
            "author" => "Sarah",
            "author_avatar" => "https://i.pravatar.cc/150?img=4",
            "author_bio" => "Fashion blogger and stylist with a passion for sustainable clothing.",
            "category" => "Fashion",
            "tags" => ["Fashion", "Trends", "Style", "2026"],
            "image" => "https://images.unsplash.com/photo-1490481651871-ab68de25d43d?w=800",
            "excerpt" => "Stay ahead with the latest fashion trends.",
            "content" => "Fashion in 2026 is all about comfort and sustainability. Gone are the days of fast fashion — today's consumers want clothes that are both stylish and eco-friendly. From oversized blazers to recycled fabric streetwear, the runways are full of exciting new looks. This article covers the top fashion trends of 2026 that you absolutely need to know, along with tips on how to incorporate them into your everyday wardrobe without breaking the bank.",
            "published_at" => "2026-04-12",
            "updated_at" => "2026-04-13",
            "read_time" => "4 min read",
            "views" => 760,
            "likes" => 54,
            "comments_count" => 7,
            "is_featured" => false,
            "status" => "published",
            "meta_title" => "Top Fashion Trends 2026 | Style Guide",
            "meta_description" => "Discover the hottest fashion trends of 2026 and how to style them for every occasion.",
            "related_post_ids" => [],
            "comments" => [
                (object)[
                    "user" => "Mitu",
                    "avatar" => "https://i.pravatar.cc/150?img=40",
                    "comment" => "Love the sustainable fashion section!",
                    "date" => "2026-04-13"
                ],
            ]
        ],
        (object) [
            "id" => 5,
            "title" => "E-commerce SEO Tips for Beginners",
            "slug" => "ecommerce-seo-tips",
            "author" => "Maruf",
            "author_avatar" => "https://i.pravatar.cc/150?img=2",
            "author_bio" => "Mobile tech reviewer and software developer from Dhaka.",
            "category" => "SEO",
            "tags" => ["SEO", "E-commerce", "Digital Marketing", "Google"],
            "image" => "https://images.unsplash.com/photo-1508830524289-0adcbe822b40?w=800",
            "excerpt" => "Learn how to optimize your online store.",
            "content" => "SEO is crucial for e-commerce success. Without proper optimization, your store might remain invisible to potential customers. In this beginner-friendly guide, we'll explain the basics of on-page SEO, keyword research, product description optimization, image alt tags, and link building. By following these simple yet effective tips, you can significantly increase your store's visibility on search engines and drive more organic traffic to boost your sales in 2026.",
            "published_at" => "2026-04-15",
            "updated_at" => "2026-04-16",
            "read_time" => "7 min read",
            "views" => 890,
            "likes" => 73,
            "comments_count" => 11,
            "is_featured" => false,
            "status" => "published",
            "meta_title" => "E-commerce SEO Tips for Beginners 2026 | TechBlog",
            "meta_description" => "Learn beginner-friendly SEO strategies to rank your online store higher on Google in 2026.",
            "related_post_ids" => [3, 7],
            "comments" => [
                (object)[
                    "user" => "Arif",
                    "avatar" => "https://i.pravatar.cc/150?img=50",
                    "comment" => "Finally an SEO guide that makes sense!",
                    "date" => "2026-04-16"
                ],
            ]
        ],
        (object) [
            "id" => 6,
            "title" => "Top Laptop Picks for Developers",
            "slug" => "top-laptops-for-developers",
            "author" => "John",
            "author_avatar" => "https://i.pravatar.cc/150?img=5",
            "author_bio" => "Full-stack developer and open-source contributor.",
            "category" => "Tech",
            "tags" => ["Laptop", "Developer", "Coding", "Tech"],
            "image" => "https://images.unsplash.com/photo-1517336714731-489689fd1ca8?w=800",
            "excerpt" => "Best laptops for coding and development.",
            "content" => "Choosing the right laptop is essential for developers. A good development machine needs a fast processor, sufficient RAM, a comfortable keyboard, and a long battery life. In 2026, the market offers some incredible options — from Apple's MacBook Pro with M5 chips to powerful Linux-ready ThinkPads. This guide compares the top laptops for developers based on performance, build quality, display, and value for money, so you can make the best choice for your workflow.",
            "published_at" => "2026-04-18",
            "updated_at" => "2026-04-19",
            "read_time" => "6 min read",
            "views" => 1120,
            "likes" => 91,
            "comments_count" => 18,
            "is_featured" => true,
            "status" => "published",
            "meta_title" => "Best Laptops for Developers 2026 | TechBlog",
            "meta_description" => "Compare the top laptops for developers in 2026 — performance, price, and build quality reviewed.",
            "related_post_ids" => [1, 2],
            "comments" => [
                (object)[
                    "user" => "Rifat",
                    "avatar" => "https://i.pravatar.cc/150?img=60",
                    "comment" => "Switched to ThinkPad after reading this!",
                    "date" => "2026-04-19"
                ],
                (object)[
                    "user" => "Tanvir",
                    "avatar" => "https://i.pravatar.cc/150?img=61",
                    "comment" => "MacBook M5 is a beast for development.",
                    "date" => "2026-04-20"
                ],
            ]
        ],
        (object) [
            "id" => 7,
            "title" => "Digital Marketing Strategies in 2026",
            "slug" => "digital-marketing-2026",
            "author" => "Emma",
            "author_avatar" => "https://i.pravatar.cc/150?img=6",
            "author_bio" => "Digital marketing expert specializing in social media and content strategy.",
            "category" => "Marketing",
            "tags" => ["Marketing", "Digital", "Social Media", "Strategy"],
            "image" => "https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800",
            "excerpt" => "Latest marketing strategies to grow your business.",
            "content" => "Digital marketing is evolving rapidly. In 2026, AI-driven marketing tools, short-form video content, and personalized customer experiences are dominating the landscape. Brands that adapt quickly to these changes are seeing massive growth. This article breaks down the most effective digital marketing strategies of 2026 — including influencer marketing, AI chatbots for customer service, email automation, and data-driven ad campaigns — to help your business stay competitive and reach the right audience.",
            "published_at" => "2026-04-20",
            "updated_at" => "2026-04-21",
            "read_time" => "7 min read",
            "views" => 1350,
            "likes" => 110,
            "comments_count" => 25,
            "is_featured" => true,
            "status" => "published",
            "meta_title" => "Digital Marketing Strategies 2026 | Marketing Guide",
            "meta_description" => "Discover the top digital marketing strategies for 2026 to grow your brand and reach more customers.",
            "related_post_ids" => [3, 5],
            "comments" => [
                (object)[
                    "user" => "Nadia",
                    "avatar" => "https://i.pravatar.cc/150?img=70",
                    "comment" => "AI marketing tools are a game changer!",
                    "date" => "2026-04-21"
                ],
            ]
        ],
        (object) [
            "id" => 8,
            "title" => "Best UI/UX Design Practices",
            "slug" => "ui-ux-design-practices",
            "author" => "Maruf",
            "author_avatar" => "https://i.pravatar.cc/150?img=2",
            "author_bio" => "Mobile tech reviewer and software developer from Dhaka.",
            "category" => "Design",
            "tags" => ["UI", "UX", "Design", "Web Design"],
            "image" => "https://images.unsplash.com/photo-1545235617-9465d2a55698?w=800",
            "excerpt" => "Improve your design skills with these tips.",
            "content" => "UI/UX design plays a crucial role in user experience. A well-designed interface not only looks beautiful but also makes it easy for users to navigate and complete their goals. In 2026, design trends like glassmorphism, micro-interactions, and accessible design are becoming standard. This article covers the best UI/UX practices that every designer should follow — from wireframing and prototyping to usability testing and accessibility — to create products that users truly love.",
            "published_at" => "2026-04-22",
            "updated_at" => "2026-04-22",
            "read_time" => "5 min read",
            "views" => 670,
            "likes" => 48,
            "comments_count" => 6,
            "is_featured" => false,
            "status" => "published",
            "meta_title" => "Best UI/UX Design Practices 2026 | Design Guide",
            "meta_description" => "Learn the most effective UI/UX design practices of 2026 to build beautiful and user-friendly products.",
            "related_post_ids" => [6, 7],
            "comments" => [
                (object)[
                    "user" => "Lamia",
                    "avatar" => "https://i.pravatar.cc/150?img=80",
                    "comment" => "Micro-interactions are so underrated!",
                    "date" => "2026-04-22"
                ],
            ]
        ],
    ];

    $blog = collect($blogsData)->firstWhere('slug' , $slug);

    if (! $blog) {
        abort(404);
    }

    return view('layouts.web.blogs-details', compact('blog'));
});