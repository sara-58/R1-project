@extends('layouts.admin')

@push('header')
Edit Car
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
                        <h2>Edit Car</h2>
                        @include('includesdash.toolbox')

                    </div>
                    <div class="x_content">
                        <br />
                        <form id="demo-form2" action="{{ route('updateTestimonial', $testimonial->id ) }}" method="post" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Title <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="title" required="required" class="form-control " name="carTitle">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="content">Description <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <textarea id="content" name="description" required="required" class="form-control">Description</textarea>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label for="luggage" class="col-form-label col-md-3 col-sm-3 label-align">Luggage <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="luggage" class="form-control" type="number" name="luggages" required="required">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label for="doors" class="col-form-label col-md-3 col-sm-3 label-align">Doors <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="doors" class="form-control" type="number" name="doors" required="required">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label for="passengers" class="col-form-label col-md-3 col-sm-3 label-align">Passengers <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="passengers" class="form-control" type="number" name="passengers" required="required">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label for="price" class="col-form-label col-md-3 col-sm-3 label-align">Price <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="price" class="form-control" type="number" name="price" required="required">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Active</label>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" class="flat" name="carPublished">
                                    </label>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Image <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="file" id="image" name="carImage" required="required" class="form-control">
                                    <img src="{{asset('assets/images/car_1.jpg')}}" value="{{ $car->carImage }} alt="" style=" width: 300px;">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Category <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select class="form-control" name="category" id="">
                                        <option value="">Select Category</option>
                                        @foreach($categories as $category)
                                        <option value="{{ $category->id}}">{{$category->categoryName}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <button class="btn btn-primary" type="button">Cancel</button>
                                    <button type="submit" class="btn btn-success">Update</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- /page content -->
@endsection