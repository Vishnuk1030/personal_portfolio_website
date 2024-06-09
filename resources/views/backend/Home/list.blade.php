@extends('backend.layouts.app')

@section('title', 'Home')
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
                            <li class="breadcrumb-item active">Home</li>
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
                                <h3 class="card-title">Home</h3>
                            </div>
                            <form action="{{ route('admin.Home.store') }}" class="form-horizontal" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">
                                            Profile Image :
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="file" name="profile" class="form-control" id="">
                                            @if (@$getrecord[0]->profile)
                                                <img src="{{ url('uploads/profile/' . @$getrecord[0]->profile) }}"
                                                    alt="profile" width="200px" height="200px">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">
                                            Your Name :
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{ @$getrecord[0]->name }}" name="urname"
                                                class="form-control" placeholder="Enter your name">


                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">
                                            Description :
                                        </label>
                                        <div class="col-sm-10">
                                            <textarea name="description" class="form-control" placeholder="Enter the description">{{ @$getrecord[0]->description }}</textarea>
                                        </div>
                                        <input type="hidden" name="id" value="{{ @$getrecord[0]->id }}">
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" name="add_to_update" class="btn btn-info float-right"
                                            value="@if ($getrecord->count() > 0) Edit @else Add @endif">
                                            @if ($getrecord->count() > 0)
                                                Edit
                                            @else
                                                Add
                                            @endif
                                        </button>

                                        <a href="" class="btn btn-default float-right">Cancel</a>
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
