@extends('layouts.dash')

@push('header')
Cars
@endpush

@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Manage Cars</h3>
            </div>

            @include('includesdash.searchfor')
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>List of Cars</h2>
                        @include('includesdash.toolbox')

                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Price</th>
                                                <th>Active</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($cars as $car)
                                            <tr>
                                                <td>{{$car->carTitle}}</td>
                                                <td>{{$car->price}}</td>
                                                <td>{{$car->carPublished}}</td>
                                                <td><a href="editCar/{{$car->id}}"><img src="{{asset('assets/admin/images/edit.png')}}" alt="Edit"></a></td>
                                                <td><a href="deleteCar/{{$car->id}}"><img src="{{asset('assets/admin/images/delete.png')}}" alt="Delete"></a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
@endsection