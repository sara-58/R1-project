<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <h2 class="section-heading"><strong>Testimonials</strong></h2>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
        @if(count($testimonials) > 0)
        <div class="row">
            @foreach($testimonials->reverse()->take(9) as $testimonial)
            <div class="col-lg-4 mb-4">
                <div class="testimonial-2">
                    <blockquote class="mb-4">
                        <p>{{$testimonial->content}}</p>
                    </blockquote>
                    <div class="d-flex v-card align-items-center">
                        <img src="{{ asset('assets/images/'.$testimonial->testiImage) }}" alt="Image" class="img-fluid mr-3">
                        <div class="author-name">
                            <span class="d-block">{{$testimonial->testiName}}</span>
                            <span>{{$testimonial->testiPosition}}</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <p>No testimonials available.</p>
        @endif

    </div>
</div>