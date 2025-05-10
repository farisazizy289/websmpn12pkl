<!-- Tambahkan Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
    .video-area {
        position: relative;
    }

    .video-content {
        position: relative;
        width: 100%;
        max-width: 800px;
        margin: auto;
    }

    .video-content iframe {
        width: 100%;
        height: auto;
        aspect-ratio: 16 / 9;
    }

    @media (max-width: 768px) {
        .video-content {
            max-width: 100%;
            padding: 0 10px;
        }

        .swiper-button-next, .swiper-button-prev {
            width: 10px;
            height: 10px;
        }

        .nuvo-icon {
            font-size: 16px;
        }
    }

   

    .swiper-button-next,
.swiper-button-prev {
    width: 40px; /* Ukuran tombol */
    height: 40px; /* Ukuran tombol */
    background-color: rgba(255, 255, 255, 0.2); /* Warna putih transparan */
    border-radius: 50%; /* Membuatnya bulat */
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.swiper-button-next::after,
.swiper-button-prev::after {
    font-size: 18px; /* Ukuran ikon */
    color: white; /* Warna ikon */
}

/* Efek hover */
.swiper-button-next:hover,
.swiper-button-prev:hover {
    background-color: rgba(255, 255, 255, 0.5);
    transform: scale(1.1);
}


    .swiper-button-next:hover, .swiper-button-prev:hover {
        background: rgba(255, 255, 255, 0.4);
        transform: translateY(-50%) scale(1.1);
    }

    /* Modifikasi ikon Nuvo Direction */
    .nuvo-icon {
        font-size: 20px;
        color: white;
        transition: all 0.3s ease-in-out;
    }

    .swiper-button-prev:hover .nuvo-icon, 
    .swiper-button-next:hover .nuvo-icon {
        color: #000;
    }
</style>

<div class="video-area overlay-video bg-common-style">
    <div class="container">
        <div class="swiper-container video-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="video-content">
                        <h1 class="about-title">{{$video->title}}</h1>
                        <p class="about-sub-title">Website Resmi SMP Negeri 12 Pekalongan Launching</p>
                        <iframe src="https://www.youtube-nocookie.com/embed/k5zOg3-hRjs" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="video-content">
                        <h1 class="about-title">{{$video->title}}</h1>
                        <p class="about-sub-title">Tausiyah Ramadhan | Amalan-Amalan Sunah di Bulan Ramadhan</p>
                        <iframe src="https://www.youtube-nocookie.com/embed/fjuzkXvbbx8" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="video-content">
                        <h1 class="about-title">{{$video->title}}</h1>
                        <p class="about-sub-title">PENTAS SENI DRAMA "KALONGAN NDUWE CRITA" PART 1</p>
                        <iframe src="https://www.youtube-nocookie.com/embed/m77eBQUi0Kg" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="video-content">
                        <h1 class="about-title">{{$video->title}}</h1>
                        <p class="about-sub-title">PENTAS SENI DRAMA "KALONGAN NDUWE CRITA" PART 2</p>
                        <iframe src="https://www.youtube-nocookie.com/embed/2PfRuWIrHeY" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tombol prev dan next dengan Nuvo Direction -->
        <div class="swiper-button-prev">
            <i class="nuvo-icon nuvo-left"></i>
        </div>
        <div class="swiper-button-next">
            <i class="nuvo-icon nuvo-right"></i>
        </div>
    </div>
</div>

<!-- Tambahkan Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".video-slider", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        on: {
            reachEnd: function () {
                setTimeout(() => {
                    swiper.slideTo(0);
                }, 5000);
            },
        }
    });
</script>
