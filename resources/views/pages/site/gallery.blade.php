<x-site-layout>
    <section class="section-banner">
        <img src="{{ Storage::url('/site/main.jpg') }}" alt="main image" />
        <h2 class="home-title">Gallery</h2>
    </section>


    <section>

        <div class="slider">
            <div class="slider-line">
                <img src="{{ Storage::url('/gallery/kazan.jpg') }}" alt="">
                <img src="{{ Storage::url('/gallery/moscow.webp') }}" alt="">
                <img src="{{ Storage::url('/gallery/paris.jpg') }}" alt="">
                <img src="{{ Storage::url('/gallery/sardegna.jpg') }}" alt="">
<!-- 
                <img src="{{ Storage::url('/gallery/blue.jpg') }}" alt="">
                <img src="{{ Storage::url('/gallery/orange.jpg') }}" alt="">
                <img src="{{ Storage::url('/gallery/red.jpg') }}" alt="">
                <img src="{{ Storage::url('/gallery/green.jpg') }}" alt=""> -->
            </div>
        </div>

        <div class="btn-block">
            <button class="btn slider-prev">Prev</button>
            <button class="btn slider-next">Next</button>
        </div>

    </section>


<!-- 
    <div class="maintenance">
        <img src="{{ Storage::url('/site/maintenance.jpg') }}" alt="maintenance">
    </div> -->


</x-site-layout>