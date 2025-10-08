@extends('layout.master')

@section('content')
<div class="about-page">

    <!-- Hero -->
    <section class="hero-section">
        <div class="hero-overlay"></div>
        <div class="hero-text" data-animate="fade-in">
            <h1>SIYAAHI</h1>
            <p class="subtitle">India’s Voice of the Streets</p>
            <p class="hero-tagline">OG Hustler | Hip-Hop Artist | Cultural Force</p>
        </div>
    </section>

    <!-- About + Artist Image -->
    <section class="split-section" data-animate="slide-up">
        <div class="split-text">
            <h2>About the Artist</h2>
            <p>Siyaahi is a hip-hop artist from Gujarat, known for raw lyricism and fearless storytelling. 
            Winner of MTV Hustle 4’s <strong>OG Hustler Award</strong>, he has collaborated with 
            <strong>Sunidhi Chauhan</strong> and opened for global stars like <strong>G-Eazy</strong> 
            and <strong>21 Savage</strong>.</p>
            <p>His music reflects ambition, struggle, and triumph — speaking for the streets with unmatched energy. 
            With <strong>1 crore + streams</strong> in the last year, Siyaahi is shaping the culture.</p>
        </div>
        <div class="split-image">
            <img src="{{ asset('images/_VAQ3682.jpg') }}" alt="Siyaahi performing live">
        </div>
    </section>

    <!-- Career Highlights with background image -->
    <section class="highlights with-bg" style="background-image:url('{{ asset('images/credits @sahilonweb-03 (1).jpg') }}')" data-animate="zoom-in">
        <div class="overlay"></div>
        <div class="content">
            <h2>Career Highlights</h2>
            <ul>
                <li>🏆 MTV Hustle 4 – OG Hustler Award Winner</li>
                <li>🔥 1 Crore + Streams (2023 – 24)</li>
                <li>🎤 Collaborated with Sunidhi Chauhan</li>
                <li>🌍 Opened for G-Eazy & 21 Savage</li>
                <li>💫 75 + Live Performances Across India</li>
            </ul>
        </div>
    </section>

    <!-- Brandwork -->
    <section class="split-section reverse" data-animate="slide-left">
        <div class="split-image">
            <img src="{{ asset('images/175492166_278010117206798_7769650415854002363_n (1).jpg') }}" alt="Brand collaborations">
        </div>
        <div class="split-text">
            <h2>Brand Collaborations</h2>
            <p>Siyaahi has partnered with <strong>Coca-Cola, Redbull, Rio Drinks, Veirdo.in,</strong> and 
            <strong>Hyped App</strong>, connecting with diverse audiences while staying true to his street roots.</p>
        </div>
    </section>

    <!-- Mixtape -->
    <section class="mixtape full-bg" style="background-image:url('{{ asset('images/credits @sahilonweb-03 (1).jpg') }}')" data-animate="fade-in">
        <div class="overlay"></div>
        <div class="mixtape-text">
            <h2>Sultanate: The Siyaahi Mixtape</h2>
            <p>“Sultanate is more than a mixtape — it’s a reign.”  
               Featuring <strong>IKKA, RAGA, BELLA, YUNGSTA</strong> and more —  
               a movement redefining Indian hip-hop.</p>
        </div>
    </section>

    <!-- Discography Grid with Album Covers -->
    <section class="discography" data-animate="fade-in">
        <h2>Top Releases</h2>
        <div class="album-grid">
            <div class="album-card">
                <img src="{{ asset('images/_VAQ3682.jpg') }}" alt="Lost in AMD">
                <h3>Lost in AMD</h3><p>2M + Streams</p>
            </div>
            <div class="album-card">
                <img src="{{ asset('images/_VAQ3682.jpg') }}" alt="KYEC"><h3>KYEC</h3><p>500K + Streams</p>
            </div>
            <div class="album-card">
                <img src="{{ asset('images/_VAQ3682.jpg') }}" alt="Paper Cuts"><h3>Paper Kama / Paper Cuts</h3><p>1.5M + Streams</p>
            </div>
            <div class="album-card">
                <img src="{{ asset('images/_VAQ3682.jpg') }}" alt="Heavyweight"><h3>Heavyweight</h3><p>400K + Streams</p>
            </div>
        </div>
    </section>

    <!-- Shows -->
    <section class="shows" data-animate="slide-up">
        <h2>Major Shows & Tours</h2>
        <div class="show-gallery">
            <img src="{{ asset('images/_VAQ3682.jpg') }}" alt="G-Eazy Tour">
            <img src="{{ asset('images/_VAQ3682.jpg') }}" alt="Ruab Tour">
            <img src="{{ asset('images/_VAQ3682.jpg') }}" alt="Zomaland">
        </div>
        <div class="show-list">
            <span>🎤 Zomaland 2023</span>
            <span>🔥 The Ruab Tour 2023</span>
            <span>🏙️ G-Eazy Tour Bangalore</span>
            <span>💣 Culture Cypher 2024</span>
            <span>🌆 Spring Fest 2025</span>
        </div>
    </section>

</div>
@endsection
