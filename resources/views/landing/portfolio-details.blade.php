@extends('landing.template.layout')

@section('title', 'Portfolio Details')

@section('body-class', 'portfolio-page') {{-- Menyesuaikan body class jika perlu --}}

@section('content')
<style>
/* Tambahkan jarak agar tidak tertutup navbar */
.page-title {
    padding-top: 100px;
    /* Sesuaikan dengan tinggi navbar */
    margin-top: 20px;
    /* Bisa diubah sesuai kebutuhan */
}
</style>
<!-- Page Title -->
<div class="page-title" data-aos="fade">
    <div class="container">
        <nav class="breadcrumbs">
            <ol>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="current">Portfolio Details</li>
            </ol>
        </nav>
        <h1>Portfolio Details</h1>
    </div>
</div>

<!-- Portfolio Details Section -->
<section id="portfolio-details" class="portfolio-details section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
            <div class="col-lg-8">
                <div class="portfolio-details-slider swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('landing/assets/img/portfolio/portfolio-1.webp') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('landing/assets/img/portfolio/portfolio-10.webp') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
                    <h3>Project information</h3>
                    <ul>
                        <li><strong>Category</strong>: Web design</li>
                        <li><strong>Client</strong>: ASU Company</li>
                        <li><strong>Project date</strong>: 01 March, 2020</li>
                        <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
                    </ul>
                </div>
                <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
                    <h2>Project Overview</h2>
                    <p>
                        Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection