@extends('layouts.admin_layout')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Main</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Main</li>
            </ol>

            <form action="{{route('admin.main.update') }}" method="POST" enctype="multipart/form-data">
                 @csrf
                <div class="row">
                    <div class="form-group col-md-4 mt-3">

                        <h4>Background Image</h4>
                        <img style="height:25vh" src="{{ asset('uploads/images/' . $main->images) }}"
                            class="img-thumbnail">
                        <input type="file" class="mt-3" name="image" id="image">
                    </div>

                    <div class="form-group col-md-4 mt-3">

                        <div class="mt-3">

                            <label for="title">
                                <h4>Title</h4>
                            </label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $main->title }}">
                        </div>
                        <div class="mt-3">

                            <label for="title">
                                <h4>Sub Title</h4>
                            </label>
                            <input type="text" class="form-control" id="sub_title" name="sub_title"
                                value="{{ $main->sub_title }}">

                        </div>

                        <div class="mt-3">
                            <h4>Upload Resume</h4>
                            <input type="file" name="resume" id="resume">

                        </div>

                    </div>




                </div>
                <input type="submit" name="submit" class="btn btn-primary mt-5">

            </form>

        </div>
    </main>
@endsection
