@extends('backend.layouts.app')

@section('title','Skillset')
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
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Skill Set</li>
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
                                <h3 class="card-title">Skill Set</h3>
                            </div>
                            <form action="{{ route('admin.skillSet.store') }}" class="form-horizontal" method="POST">
                                @csrf

                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">
                                            Frontend Skills :
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{ @$data[0]->frontend }}" name="Frontend"
                                                class="form-control" placeholder="Enter Frontend skills">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">
                                            Backend Skills :
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{ @$data[0]->backend }}" name="Backend"
                                                class="form-control" placeholder="Enter Backend skills">


                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">
                                            Database Skill :
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{ @$data[0]->database }}" name="database"
                                                class="form-control" placeholder="Enter database skills">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">
                                            Version controll Skill :
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{ @$data[0]->vcs }}" name="version_control"
                                                class="form-control" placeholder="Enter Version controll Skill">
                                        </div>
                                    </div>
                                    <input type="hidden" value="{{ @$data[0]->id }}" name="id">
                                    <div class="card-footer">
                                        <button type="submit" name="add_to_update" class="btn btn-info float-right"
                                            value="@if ($data->count() > 0) Edit @else Add @endif">
                                            @if ($data->count() > 0)
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
