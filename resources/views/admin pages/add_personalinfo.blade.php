@extends('layouts.admin_layout')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Add Personal Info.</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Add Personal Info.</li>
            </ol>

            <form action="{{ route('admin.personalinfo.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">


                    <div class="col-md-6">
                        <div class="form-group col-md-6 mt-3">

                            <div class="mt-3">

                                <label for="name">
                                    <h4>Name</h4>
                                </label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>


                            <div class="mt-3">

                                <label for="designation">
                                    <h4>Designation</h4>
                                </label>
                                <input type="text" class="form-control" id="designation" name="designation">
                            </div>


                            <div class="mt-3">

                                <label for="company">
                                    <h4>Company Name</h4>
                                </label>
                                <input type="text" class="form-control" id="company" name="company">
                            </div>

                            <div class="mt-3">
                                <label for="email">
                                    <h4>Email</h4>
                                </label>
                                <input type="email" class="form-control" id="eamil" name="email">
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group col-md-6 mt-3">
                            <div class="mt-3">
                                <label for="text">
                                    <h4>Contact</h4>
                                </label>
                                <input type="text" class="form-control" id="contact" name="contact">
                            </div>

                            <div class="mt-3">
                                <label for="text">
                                    <h4>Facebook Link</h4>
                                </label>
                                <input type="text" class="form-control" id="facebook" name="facebook">
                            </div>

                            <div class="mt-3">
                                <label for="text">
                                    <h4>Linkdin Link</h4>
                                </label>
                                <input type="text" class="form-control" id="linkdin" name="linkdin">
                            </div>



                            <div class="mt-3">

                                <h4>Profile Picture</h4>
                                <input type="file" class="mt-3" name="image" id="image">
                            </div>

                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col md-4"> </div>

                    <div class="col md-4">
                        <input type="submit" name="submit" class="btn btn-primary mt-5">
                    </div>
                    <div class="col md-4"></div>
                </div>



            </form>

        </div>
    </main>
@endsection
