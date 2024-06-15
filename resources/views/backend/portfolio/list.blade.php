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
                {{-- success msg --}}
                @include('backend.success.msg')
                {{-- / success msg --}}
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
                                        <th>URL</th>
                                        <th>Decsription</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($portfolios as $portfolio)
                                        <tr class="text-center">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $portfolio->title }}</td>
                                            <td><img src="{{ asset('uploads/portfolio/' . $portfolio->image) }}"
                                                    alt="image" width="100px" height="80px"></td>
                                            <td>{{ $portfolio->url }}</td>
                                            <td>{{ $portfolio->description }}</td>
                                            <td><a href="{{ route('admin.portfolio.edit', encrypt($portfolio->id)) }}"
                                                    class="btn btn-success">edit</a>

                                                <a href="{{ route('admin.portfolio.delete', $portfolio->id) }}"
                                                    class="btn btn-danger"
                                                    onclick="return confirm('Are you sure want to delete?')">delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
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
