<div class="about1-area">
    @if ($about != NULL)
        <h1 class="about-title wow fadeIn" data-wow-duration="1s" data-wow-delay=".2s">{{$about->title}}</h1>
        <p class="about-sub-title wow fadeIn" data-wow-duration="1s" data-wow-delay=".2s"> {{$about->desc}} </p>
        <div class="slider-container">
            <div class="slider">
                <div class="slide"><img src="{{asset('Assets/Frontend/img/about/aboutsliders1.png')}}" alt="about" class="img-responsive"></div>
                <div class="slide"><img src="{{asset('Assets/Frontend/img/about/imagesliders2.png')}}" alt="about" class="img-responsive"></div>
                <div class="slide"><img src="{{asset('Assets/Frontend/img/about/imagesliders3.png')}}" alt="about" class="img-responsive"></div>
            </div>
            <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
            <button class="next" onclick="moveSlide(1)">&#10095;</button>
        </div>
    @endif
</div>

<style>
.slider-container {
    position: relative;
    max-width: 1500px;
    margin: auto;
    overflow: hidden;
}
.slider {
    display: flex;
    transition: transform 0.5s ease-in-out;
}
.slide {
    min-width: 100%;
    box-sizing: border-box;
}
.prev, .next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0,0,0,0.5);
    color: white;
    border: none;
    padding: 10px;
    cursor: pointer;
}
.prev { left: 10px; }
.next { right: 10px; }
</style>

<script>
let index = 0;
function moveSlide(step) {
    const slides = document.querySelector('.slider');
    const totalSlides = document.querySelectorAll('.slide').length;
    index += step;
    if (index >= totalSlides) index = 0;
    if (index < 0) index = totalSlides - 1;
    slides.style.transform = `translateX(${-index * 100}%)`;
}

function autoSlide() {
    moveSlide(1);
}

setInterval(autoSlide, 5000); // Ganti slide setiap 3 detik
</script>
