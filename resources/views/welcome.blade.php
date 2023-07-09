<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Monitoring APP</title>
  <link rel="shortcut icon" href="{{ asset('admin_assets/assets/img/logo.png') }}">
  <link rel="stylesheet" href="{{ asset('admin_assets/fe_assets/css/plugins.css') }}">
  <link rel="stylesheet" href="{{ asset('admin_assets/fe_assets/css/style.css') }}">
  <link rel="preload" href="{{ asset('admin_assets/fe_assets/css/fonts/dm.css') }}" as="style" onload="this.rel='stylesheet'">
</head>

<body>
  <div class="content-wrapper">
    <header class="wrapper bg-light">
        <div class="bg-light text-white fw-bold fs-15 mb-2">
        <div class="container py-2 d-md-flex flex-md-row">
          <div class="d-flex flex-row align-items-center">
          </div>
          <div class="d-flex flex-row align-items-center me-6 ms-auto">
          </div>
          <div class="d-flex flex-row align-items-center">
          </div>
        </div>
      <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
          <div class="navbar-brand w-100">
            <a href="/">
              <img src="{{ asset('admin_assets/assets/img/bintan2.png') }}" srcset="{{ asset('admin_assets/assets/img/bintan2.png') }}" alt="" />
               <a class="navbar-brand ps-lg-2 fs-20" href="/">Dinas Kesehatan Bintan</a>
            </a>
          </div>
          <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
          </div>
          <div class="navbar-other w-100 d-flex ms-auto">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <section class="wrapper bg-light">
      <div class="container pt-8 pt-md-14">
        <div class="row gx-lg-0 gx-xl-8 gy-10 gy-md-13 gy-lg-0 mb-7 mb-md-10 mb-lg-16 align-items-center">
          <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-1 position-relative order-lg-2" data-cue="zoomIn">
            <div class="shape bg-dot primary rellax w-17 h-19" data-rellax-speed="1" style="top: -1.7rem; left: -1.5rem;"></div>
            <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; right: -0.8rem; width: 85%; height: 90%;"></div>
            <figure class="rounded"><img src="{{ asset('admin_assets/assets/img/imac.png') }}" srcset="{{ asset('admin_assets/assets/img/imac.png') }}" alt="" /></figure>
          </div>

          <div class="col-lg-5 mt-lg-n10 text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
            <h1 class="display-1 mb-5 mx-md-10 mx-lg-0">Dinas Kesehatan <br /><span class="typer text-primary text-nowrap" data-delay="100" data-words="Bintan."></span><span class="cursor text-primary" data-owner="typer"></span></h1>
            <p class="lead fs-25 lh-sm mb-7 px-md-10 px-lg-0">Kesehatan Terdepan, Akses Farmasi Mudah di Ujung Jari Anda!</p>
            <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
              <span><a href="/login" class="btn btn-lg btn-primary rounded-pill me-2">Login</a></span>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <script src="{{ asset('admin_assets/fe_assets/js/plugins.js') }}"></script>
  <script src="{{ asset('admin_assets/fe_assets/js/theme.js') }}"></script>
</body>

</html>