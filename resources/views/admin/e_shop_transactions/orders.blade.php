@extends('admin.layouts.layout')

@section('title', 'Page Title')

@section('content')

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    Product Orders
                    <small>
                        orders management
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
                                    <th>Order ID</th>
                                    <th>Date </th>
                                    <th>Customer Name </th>
                                    <th>Status </th>
                                    <th>Amount </th>
                                    <th class=" no-link last"><span class="nobr">Action</span>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr class="even pointer">
                                    <td class=" ">1</td>
                                    <td class=" ">121000040 </td>
                                    <td class=" ">2014-02-12</td>
                                    <td class=" ">John Blank L</td>
                                    <td class=" ">Processed</td>
                                    <td class="a-right a-right ">$7.45</td>
                                    <td class=" last"><a href="#">View</a></td>
                                </tr>
                                <tr class="odd pointer">
                                    <td class=" ">2</td>
                                    <td class=" ">121000041 </td>
                                    <td class=" ">2014-02-12</td>
                                    <td class=" ">The Ancient One</td>
                                    <td class=" ">Pending</td>
                                    <td class="a-right a-right ">$6.3</td>
                                    <td class=" last"><a href="#">View</a></td>
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