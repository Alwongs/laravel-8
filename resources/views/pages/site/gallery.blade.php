<x-site-layout>
    <section class="section-banner">
        <img src="{{ Storage::url('/site/main.jpg') }}" alt="main image" />
        <h2 class="home-title">Gallery</h2>
    </section>


    <section>

        <h1>Adaptive slider</h1>

        <div class="slider">
            <div class="slider-line">
                <img src="{{ Storage::url('/gallery/blue.jpg') }}" alt="">
                <img src="{{ Storage::url('/gallery/green.jpg') }}" alt="">
                <img src="{{ Storage::url('/gallery/orange.jpg') }}" alt="">
                <img src="{{ Storage::url('/gallery/red.jpg') }}" alt="">
            </div>
        </div>

        <button>Prev</button>
        <button>Next</button>
    </section>


<!-- 
    <div class="maintenance">
        <img src="{{ Storage::url('/site/maintenance.jpg') }}" alt="maintenance">
    </div> -->


</x-site-layout>