@extends('backend.layouts.app')

@section('title', 'Edit portfolio')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                {{-- success msg --}}
                @include('backend.success.msg')
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"></h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Edit portfolio</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Edit portfolio</h3>
                            </div>
                            <form action="{{ route('admin.portfolio.update', $portfolio->id) }}" class="form-horizontal"
                                method="POST" enctype="multipart/form-data">

                                @csrf
                                @method('PUT')

                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">
                                            portfolio Title <span class="text-danger">*</span> :
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{ $portfolio->title }}" name="title"
                                                class="form-control" placeholder="Enter your title" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">
                                            portfolio Image <span class="text-danger">*</span>:
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="file" name="image" class="form-control" id=""
                                                required>
                                            <img src="{{ asset('uploads/portfolio/' . $portfolio->image) }}" alt="image"
                                                width="100px" height="100px">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">
                                            portfolio Url <span class="text-danger">*</span> :
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{ $portfolio->url }}" name="url"
                                                class="form-control" placeholder="Enter your URL" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">
                                            portfolio Description <span class="text-danger">*</span>:
                                        </label>
                                        <div class="col-sm-10">
                                            <textarea name="description" class="form-control" id="" cols="30" rows="10"
                                                placeholder="Enter your description" required>{{ $portfolio->description }}</textarea>
                                        </div>
                                    </div>


                                    <div class="card-footer">
                                        <button type="submit" name="add_to_update" class="btn btn-info float-right">Update
                                        </button>

                                        <a href="{{ route('admin.portfolio') }}"
                                            class="btn btn-default float-right">Cancel</a>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- /.content-wrapper -->
@endsection
