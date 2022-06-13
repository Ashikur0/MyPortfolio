@extends('layouts.admin_layout')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">List of Services</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">List of Services</li>
            </ol>

            <div class="table-responsive">
                <table class="table table-bordered border-primary">
                    <thead>
                        <tr style="text-align: center">
                            <th scope="col">#</th>
                            <th scope="col">Icon</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($fetch) > 0)
                            @foreach ($fetch as $value => $item)
                                <tr style="text-align: center">
                                    <th scope="row">{{ $value + 1 }}</th>
                                    <td>{{ $item->icon }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ Str::limit(strip_tags($item->description), 50) }}</td>
                                    <td>
                                        <a class="btn" href="{{ route('admin.services.list.edit', $item->id) }}"><i
                                                class="fa-solid fa-pen"></i></a>
                                        <span>
                                            <a class="btn"
                                                href="{{ route('admin.services.list.delete', $item->id) }}"><i
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

                {{ $fetch->links() }}

            </div>
        </div>
    </main>
@endsection
