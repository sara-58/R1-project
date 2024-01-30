<form action="{{ route('single', $car->id ) }}" method="post" enctype="multipart/form-data">
    @csrf
    <img src="{{ asset('assets/images/'.$car->carImage) }}" alt="" class="img-fluid p-3 mb-5 bg-white rounded" name="carImage" style="width: 500px; height: 400px;">

    <div class=" grey-bg container-fluid">
        <section id="minimal-statistics">
            <div class="row">
                <div class="col-12 mt-3 mb-1">
                    <h4 class="text-uppercase">Properties</h4>
                    <p>{{$car->carTitle}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="icon-pencil primary font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3>{{$car->doors}}</h3>
                                        <span>Doors</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="icon-speech warning font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3>{{$car->luggages}}</h3>
                                        <span>Laggage</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="icon-graph success font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3>{{$car->price}} $</h3>
                                        <span>Price</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <p>{{$car->description}}</p>


    <div class="pt-5">
        <p>Category: <a href="#"> {{$car->category->categoryName}}</a></p>
    </div>
</form>