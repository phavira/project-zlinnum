@extends('template.master')
@section('content')
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Event Listing </h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="{{route('dashboard')}}">Admin</a></li>
                                <li><a href="#">Event Listing</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div id="bootstrap-data-table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">

                                <div class="row" style="margin-top: 10px;">
                                    <div class="col-sm-12 col-md-6">

                                        <div class="dataTables_length" id="bootstrap-data-table_length">
                                            <div class="row">
                                            <div class="col-sm-6">
                                                <span class="type-select" style="width: 100%;">
                                            <div class="input-group" style="padding: 0px 0rem; margin: 0px;">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Show</span>
                                                </div>
                                                <select placeholder="Search by name" name="title" class="form-control" style="border-radius: 1px;">
                                                    <option value="10">10</option>
                                                    <option value="20">20</option>
                                                    <option value="40">40</option>
                                                    <option value="100">100</option>
                                                </select>
                                            </div>
                                            </span>
                                            </div>
                                            <div class="col-sm-6">
                                                <span class="type-select" style="width: 100%;">
                                            <div class="input-group" style="padding: 0px 0rem; margin: 0px;">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Status</span>
                                                </div>
                                                <select placeholder="Search by name" name="title" class="form-control" style="border-radius: 1px;">
                                                    <option value="10">All</option>
                                                    <option value="20">Enable</option>
                                                    <option value="40">Disable</option>
                                                </select>
                                            </div>

                                            </span>
                                            </div>
                                                <div class="col-sm-4">
                                                <span class="type-select" >


                                            </span>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="mt-1 mb-1" style="text-align: right"> Total Page: <strong style="margin-left: 5px;">4</strong> |  Total Items: <strong style="margin-left: 5px;">35</strong></div>
                                    </div>

                                </div>


                                <br>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="bootstrap-data-table" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="bootstrap-data-table_info">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending">#
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending">Image
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: auto;">Name
                                                <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Salary: activate to sort column descending" aria-sort="ascending">Status
                                                </th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Salary: activate to sort column descending" aria-sort="ascending" style="width: 20px;">Remove
                                                </th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @for($i=0;$i<5;$i++)
                                            <tr class="odd">
                                                <td class="">01</td>
                                                <td class=""><div style="width:100px;height: auto;background: #ded9ff;margin: 0 auto"><img src="{{asset('assets/media/catalog-default-img.webp')}}"></div></td>
                                                <td class="" style="width: 400px;"><p>
                                                        21世纪柬埔寨看房团</p></td>
                                                <td class="sorting_1">
                                                    <div class="custom-control custom-switch" style="text-align:center">
                                                        <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                                        <label class="custom-control-label" for="customSwitch1"></label>
                                                    </div>
                                                </td>
                                                <td style="text-align: center;font-size: 12px;color: darkred"><i class="fas fa-trash"></i></td>


                                            </tr>
                                                @endfor
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="bootstrap-data-table_info" role="status" aria-live="polite">Showing 1 to 57 of 57 entries
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="bootstrap-data-table_paginate" style="text-align: right">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled" id="bootstrap-data-table_previous"><a href="#" aria-controls="bootstrap-data-table" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                                </li>
                                                <li class="paginate_button page-item active"><a href="#" aria-controls="bootstrap-data-table" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                                </li>
                                                <li class="paginate_button page-item next disabled" id="bootstrap-data-table_next"><a href="#" aria-controls="bootstrap-data-table" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
@section('script')
    <script>
        var doc = $(document);
        $(document).ready(function () {
            $('.banner-bar').addClass('active');
            $('.list-banner').addClass('active');
        });
    </script>
@endsection
