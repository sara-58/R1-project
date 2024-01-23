@extends('layouts.dash')

@push('header')
Messages
@endpush

@include('includesdash.listhead')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Manage Messages</h3>
            </div>

            @include('includesdash.searchfor')
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>List of Messages</h2>
                        @include('includesdash.toolbox')

                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Full Name</th>
                                                <th>Email</th>
                                                <th>Show</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>First Name and Last Name</td>
                                                <td>mail@example.com</td>
                                                <td><img src="{{asset('assets/admin/images/edit.png')}}" alt="Edit"></td>
                                                <td><img src="{{asset('assets/admin/images/delete.png')}}" alt="Delete"></td>
                                            </tr>
                                            <tr>
                                                <td>First Name and Last Name</td>
                                                <td>mail@example.com</td>
                                                <td><img src="./images/edit.png" alt="Edit"></td>
                                                <td><img src="./images/delete.png" alt="Delete"></td>
                                            </tr>
                                            <tr>
                                                <td>First Name and Last Name</td>
                                                <td>mail@example.com</td>
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