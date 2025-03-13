<style>
/* Hilangkan garis bawah pada logo */
.sitename {
    text-decoration: none !important;
    border-bottom: none !important;
}

/* Pastikan semua link di navbar tidak punya garis bawah */
.navmenu a {
    text-decoration: none !important;
    border-bottom: none !important;
}

/* Untuk menghapus underline hanya di active link */
.navmenu a.active {
    text-decoration: none !important;
    border-bottom: none !important;
}

/* Pastikan tidak ada shadow bawah yang mungkin muncul */
.header {
    box-shadow: none !important;
    border-bottom: none !important;
}

</style>

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="landing/assets/img/logo.webp" alt=""> -->
        <h1 class="sitename">Arsha</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="/blog">Blog</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <!-- <a class="btn-getstarted" href="#about">Get Started</a> -->
      <a class="btn-getstarted" href="/login">Login</a>


    </div>
  </header>