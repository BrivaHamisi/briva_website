@extends('admin.admin_master')
@section('admin')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">portfolio All</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Portfolio All Data Table</h4>
                            <p class="card-title-desc">DataTables has most features enabled by
                                default, so all you need to do to use it with your own tables is to call
                                the construction function: <code>$().DataTable();</code>.
                            </p>

                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Porfolio Name</th>
                                    <th>Porfolio Title</th>
                                    <th>Porfolio Image</th>
                                    <th>Porfolio Description</th>
                                    <th>Action</th>
                                </tr>
                                </thead>


                                <tbody>
                                @php($i =1)
                                @foreach($portfolio as $item)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$item->portfolio_name}}</td>
                                        <td>{{$item->portfolio_title}}</td>
                                        <td><img class="rounded avatar-sm" src="{{asset($item->portfolio_image)}}"></td>
                                        <td>{{$item->portfolio_description}}</td>
                                        <td>
                                            <a href="{{route('edit.multi.image', $item->id )}}" class="btn btn-info sm btn-sm " title="Edit Data"><i class="fa fa-edit"></i> Edit</a>
                                            <a href="{{route('delete.multi.image', $item->id )}}" class="btn btn-danger btn-sm" title="Delete Data" id="delete"><i class="fas fa-trash-alt"></i> Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection

