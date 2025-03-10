@extends('template.layout')

@section('title', 'Service Details - Dewi Bootstrap Template')

@section('content')

  <!-- Page Title -->
  <!-- <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('assets/img/page-title-bg.webp') }});"> -->
  <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/page-title-bg.webp);">
    <div class="container position-relative">
      <h1>Service Details</h1>
      <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam molestias.</p>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="">Home</a></li>
          <li class="current">Service Details</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- End Page Title -->

  <!-- Service Details Section -->
  <section id="service-details" class="service-details section">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="services-list">
            <a href="#" class="active">Web Design</a>
            <a href="#">Software Development</a>
            <a href="#">Product Management</a>
            <a href="#">Graphic Design</a>
            <a href="#">Marketing</a>
          </div>
          <h4>Enim qui eos rerum in delectus</h4>
          <p>Nam voluptatem quasi numquam quas fugiat ex temporibus quo est...</p>
        </div>
        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
          <img src="{{ asset('assets/img/services.jpg') }}" alt="" class="img-fluid services-img">
          <h3>Temporibus et in vero dicta aut eius...</h3>
          <p>Blanditiis voluptate odit ex error ea sed officiis deserunt...</p>
          <ul>
            <li><i class="bi bi-check-circle"></i> Aut eum totam accusantium voluptatem.</li>
            <li><i class="bi bi-check-circle"></i> Assumenda et porro nisi nihil nesciunt voluptatibus.</li>
            <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea.</li>
          </ul>
          <p>Est reprehenderit voluptatem necessitatibus asperiores neque...</p>
        </div>
      </div>
    </div>
  </section>
  <!-- /Service Details Section -->

@endsection