        <div class="site-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <h2 class="section-heading"><strong>Car Listings</strong></h2>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>

                @if(count($cars) > 0)
                <div class="row">
                    @foreach($cars->reverse()->take(6) as $car)
                    <div class="col-md-6 col-lg-4 mb-4">

                        <div class="listing d-block  align-items-stretch">
                            <div class="listing-img h-100 mr-4">
                                <img src="{{ asset('assets/images/'.$car->carImage)}}" alt="Image" class="img-fluid">
                            </div>
                            <div class="listing-contents h-100">
                                <h3>{{$car->carTitle}}</h3>
                                <div class="rent-price">
                                    <strong>$</strong><strong>{{$car->price}}</strong><span class="mx-1">/</span>day
                                </div>
                                <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                                    <div class="listing-feature pr-4">
                                        <span class="caption">Luggage:</span>
                                        <span class="number">{{$car->luggages}}</span>
                                    </div>
                                    <div class="listing-feature pr-4">
                                        <span class="caption">Doors:</span>
                                        <span class="number">{{$car->doors}}</span>
                                    </div>
                                    <div class="listing-feature pr-4">
                                        <span class="caption">Passenger:</span>
                                        <span class="number">{{$car->passengers}}</span>
                                    </div>
                                </div>
                                <div>
                                    <p>{{$car->description}}</p>
                                    <p><a href="#" class="btn btn-primary btn-sm">Rent Now</a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endforeach

                </div>
                @else
                <p>No cars available.</p>
                @endif
            </div>
        </div>