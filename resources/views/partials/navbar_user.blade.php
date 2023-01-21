<style>
    .coba {
        display: flex;
        /* justify-content: center;
    text-align: center; */
        align-items: center;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <div class="coba">
                <img src="{{ url('assets/images/lumeneng_logo.png') }}" alt="" style="max-width: 3rem">
                <div>
                    Lumeneng
                    <span>Tour</span>
                </div>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{ route('home') }}" class="nav-link"><b>Halaman Utama</b></a></li>
                <li class="nav-item"><a href="{{ route('blog') }}" class="nav-link"><b>Blog</a></b></li>
                <li class="nav-item"><a href="{{ route('gallery') }}" class="nav-link"><b>Galeri</b></a></li>
                <li class="nav-item cta"><a href="{{ route('contact') }}" class="nav-link"><b>Kontak</b></a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
