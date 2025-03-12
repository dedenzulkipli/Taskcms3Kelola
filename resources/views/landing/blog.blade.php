@extends('landing.template.layout')

@section('title', 'Blog')

@section('body-class', 'blog-page')

@section('content')

<style>
  .page-title {
    padding-top: 100px; /* Atur padding sesuai tinggi navbar */
}
</style>

<div class="page-title" data-aos="fade">
    <div class="container">
        <nav class="breadcrumbs">
            <ol>
                <li><a href="index.html">Home</a></li>
                <li class="current">Blog</li>
            </ol>
        </nav>
        <h1>Blog</h1>
    </div>
</div><!-- End Page Title -->

<div class="container">
    <div class="row">
        <div class="col-lg-12">  <!-- Full width -->

            <!-- Blog Posts Section -->
            <section id="blog-posts" class="blog-posts section">
                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="row gy-4">

                        <div class="col-lg-6">
                            <article>
                                <div class="post-img">
                                    <img src="/blog-details" alt="" class="img-fluid">
                                </div>
                                <h2 class="title">
                                    <a href="blog-details.html">Dolorum optio tempore voluptas...</a>
                                </h2>
                                <div class="meta-top">
                                    <ul>
                                        <li><i class="bi bi-person"></i> <a href="blog-details.html">John Doe</a></li>
                                        <li><i class="bi bi-clock"></i> <a href="blog-details.html"><time>Jan 1, 2022</time></a></li>
                                        <li><i class="bi bi-chat-dots"></i> <a href="blog-details.html">12 Comments</a></li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <p>Similique neque nam consequuntur...</p>
                                    <div class="read-more">
                                        <a href="/blog-details">Read More</a>
                                    </div>
                                </div>
                            </article>
                        </div><!-- End post list item -->

                        <div class="col-lg-6">
                            <article>
                                <div class="post-img">
                                    <img src="/blog-details" alt="" class="img-fluid">
                                </div>
                                <h2 class="title">
                                    <a href="blog-details.html">Nisi magni odit consequatur autem...</a>
                                </h2>
                                <div class="meta-top">
                                    <ul>
                                        <li><i class="bi bi-person"></i> <a href="blog-details.html">John Doe</a></li>
                                        <li><i class="bi bi-clock"></i> <a href="blog-details.html"><time>Jan 1, 2022</time></a></li>
                                        <li><i class="bi bi-chat-dots"></i> <a href="blog-details.html">12 Comments</a></li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <p>Incidunt voluptate sit temporibus aperiam...</p>
                                    <div class="read-more">
                                        <a href="/blog-details">Read More</a>
                                    </div>
                                </div>
                            </article>
                        </div><!-- End post list item -->

                        <div class="col-lg-6">
                            <article>
                                <div class="post-img">
                                    <img src="/blog-details" alt="" class="img-fluid">
                                </div>
                                <h2 class="title">
                                    <a href="blog-details.html">Exercitationem fugit dolorum adipisci...</a>
                                </h2>
                                <div class="meta-top">
                                    <ul>
                                        <li><i class="bi bi-person"></i> <a href="blog-details.html">Jane Smith</a></li>
                                        <li><i class="bi bi-clock"></i> <a href="blog-details.html"><time>Feb 10, 2022</time></a></li>
                                        <li><i class="bi bi-chat-dots"></i> <a href="blog-details.html">8 Comments</a></li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <p>Quisquam repellendus aliquid sunt...</p>
                                    <div class="read-more">
                                        <a href="/blog-details">Read More</a>
                                    </div>
                                </div>
                            </article>
                        </div><!-- End post list item -->

                        <div class="col-lg-6">
                            <article>
                                <div class="post-img">
                                    <img src="/blog-details" alt="" class="img-fluid">
                                </div>
                                <h2 class="title">
                                    <a href="blog-details.html">Pariatur alias reiciendis accusantium...</a>
                                </h2>
                                <div class="meta-top">
                                    <ul>
                                        <li><i class="bi bi-person"></i> <a href="blog-details.html">Mike Ross</a></li>
                                        <li><i class="bi bi-clock"></i> <a href="blog-details.html"><time>Mar 15, 2022</time></a></li>
                                        <li><i class="bi bi-chat-dots"></i> <a href="blog-details.html">5 Comments</a></li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <p>Temporibus amet, distinctio ullam velit...</p>
                                    <div class="read-more">
                                        <a href="/blog-details">Read More</a>
                                    </div>
                                </div>
                            </article>
                        </div><!-- End post list item -->

                    </div><!-- End blog posts list -->
                </div>
            </section><!-- /Blog Posts Section -->

            <!-- Pagination Section -->
            <section id="pagination-2" class="pagination-2 section">
                <div class="container">
                    <div class="d-flex justify-content-center">
                        <ul>
                            <li><a href="#"><i class="bi bi-chevron-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#" class="active">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li>...</li>
                            <li><a href="#">10</a></li>
                            <li><a href="#"><i class="bi bi-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </section><!-- /Pagination Section -->

        </div>
    </div>
</div>

@endsection
