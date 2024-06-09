@extends('backend.layouts.app')

@section('title', 'About me')
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
                            <li class="breadcrumb-item active">About Me</li>
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
                                <h3 class="card-title">About Me</h3>
                            </div>
                            <form action="{{ route('admin.About_me.store') }}" method="post" class="form-horizontal">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">
                                            Description :
                                        </label>
                                        <div class="col-sm-10">
                                            <textarea name="description" class="form-control" placeholder="Enter the description" cols="30" rows="10">{{ @$person[0]->description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">
                                            First Name :
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{ @$person[0]->first_name }}" name="first_name"
                                                class="form-control" placeholder="Enter your First name">

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">
                                            Last Name :
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{ @$person[0]->last_name }}" name="last_name"
                                                class="form-control" placeholder="Enter your last name">


                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">
                                            Age :
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="number" value="{{ @$person[0]->age }}" name="age"
                                                class="form-control" placeholder="Enter your Age">

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">
                                            Nationality :
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{ @$person[0]->nationality }}" name="nationality"
                                                class="form-control" placeholder="Enter your nationality">

                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">
                                            Address :
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{ @$person[0]->address }}" name="address"
                                                class="form-control" placeholder="Enter your Address">

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">
                                            Phone :
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{ @$person[0]->phone }}" name="phone"
                                                class="form-control" placeholder="Enter your Phone">

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">
                                            Email :
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="email" value="{{ @$person[0]->email }}" name="email"
                                                class="form-control" placeholder="Enter your email">

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">
                                            Languages :
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{ @$person[0]->languages }}" name="languages"
                                                class="form-control" placeholder="Enter your Languages">

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">
                                            College Degree :
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="text" name="Degree" value="{{ @$person[0]->degree }}"
                                                class="form-control" placeholder="Enter your Degree">

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">
                                            Plus Two :
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{ @$person[0]->plus_two }}" name="Plus_Two"
                                                class="form-control" placeholder="Enter your Plus Two">

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">
                                            SSLC :
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{ @$person[0]->sslc }}" name="SSLC"
                                                class="form-control" placeholder="Enter your SSLC">

                                        </div>
                                    </div>

                                    <input type="hidden" value="{{ @$person[0]->id }}" name="id">


                                    <div class="card-footer">
                                        <button type="submit" name="add_to_update" class="btn btn-info float-right"
                                            value="@if ($person->count() > 0) Edit @else Add @endif">
                                            @if ($person->count() > 0)
                                                Edit
                                            @else
                                                Add
                                            @endif
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
