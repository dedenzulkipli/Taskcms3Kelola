@extends('landing.template.layout')

@section('title', 'Blog Details')

@section('body-class', 'blogdetail-page')

@section('content')
<style>
  .blog-details .container {
    max-width: 900px; /* Sesuaikan lebar konten */
    margin: auto;
    padding: 20px;
}
.page-title {
    padding-top: 100px; /* Tambahkan jarak agar tidak ketutupan navbar */
}
</style>
<div class="page-title" data-aos="fade">
    <div class="container">
        <nav class="breadcrumbs">
            <ol>
                <li><a href="/">Home</a></li>
                <li class="current">Blog Details</li>
            </ol>
        </nav>
        <h1>Blog Details</h1>
    </div>
</div><!-- End Page Title -->

<div class="container">
    <div class="row justify-content-center">

        <div class="col-lg-12">

            <!-- Blog Details Section -->
            <section id="blog-details" class="blog-details section">
                <div class="container" data-aos="fade-up">

                    <article class="article">

                        <div class="hero-img" data-aos="zoom-in">
                            <img src="landing/assets/img/blog/blog-post-3.webp" alt="Featured blog image" class="img-fluid" loading="lazy">
                            <div class="meta-overlay">
                                <div class="meta-categories">
                                    <a href="#" class="category">Web Development</a>
                                    <span class="divider">•</span>
                                    <span class="reading-time"><i class="bi bi-clock"></i> 6 min read</span>
         
                                </div>
                            </div>
                        </div>

                        <div class="article-content" data-aos="fade-up" data-aos-delay="100">
                            <div class="content-header">
                                <h1 class="title">Modern Web Development: Best Practices and Future Trends for 2025</h1>

                                <div class="author-info">
                                    <div class="author-details">
                                        <img src="landing/assets/img/person/person-f-8.webp" alt="Author" class="author-img">
                                        <div class="info">
                                            <h4>Michael Chen</h4>
                                            <span class="role">Senior Web Developer</span>
                                        </div>
                                    </div>
                                    <div class="post-meta">
                                        <span class="date"><i class="bi bi-calendar3"></i> Mar 15, 2025</span>
                                        <span class="divider">•</span>
                                        <span class="comments"><i class="bi bi-chat-text"></i> 18 Comments</span>
                                    </div>
                                </div>
                            </div>

                            <div class="content">
                                <p class="lead">
                                    The landscape of web development continues to evolve at an unprecedented pace, bringing new technologies, frameworks, and methodologies that reshape how we build modern web applications.
                                </p>

                                <p>
                                    As we delve into 2025, the web development ecosystem has transformed dramatically, introducing innovative approaches to building faster, more secure, and highly engaging web experiences. This comprehensive guide explores the latest trends and best practices that are defining the future of web development.
                                </p>

                                <div class="content-image right-aligned">
                                    <img src="/landing/assets/img/blog/blog-hero-2.webp" class="img-fluid" alt="Modern web development tools" loading="lazy">
                                    <figcaption>Modern development environments emphasize collaboration and efficiency</figcaption>
                                </div>

                                <h2>The Rise of Web Components</h2>
                                <p>
                                    Web Components have become increasingly crucial in modern web development, offering a standardized way to create reusable custom elements. Key advantages include:
                                </p>
                                <ul>
                                    <li>Enhanced code reusability across different frameworks</li>
                                    <li>Better encapsulation of functionality</li>
                                    <li>Improved maintenance and scalability</li>
                                    <li>Framework-agnostic component development</li>
                                </ul>

                                <div class="highlight-box">
                                    <h3>Key Trends in 2025</h3>
                                    <ul class="trend-list">
                                        <li>
                                            <i class="bi bi-lightning-charge"></i>
                                            <span>Edge Computing and Serverless Architecture</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-shield-check"></i>
                                            <span>Enhanced Security Measures</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-phone"></i>
                                            <span>Progressive Web Apps (PWAs)</span>
                                        </li>
                                    </ul>
                                </div>

                                <h2>Performance Optimization</h2>
                                <p>
                                    Performance remains a critical factor in web development, with an increasing focus on Core Web Vitals and user experience metrics. Modern applications must be optimized for both speed and efficiency.
                                </p>

                                <blockquote>
                                    <p>
                                        "The future of web development lies not just in writing code, but in creating seamless, accessible, and performant experiences that work for everyone, everywhere."
                                    </p>
                                    <cite>Emily Thompson, Web Performance Architect</cite>
                                </blockquote>

                                <div class="content-grid">
                                    <div class="row g-4">
                                        <div class="col-md-6">
                                            <div class="info-card">
                                                <i class="bi bi-speedometer2"></i>
                                                <h4>Performance Metrics</h4>
                                                <p>Focus on Core Web Vitals and user-centric performance metrics for better search rankings and user experience.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="info-card">
                                                <i class="bi bi-universal-access"></i>
                                                <h4>Accessibility</h4>
                                                <p>Implementing WCAG guidelines and ensuring web applications are accessible to all users across different devices.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h2>Looking Forward</h2>
                                <p>
                                    As we continue through 2025, web development practices will further evolve, embracing new technologies while maintaining a strong foundation in performance, accessibility, and user experience. Staying updated with these trends and best practices is crucial for developers looking to build modern, scalable web applications.
                                </p>
                            </div>

                        </div>

                    </article>

                </div>
            </section><!-- /Blog Details Section -->

        </div>

    </div>
</div>

@endsection
