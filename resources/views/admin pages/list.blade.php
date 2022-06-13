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
                            <th scope="col" >#</th>
                            <th scope="col">Icon</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($fetch)>0)

                        @foreach ($fetch as  $item)

                        <tr style="text-align: center">
                            <th scope="row">{{ $item->id }}</th>
                            <td>{{ $item->icon }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->description }}</td>
                        </tr>
                            
                        @endforeach
                            
                        @endif


                    </tbody>

                </table>
            </div>
        </div>
    </main>
@endsection
