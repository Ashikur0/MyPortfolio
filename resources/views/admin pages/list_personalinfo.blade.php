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
                            <th scope="col">Name</th>
                            <th scope="col">Designation</th>
                            <th scope="col">Company</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Facebook Link</th>
                            <th scope="col">Linkdin Link</th>
                            <th scope="col">Profile Picture</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($fetch_personalinfo) > 0)
                            @foreach ($fetch_personalinfo as $value => $personalinfo)
                                <tr style="text-align: center">
                                    <th scope="row">{{ $value + 1 }}</th>
                                    <td>{{ $personalinfo->name }}</td>
                                    <td>{{ $personalinfo->designation }}</td>
                                    <td>{{ $personalinfo->company }}</td>
                                    <td>{{ $personalinfo->email }}</td>
                                    <td>{{ $personalinfo->contact }}</td>
                                    <td>{{ $personalinfo->facebook }}</td>
                                    <td>{{ $personalinfo->linkdin }}</td>
                                    <td>
                                       <img class="img-fluid" height="200px" width="200px" class="img-thumbnail" src="{{ asset('uploads/images/' . $personalinfo->image) }}" .
                                       alt="..." />    
                                    </td>

                                    <td>

                                        <a class="btn" href="{{ route('admin.personalinfo.edit_info', $personalinfo->id) }}"><i
                                            class="fa-solid fa-pen"></i></a>
                                    <span>
                                        <a class="btn"
                                            href="{{ route('admin.personalinfo.delete_info', $personalinfo->id) }}"><i
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

                {{ $fetch_personalinfo->links() }}

            </div>
        </div>
    </main>
@endsection
