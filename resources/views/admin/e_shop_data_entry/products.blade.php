@extends('admin.layouts.layout')

@section('title', 'Page Title')

@section('content')

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    Products
                    <small>
                        products management
                    </small>
                </h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Records Listing</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table id="example" class="table table-striped responsive-utilities jambo_table">
                            <thead>
                                <tr class="headings">
                                    <th>ID </th>
                                    <th>Name</th>
                                    <th>Description </th>
                                    <th>Price </th>
                                    <th class=" no-link last"><span class="nobr">Action</span>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr class="even pointer">
                                    <td class=" ">1</td>
                                    <td class=" ">Laptop </td>
                                    <td class=" ">Pre installed with windows </i></td>
                                    <td class=" ">$670</td>
                                    <td class=" last"><a href="#">Edit</a> <a href="#">Delete</a></td>
                                </tr>
                                <tr class="odd pointer">
                                    <td class=" ">2</td>
                                    <td class=" ">Headsets </td>
                                    <td class=" ">Dr. Beats </i></td>
                                    <td class=" ">$370</td>
                                    <td class=" last"><a href="#">Edit</a> <a href="#">Delete</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <br />
            <br />
            <br />
        </div>
    </div>
    <!-- footer content -->
    @include('admin.layouts.footer')
    <!-- /footer content -->

</div>
<!-- /page content -->

@endsection