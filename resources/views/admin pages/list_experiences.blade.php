@extends('layouts.admin_layout')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">List of Experiences</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">List of Experiences</li>
            </ol>

            <div class="table-responsive">
                <table class="table table-bordered border-primary">
                    <thead>
                        <tr style="text-align: center">
                            <th scope="col">#</th>
                            <th scope="col">Company Name</th>
                            <th scope="col">Position</th>
                            <th scope="col">Job Description</th>
                            <th scope="col">Working Period</th>
                            <th scope="col">Company Logo</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($list_experiences) > 0)
                            @foreach ($list_experiences as $value => $experience)
                                <tr style="text-align: center">
                                    <th scope="row">{{ $value + 1 }}</th>
                                    <td>{{ $experience->company_name }}</td>
                                    <td>{{ $experience->position }}</td>
                                    <td>{{ Str::limit(strip_tags($experience->jdescription), 50) }}</td>
                                    <td>{{ $experience->period }}</td>
                                    <td>
                                       <img class="img-fluid" height="200px" width="200px" class="img-thumbnail" src="{{ asset('uploads/logos/' . $experience->company_logo) }}" .
                                       alt="..." />    
                                    </td>
                                    <td>

                                        <a class="btn" href="{{ route('admin.experiences.edit_experience',$experience->id) }}"><i
                                            class="fa-solid fa-pen"></i></a>
                                    <span>
                                        <a class="btn"
                                            href="{{ route('admin.experiences.delete_experience', $experience->id) }}"><i
                                                class="fa-solid fa-trash-can"></i></i></i></a>
                                    </span>

                                    </td>
                                </tr>
                            @endforeach
                        @endif

                    </tbody>

                </table>

            </div>

            <div class="d-felx justify-content-center">

                {{ $list_experiences->links() }}

            </div>
        </div>
    </main>
@endsection
