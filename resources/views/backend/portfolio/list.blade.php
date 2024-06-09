@extends('backend.layouts.app')
@section('title', 'Portfolio')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"></h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Portfolio</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <section class="content">
            <div class="container-fluid">
                <a href="{{ route('admin.portfolio.add') }}" class="btn btn-primary">Add Portfolio</a>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Portfolio</h3>
                            </div>
                            <table class="table table-bordered table-hover mt-3">
                                <thead>
                                    <tr class="text-center">
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Decsription</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <td>1</td>
                                        <td>Title image</td>
                                        <td>portfoiolo Decsription</td>
                                        <td>image set</td>
                                        <td><a href="" class="btn btn-success">edit</a>
                                            <a href="" class="btn btn-danger">delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>
    <!-- /.content-wrapper -->
@endsection
