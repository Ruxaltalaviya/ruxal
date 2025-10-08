@extends('layout.master')

@section('content')
<div class="about-page">

  <!-- HERO SECTION -->
<section class="hero" style="    background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
        url('images/credits @sahilonweb-03 (1).jpg') center/cover no-repeat;
    text-align: center;
    padding: 120px 20px;
    position: relative;
    color: white;
    ">
    <div class="hero-content">
      <h1>SIYAAHI</h1>
      <h3>OG Hustler • Hip-Hop Artist • India’s Voice of the Streets</h3>
      <div class="socials">
        <a href="https://instagram.com/siyaahimusic">@siyaahimusic</a> |
        <a href="mailto:siyaahibidness@gmail.com">Email</a> |
        <a href="tel:+916265453089">+91 62654 53089</a>
      </div>
    </div>
  </section>
  
  <!-- ABOUT THE ARTIST -->
  <section class="about">
    <img src="images/credits @sahilonweb-03 (1).jpg" alt="Siyaahi">
    <div class="about-text">
      <h2>About the Artist</h2>
      <p>Siyaahi is a hip-hop artist from Gujarat, known for raw lyricism and fearless storytelling. Winner of MTV Hustle 4’s OG Hustler Award, he has collaborated with Sunidhi Chauhan and opened for international stars like G-Eazy and 21 Savage, redefining India’s rap landscape with authenticity and power.</p>
      <p>His music reflects ambition, struggle, and triumph—speaking for the streets with unmatched energy. With over 1 crore streams in the last year, Siyaahi isn’t just making noise; he’s shaping the culture.</p>
    </div>
  </section>
  
  <!-- CAREER HIGHLIGHTS -->
  <section>
    <h2>Career Highlights</h2>
    <div class="highlights">
      <div class="highlight">🏅 MTV Hustle 4 – OG Hustler Award</div>
      <div class="highlight">🎧 1 Crore+ Streams</div>
      <div class="highlight">🎤 75+ Live Performances</div>
      <div class="highlight">📺 Featured on National TV</div>
      <div class="highlight">🌍 Opened for G-Eazy & 21 Savage</div>
    </div>
  </section>
  
  <!-- BRANDWORK -->
  <section class="grid-2">
    <div>
      <h2>Brand Collaborations</h2>
      <p>Siyaahi’s influence extends beyond music. He’s collaborated with brands like Coca-Cola, Redbull, Veirdo, Hyped, Curlin, and Rio. As co-founder of Ahmedabad Hip-Hop, he fosters the next generation through events and workshops.</p>
    </div>
    <img src="images/real_2-1024x1024.jpg" alt="Brandwork">
  </section>
  
  <!-- MIXTAPE -->
  <section class="grid-2">
    <img src="images/real_2-1024x1024.jpg" alt="Sultanate Mixtape">
    <div>
      <h2>SULTANATE — The Siyaahi Mixtape</h2>
      <p>“Sultanate” is more than a mixtape — it’s a reign. After years of grinding, Siyaahi claims his throne in Indian hip-hop with raw lyricism, high-caliber collaborations, and cutting-edge production.</p>
      <p><strong>Featuring:</strong> Ikka, Raga, Bella, Pahaad, Dhruv Rajpal, Yungsta, Bhadrankar, Snappy Kaal.<br>
      <strong>Producers:</strong> Acharya, Rakht, and Uzi.</p>
    </div>
  </section>
  
  <!-- STATS -->
  <section>
    <h2>Statistics 2023-24</h2>
    <div class="stats">
      <div class="stat"><h3>10M+</h3><p>Streams</p></div>
      <div class="stat"><h3>2M+</h3><p>Views</p></div>
      <div class="stat"><h3>220K+</h3><p>Monthly Listeners</p></div>
      <div class="stat"><h3>27K+</h3><p>Subscribers</p></div>
      <div class="stat"><h3>75K+</h3><p>Followers</p></div>
    </div>
  </section>
  
  <!-- DISCOGRAPHY -->
  <section>
    <h2>Discography</h2>
    <div class="highlights">
      <div class="highlight">🎵 LOST IN AMD — 2M+ Streams</div>
      <div class="highlight">🎵 KYEC — 500K+ Streams</div>
      <div class="highlight">🎵 Escape Routes — 150K+ Streams</div>
      <div class="highlight">🎵 Heavyweight — 400K+ Streams</div>
      <div class="highlight">🎵 PAPER KAMA / PAPER CUTS — 1.5M+ Streams</div>
      <div class="highlight">🎵 AMDAVAD RAP LIFE — 1M+ Streams</div>
    </div>
  </section>
  
  <!-- SHOWS -->
  <section>
    <h2>Shows & Tours</h2>
    <ul class="timeline">
      <li><strong>The G-Eazy Tour</strong> — Bangalore</li>
      <li><strong>Ruab Tour</strong> — Pune, Vadodara</li>
      <li><strong>Culture Cypher</strong> — Ahmedabad, 2024</li>
      <li><strong>Zomaland 2023</strong></li>
      <li><strong>Spring Fest 2025</strong></li>
    </ul>
  </section>
</div>
<style>
      h1, h2, h3 {
    color: #fb9df3;
    margin-bottom: 20px;
  }
</style>
@endsection
