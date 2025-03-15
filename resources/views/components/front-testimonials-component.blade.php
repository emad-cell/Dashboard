@if(count($testimonials) > 0)
    <div class="container-xxl py-6">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Testimonial</div>
                <h2 class="mb-5">What Our Clients Say!</h2>
            </div>

            <!-- Add Carousel/Slider Container -->
            <div class="testimonial-carousel owl-carousel wow fadeInUp" data-wow-delay="0.3s">
                @foreach ($testimonials as $testimonial)
                <div class="testimonial-item">
                    <div class="testimonial-content rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p class="mb-4">{{ $testimonial->description }}</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle"
                                 src="{{ asset("storage/testimonials/{$testimonial->image}") }}"
                                 alt="{{ $testimonial->name }}"
                                 style="width: 60px; height: 60px;">
                            <div class="ps-3">
                                <h6 class="mb-1">{{ $testimonial->name }}</h6>
                                <small>{{ $testimonial->position }}</small>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endif
<script>
    $('.testimonial-carousel').owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    dots: false,
    responsive: {
        0: {
            items: 1
        },
        768: {
            items: 2
        },
        992: {
            items: 3
        }
    }
});
</script>
