@extends('admin.layouts.layout')

@section('title', 'Page Title')

@section('content')

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    Blog Posts
                    <small>
                        blog posts management
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
                                    <th>Post Title </th>
                                    <th>Description </th>
                                    <th>Author </th>
                                    <th>Date Created </th>
                                    <th>Status </th>
                                    <th class=" no-link last"><span class="nobr">Action</span>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr class="even pointer">
                                    <td class=" ">1</td>
                                    <td class=" ">Geek's guide to buying laptops </td>
                                    <td class=" ">A guide that makes it simple for geeks</td>
                                    <td class=" ">Jimmy Kazembe</td>
                                    <td class=" ">2016-02-13</td>
                                    <td class="a-right a-right ">Published</td>
                                    <td class=" last"><a href="#">Edit</a> | <a href="#">Delete</a></td>
                                </tr>
                                <tr class="odd pointer">
                                    <td class=" ">2</td>
                                    <td class=" ">Windows 10, a beginner's guide</td>
                                    <td class=" ">Up and running with windows 10.</td>
                                    <td class=" ">John Blank L</td>
                                    <td class=" ">2016-02-07</td>
                                    <td class=" ">Draft</td>
                                    <td class=" last"><a href="#">Edit</a> | <a href="#">Delete</a></td>
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