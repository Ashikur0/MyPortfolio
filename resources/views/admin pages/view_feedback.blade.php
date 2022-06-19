@extends('layouts.admin_layout')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">View Feedback</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">View Feedback</li>
            </ol>

            <div class="table-responsive">
                <table class="table table-bordered border-primary">
                    <thead>
                        <tr style="text-align: center">
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone No.</th>
                            <th scope="col">Message</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($fetch_feedback) > 0)
                            @foreach ($fetch_feedback as $value => $feedback)
                                <tr style="text-align: center">
                                    <th scope="row">{{ $value + 1 }}</th>
                                    <td>{{ $feedback->name }}</td>
                                    <td>{{ $feedback->email }}</td>
                                    <td>{{ $feedback->phone }}</td>
                                    <td>{{ Str::limit(strip_tags($feedback->description), 50) }}</td>
                                </tr>
                            @endforeach
                        @endif

                    </tbody>

                </table>

            </div>

            <div class="d-felx justify-content-center">

                {{ $fetch_feedback->links() }}

            </div>
        </div>
    </main>
@endsection
