@extends('layouts.admin_layout')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Add Experience</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Add Experience</li>
            </ol>

            <form action="{{ route('admin.experiences.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="form-group col-md-4 mt-3">

                        <div class="mt-3">

                            <label for="pname">
                                <h4>Company Name</h4>
                            </label>
                            <input type="text" class="form-control" id="company" name="company">
                        </div>

                        <div class="mt-3">

                            <label for="pname">
                                <h4>Position</h4>
                            </label>
                            <input type="text" class="form-control" id="position" name="position">
                        </div>

                        <div class="mt-3">

                            <label for="pname">
                                <h4>Working Period</h4>
                            </label>
                            <input type="text" class="form-control" id="period" name="period">
                        </div>

                        <div class="mt-3">
                            <label for="pdescription">
                                <h4>Job Description</h4>
                            </label>
                            <textarea type="text" class="form-control" id="jdescription" name="jdescription"></textarea>

                        </div>


                        <div class="mt-3">

                            <h4>Company Logo</h4>
                            <input type="file" class="mt-3" name="company_logo" id="company_logo">
                        </div>
                        
                    </div>

                </div>
                <input type="submit" name="submit" class="btn btn-primary mt-5">

            </form>

        </div>
    </main>
@endsection
