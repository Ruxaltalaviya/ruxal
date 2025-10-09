{{-- resources/views/layout/store.blade.php --}}
@extends('layout.master')

@section('content')
    <div class="content-wrapper">

        <!-- HERO SLIDER -->
        <section class="hero-slider">
            <div class="slider-container">
                <div class="slide" style="background-image: url('{{ asset('images/slider1.jpg') }}');">
                    <div class="slide-content">
                        <h1>Welcome to Our Store</h1>
                        <p>Discover the best products at amazing prices</p>
                    </div>
                </div>
                <div class="slide" style="background-image: url('{{ asset('images/slider2.jpg') }}');">
                    <div class="slide-content">
                        <h1>Special Offers</h1>
                        <p>Grab your favorites before they're gone!</p>
                    </div>
                </div>
                <div class="slide" style="background-image: url('{{ asset('images/slider3.jpg') }}');">
                    <div class="slide-content">
                        <h1>New Arrivals</h1>
                        <p>Check out the latest additions to our collection</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- FEATURED PRODUCTS -->
        <section class="products-section">
            <h2>Featured Products</h2>
            <div class="grid">
                <div class="product-card">
                    <img src="{{ asset('images/product1.jpg') }}" alt="Product 1">
                    <h3>Product 1</h3>
                    <p class="price">$49.99</p>
                    <a href="#" class="btn">Add to Cart</a>
                </div>
                <div class="product-card">
                    <img src="{{ asset('images/product2.jpg') }}" alt="Product 2">
                    <h3>Product 2</h3>
                    <p class="price">$59.99</p>
                    <a href="#" class="btn">Add to Cart</a>
                </div>
                <div class="product-card">
                    <img src="{{ asset('images/product3.jpg') }}" alt="Product 3">
                    <h3>Product 3</h3>
                    <p class="price">$39.99</p>
                    <a href="#" class="btn">Add to Cart</a>
                </div>
                <div class="product-card">
                    <img src="{{ asset('images/product4.jpg') }}" alt="Product 4">
                    <h3>Product 4</h3>
                    <p class="price">$29.99</p>
                    <a href="#" class="btn">Add to Cart</a>
                </div>
            </div>
        </section>

        <!-- CATEGORIES -->
        <section class="categories-section">
            <h2>Shop by Category</h2>
            <div class="grid categories-grid">
                <div class="category-card">
                    <img src="{{ asset('images/category1.jpg') }}" alt="Category 1">
                    <h3>Category 1</h3>
                </div>
                <div class="category-card">
                    <img src="{{ asset('images/category2.jpg') }}" alt="Category 2">
                    <h3>Category 2</h3>
                </div>
                <div class="category-card">
                    <img src="{{ asset('images/category3.jpg') }}" alt="Category 3">
                    <h3>Category 3</h3>
                </div>
                <div class="category-card">
                    <img src="{{ asset('images/category4.jpg') }}" alt="Category 4">
                    <h3>Category 4</h3>
                </div>
            </div>
        </section>

        <!-- TESTIMONIALS -->
        <section class="testimonials-section">
            <h2>What Our Customers Say</h2>
            <div class="grid testimonials-grid">
                <div class="testimonial-card">
                    <p>"Amazing quality and fast delivery!"</p>
                    <h4>John Doe</h4>
                </div>
                <div class="testimonial-card">
                    <p>"Customer service was very helpful."</p>
                    <h4>Jane Smith</h4>
                </div>
                <div class="testimonial-card">
                    <p>"I love shopping here, always great deals."</p>
                    <h4>Mike Johnson</h4>
                </div>
                <div class="testimonial-card">
                    <p>"Highly recommend to everyone."</p>
                    <h4>Emma Williams</h4>
                </div>
            </div>
        </section>

    </div>

    <style>
        

        /* HERO SLIDER */
        .hero-slider {
            position: relative;
            overflow: hidden;
            height: 400px;
        }

        .slider-container {
            display: flex;
            transition: transform 0.5s ease;
        }

        .slide {
            min-width: 100%;
            height: 400px;
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .slide-content {
            color: white;
            text-align: center;
            background: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
        }

        /* PRODUCTS GRID */
        .products-section {
            padding: 80px 10%;
            text-align: center;
        }

        .products-section h2 {
            color: #fb9df3;
            margin-bottom: 40px;
        }

        .grid {
            display: grid;
            gap: 30px;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        }

        .product-card {
            background: #141414;
            padding: 20px;
            border-radius: 15px;
            text-align: center;
            color: white;
        }

        .product-card img {
            width: 100%;
            border-radius: 12px;
            margin-bottom: 15px;
        }

        .product-card .price {
            color: #ff92e8;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .product-card .btn {
            background: #ff92e8;
            color: black;
            padding: 10px 25px;
            border-radius: 25px;
            font-weight: 600;
            display: inline-block;
        }

        .btn:hover {
            background: #fb9df3;
            color: white;
            transition: 0.3s;
            padding: 5px 10px;
            border-radius: 5px;
        }

        /* CATEGORIES */
        .categories-section {
            padding: 80px 10%;
            text-align: center;
            background: #111;
        }

        .categories-section h2 {
            color: #fb9df3;
            margin-bottom: 40px;
        }

        .categories-grid {
            display: grid;
            gap: 30px;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        }

        .category-card {
            background: #1a1a1a;
            padding: 20px;
            border-radius: 15px;
            color: white;
            text-align: center;
        }

        .category-card img {
            width: 100%;
            border-radius: 12px;
            margin-bottom: 15px;
        }

        /* TESTIMONIALS */
        .testimonials-section {
            padding: 80px 10%;
            text-align: center;
            background: #222;
        }

        .testimonials-section h2 {
            color: #fb9df3;
            margin-bottom: 40px;
        }

        .testimonials-grid {
            display: grid;
            gap: 30px;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        }

        .testimonial-card {
            background: #1a1a1a;
            padding: 20px;
            border-radius: 15px;
            color: #ccc;
            text-align: left;
        }
        

        /* RESPONSIVE */
        @media(max-width:768px) {
            .hero-slider {
                height: 250px;
            }

            .slide-content h1 {
                font-size: 1.8rem;
            }

            .grid {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            }
        }
    </style>

    <script>
        // Simple slider functionality (auto-slide)
        let sliderIndex = 0;
        const slides = document.querySelectorAll('.slide');
        setInterval(() => {
            sliderIndex = (sliderIndex + 1) % slides.length;
            document.querySelector('.slider-container').style.transform = `translateX(-${sliderIndex * 100}%)`;
        }, 4000);
    </script>
    
@endsection