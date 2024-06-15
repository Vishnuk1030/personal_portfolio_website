@extends('backend.layouts.app')

@section('title', 'My Account')
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
                            <li class="breadcrumb-item active">My Account</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        {{-- main content --}}
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">My Account</h3>
                            </div>
                            <form action="{{ route('admin.myaccount.update') }}" method="post" class="form-horizontal">
                                @csrf
                                @method('put')
                                <div class="card-body">

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">
                                            Name <span class="text-danger">*</span>:
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{ Auth::user()->name }}" name="name"
                                                class="form-control" placeholder="Enter your First name" required>

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">
                                            Email <span class="text-danger">*</span>:
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="email" value="{{ Auth::user()->email }}" name="email"
                                                class="form-control" placeholder="Enter your email" required>
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">
                                            Password :
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="password" value="" name="password" class="form-control"
                                                placeholder="Enter your password">
                                            <span class="text-danger">(Leave blank if you are not changing the
                                                password)</span>

                                        </div>
                                    </div>

                                    <input type="hidden" value="" name="id">


                                    <div class="card-footer">
                                        <button type="submit" name="add_to_update" class="btn btn-info float-right">
                                            update
                                        </button>

                                        <a href="{{ route('admin.dashboard') }}"
                                            class="btn btn-default float-right">Cancel</a>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        {{-- / main content --}}

    </div>

@endsection
