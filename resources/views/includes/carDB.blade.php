<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            @foreach($cars as $car)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="listing d-block  align-items-stretch">
                    <div class="listing-img h-100 mr-4">
                        <img src="{{ asset('assets/images/'.$car->carImage)}}" alt="Image" class="img-fluid" style="width: 300px; height: 250px;">
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
                        <div style="width: 300px; height: 100px;">
                            <p>{{ strlen($car->description) > 75 ? substr($car->description, 0, 75) . '...' : $car->description }}</p>
                            <p><a href="single/{{$car->id}}" class="btn btn-primary btn-sm">Rent Now</a></p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col-5">
                <div class="custom-pagination ">
                    {{ $cars->links() }}
                </div>
            </div>
        </div>


    </div>
</div>