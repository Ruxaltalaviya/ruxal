@extends('layout.master')

@section('content')
    <div class="content-wrapper" >
        <!-- HERO SECTION -->
  <section class="hero">
    <h1 style="color: #ff92e8;">Live Events & Tours</h1>
    <p>Experience the energy, the sound, and the movement of Siyaahi live.</p>
  </section>

  <!-- UPCOMING EVENTS -->
  <section>
    <h2 style="color: #ff92e8;">Upcoming Events</h2>
    <div class="grid">
      <div class="event-card">
        <img src="{{ asset('images/_LBS4394.jpg') }}" alt="Zomaland">
        <h3>Zomaland 2025</h3>
        <p>Performing alongside India’s top acts — vibrant crowd, unforgettable night.</p>
        <p class="event-info">📍 Delhi • 🗓 March 2025</p>
      </div>

      <div class="event-card">
        <img src="{{ asset('images/_LBS4396.jpg') }}" alt="RUAB Tour">
        <h3>RUAB Tour</h3>
        <p>Nationwide hip-hop tour with indie legends and underground voices.</p>
        <p class="event-info">📍 Mumbai • 🗓 February 2025</p>
      </div>

      <div class="event-card">
        <img src="{{ asset('images/_LBS4468.jpg') }}" alt="Spring Fest 2025">
        <h3>Spring Fest 2025</h3>
        <p>Live at IIT Kharagpur — where the crowd meets culture and chaos.</p>
        <p class="event-info">📍 Kharagpur • 🗓 January 2025</p>
      </div>
    </div>
  </section>

  <!-- PAST EVENTS -->
  <section style="background:#111;">
    <h2 style="color: #ff92e8;">Past Highlights</h2>
    <div class="grid">
      <div class="past-card">
        <h3>MTV Hustle 4.0</h3>
        <p>Crowned <strong>OG Hustler</strong> — redefining Indian rap with power and authenticity.</p>
      </div>
      <div class="past-card">
        <h3>Opened for G-Eazy</h3>
        <p>Performed live in Bangalore for G-Eazy’s debut Indian show.</p>
      </div>
      <div class="past-card">
        <h3>21 Savage at ISF</h3>
        <p>Set the stage before the global icon at ISF Gurgaon — a defining moment.</p>
      </div>
      <div class="past-card">
        <h3>Culture Cypher & RedBull Spotlight</h3>
        <p>Emerged as a core representative of India’s hip-hop underground.</p>
      </div>
    </div>
  </section>

  <!-- GALLERY -->
  <section>
    <h2 style="color: #ff92e8;">Gallery</h2>
    <div class="gallery">
      <img src="{{ asset('images/_VAQ3679.jpg') }}" alt="Event 1">
      <img src="{{ asset('images/_VAQ3682.jpg') }}" alt="Event 2">
      <img src="{{ asset('images/175492166_278010117206798_7769650415854002363_n (1).jpg') }}" alt="Event 3">
      <img src="{{ asset('images/credits @sahilonweb-03 (1).jpg') }}" alt="Event 4">
    </div>
  </section>

  <!-- BOOKING CTA -->
  <section class="cta">
    <h2>Book Siyaahi for Your Next Event</h2>
    <p>Bring raw energy and hip-hop excellence to your stage.</p>
    <a href="{{route('contact')}}">Contact Now</a>
  </section>

    </div>

    <style>
        body {
          margin: 0;
          font-family: 'Poppins', sans-serif;
          background-color: #0a0a0a;
          color: #f5f5f5; /* brighter text */
        }
        
        a {
          text-decoration: none;
          transition: 0.3s;
        }
        
        a:hover {
          color: #ffb8f8;
        }
        
        /* HERO SECTION */
        .hero {
          text-align: center;
          padding: 120px 20px;
          background: url('{{ asset("images/_LBS4387.jpg") }}') center/cover no-repeat;
          position: relative;
        }
        
        .hero::after {
          content: "";
          position: absolute;
          top:0; left:0; right:0; bottom:0;
          background: rgba(0,0,0,0.7); /* dark overlay for readability */
        }
        
        .hero h1, .hero p {
          position: relative; /* to be above overlay */
          z-index: 1;
        }
        
        .hero h1 {
          font-size: 3.5rem;
          font-weight: 800;
          color: #fff;
          letter-spacing: 2px;
          margin-bottom: 20px;
        }
        
        .hero p {
          font-size: 1.3rem;
          color: #ddd;
        }
        
        /* SECTIONS */
        section {
          padding: 80px 10%;
          text-align: center;
        }
        
        h2 {
          font-size: 2.5rem;
          color: #fff; /* brighter */
          margin-bottom: 40px;
        }
        
        .grid {
          display: grid;
          gap: 40px;
          grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        }
        
        /* EVENT CARDS */
        .event-card, .past-card {
          border-radius: 20px;
          padding: 25px;
          background: #1a1a1a; /* darker solid background */
          box-shadow: 0 8px 20px rgba(0,0,0,0.7);
          transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .event-card:hover, .past-card:hover {
          transform: translateY(-5px);
          box-shadow: 0 12px 30px rgba(255,146,232,0.5);
        }
        
        .event-card img {
          width: 100%;
          border-radius: 15px;
          margin-bottom: 15px;
        }
        
        .event-card h3, .past-card h3 {
          color: #fff;
          margin-bottom: 10px;
        }
        
        .event-card p, .past-card p {
          color: #ccc;
          margin-bottom: 5px;
        }
        
        .event-card .event-info {
          color: #ff92e8;
          font-weight: 600;
        }
        
        /* GALLERY */
        .gallery {
          display: grid;
          gap: 20px;
          grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        }
        
        .gallery img {
          width: 100%;
          border-radius: 15px;
          transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .gallery img:hover {
          transform: scale(1.05);
          box-shadow: 0 8px 20px rgba(255,146,232,0.4);
        }
        
        /* BOOKING CTA */
        .cta {
          padding: 100px 20px;
          color: #fff;
        }
        
        .cta a {
          background: #0a0a0a;
          color: #ff92e8;
          padding: 18px 45px;
          border-radius: 50px;
          font-weight: 600;
          display: inline-block;
          margin-top: 20px;
          box-shadow: 0 6px 18px rgba(255,146,232,0.6);
        }
        
        .cta a:hover {
          background: #ff92e8;
          color: #0a0a0a;
          transform: scale(1.05);
        }
        
        /* RESPONSIVE */
        @media (max-width: 768px) {
          .hero h1 {
            font-size: 2.5rem;
          }
          h2 {
            font-size: 2rem;
          }
          .cta a {
            padding: 15px 35px;
          }
        }
        </style>
        
        
@endsection