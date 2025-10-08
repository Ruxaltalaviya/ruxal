{{-- resources/views/store.blade.php --}}
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
            <div class="product-card">
                <img src="{{ asset('images/product5.jpg') }}" alt="Product 5">
                <h3>Product 5</h3>
                <p class="price">$69.99</p>
                <a href="#" class="btn">Add to Cart</a>
            </div>
            <div class="product-card">
                <img src="{{ asset('images/product6.jpg') }}" alt="Product 6">
                <h3>Product 6</h3>
                <p class="price">$79.99</p>
                <a href="#" class="btn">Add to Cart</a>
            </div>
        </div>
    </section>

    <!-- SALES PRODUCTS -->
    <section class="products-section sales">
        <h2>On Sale</h2>
        <div class="grid">
            <div class="product-card">
                <img src="{{ asset('images/product7.jpg') }}" alt="Product 7">
                <h3>Product 7</h3>
                <p class="price">$19.99</p>
                <a href="#" class="btn">Add to Cart</a>
            </div>
            <div class="product-card">
                <img src="{{ asset('images/product8.jpg') }}" alt="Product 8">
                <h3>Product 8</h3>
                <p class="price">$24.99</p>
                <a href="#" class="btn">Add to Cart</a>
            </div>
            <div class="product-card">
                <img src="{{ asset('images/product9.jpg') }}" alt="Product 9">
                <h3>Product 9</h3>
                <p class="price">$34.99</p>
                <a href="#" class="btn">Add to Cart</a>
            </div>
            <div class="product-card">
                <img src="{{ asset('images/product10.jpg') }}" alt="Product 10">
                <h3>Product 10</h3>
                <p class="price">$44.99</p>
                <a href="#" class="btn">Add to Cart</a>
            </div>
            <div class="product-card">
                <img src="{{ asset('images/product11.jpg') }}" alt="Product 11">
                <h3>Product 11</h3>
                <p class="price">$54.99</p>
                <a href="#" class="btn">Add to Cart</a>
            </div>
            <div class="product-card">
                <img src="{{ asset('images/product12.jpg') }}" alt="Product 12">
                <h3>Product 12</h3>
                <p class="price">$64.99</p>
                <a href="#" class="btn">Add to Cart</a>
            </div>
        </div>
    </section>

    <!-- REVIEWS -->
    <section class="reviews-section">
        <h2>Customer Reviews</h2>
        <div class="grid reviews-grid">
            <div class="review-card">
                <p>"Great product, fast shipping!"</p>
                <h4>John Doe</h4>
                <p class="rating">Rating: 5/5</p>
            </div>
            <div class="review-card">
                <p>"Excellent quality and price."</p>
                <h4>Jane Smith</h4>
                <p class="rating">Rating: 4/5</p>
            </div>
            <div class="review-card">
                <p>"I love this store!"</p>
                <h4>Mike Johnson</h4>
                <p class="rating">Rating: 5/5</p>
            </div>
            <div class="review-card">
                <p>"Highly recommend to everyone."</p>
                <h4>Emma Williams</h4>
                <p class="rating">Rating: 5/5</p>
            </div>
            <div class="review-card">
                <p>"Fast delivery and good support."</p>
                <h4>Chris Lee</h4>
                <p class="rating">Rating: 4/5</p>
            </div>
            <div class="review-card">
                <p>"Products exactly as described."</p>
                <h4>Sarah Brown</h4>
                <p class="rating">Rating: 5/5</p>
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
        /* smooth hover effect */
        padding: 5px 10px;
        /* optional if you want a button-like hover */
        border-radius: 5px;
        /* optional rounded corners */
    }

    /* REVIEWS */
    .reviews-section {
        padding: 80px 10%;
        text-align: center;
        background: #111;
    }

    .reviews-section h2 {
        color: #fb9df3;
        margin-bottom: 40px;
    }

    .reviews-grid {
        display: grid;
        gap: 30px;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    }

    .review-card {
        background: #1a1a1a;
        padding: 20px;
        border-radius: 15px;
        color: #ccc;
        text-align: left;
    }

    .review-card .rating {
        color: #ff92e8;
        font-weight: 600;
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
    //Simple slider functionality (auto-slide)
    let sliderIndex = 0;
    const slides = document.querySelectorAll('.slide');
    setInterval(() => {
        sliderIndex = (sliderIndex + 1) % slides.length;
        document.querySelector('.slider-container').style.transform = `translateX(-${sliderIndex * 100}%)`;
    }, 4000);
</script>
@endsection