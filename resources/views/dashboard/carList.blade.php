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
                                            <tr>
                                                <td>Car 10</td>
                                                <td>250</td>
                                                <td>Yes</td>
                                                <td><img src="{{asset('assets/admin/images/edit.png')}}" alt="Edit"></td>
                                                <td><img src="{{asset('assets/admin/images/delete.png')}}" alt="Delete"></td>
                                            </tr>
                                            <tr>
                                                <td>Car 1</td>
                                                <td>150</td>
                                                <td>Yes</td>
                                                <td><img src="./images/edit.png" alt="Edit"></td>
                                                <td><img src="./images/delete.png" alt="Delete"></td>
                                            </tr>
                                            <tr>
                                                <td>Car 2</td>
                                                <td>200</td>
                                                <td>Yes</td>
                                                <td><img src="./images/edit.png" alt="Edit"></td>
                                                <td><img src="./images/delete.png" alt="Delete"></td>
                                            </tr>

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