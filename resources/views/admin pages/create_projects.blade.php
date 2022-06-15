@extends('layouts.admin_layout')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Create Projects</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Create Projects</li>
            </ol>

            <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="form-group col-md-4 mt-3">

                        <div class="mt-3">

                            <label for="pname">
                                <h4>Project Name</h4>
                            </label>
                            <input type="text" class="form-control" id="pname" name="pname">
                        </div>

                        <div class="mt-3">
                            <label for="pdescription">
                                <h4>Functionality</h4>
                            </label>
                            <textarea type="text" class="form-control" id="pdescription" name="pdescription"></textarea>

                        </div>

                        <div class="mt-3">
                            <label for="technology">
                                <h4>Development Tools</h4>
                            </label>
                            <textarea type="text" class="form-control" id="ptechnology" name="ptechnology"></textarea>

                        </div>

                        <div class="mt-3">

                            <h4>Project Image</h4>
                            <input type="file" class="mt-3" name="pimage" id="pimage">
                        </div>
                        



                    </div>

                </div>
                <input type="submit" name="submit" class="btn btn-primary mt-5">

            </form>

        </div>
    </main>
@endsection
