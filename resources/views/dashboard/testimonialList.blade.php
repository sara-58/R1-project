@extends('layouts.dash')

@push('header')
Testimonials
@endpush


@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Manage Testimonials</h3>
            </div>

            @include('includesdash.searchfor')
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>List of Testimonials</h2>
                        @include('includesdash.toolbox')

                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Published</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($testimonials as $testimonial)
                                            <tr>
                                                <td>{{$testimonial->testiName}}</td>
                                                <td>{{$testimonial->testiPosition}}</td>
                                                <td>{{$testimonial->testiPublished}}</td>
                                                <td><a href="editTestimonial/{{$testimonial->id}}"><img src="{{asset('assets/admin/images/edit.png')}}" alt="Edit"></a></td>
                                                <td><a href="deleteTestimonial/{{$testimonial->id}}"><img src="{{asset('assets/admin/images/delete.png')}}" alt="Delete"></a></td>
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
