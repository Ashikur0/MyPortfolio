@extends('layouts.admin_layout')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            


         <div class="row">

            <div class="col-lg-3 col-sm-3">
                <div class="card-box bg-blue">
                    <div class="inner">
                        <p>Area Of Expertise </p>
                        <h3> {{ $total_services }} </h3>
                       
                    </div>
                    <div class="icon">
                        <i class="fas fa-columns"></i>
                    </div>
                    <a href="{{ route('admin.services.list') }}" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-sm-3">
                <div class="card-box bg-green">
                    <div class="inner">
                        <p> Projects </p>
                        <h3> {{ $total_projects }} </h3>
                       
                    </div>
                    <div class="icon">
                        <i class="fas fa-images"></i>
                    </div>
                    <a href="{{ route('admin.projects.list') }}" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-sm-3">
                <div class="card-box bg-orange">
                    <div class="inner">
                        <p> Work Experiences </p>
                        <h3> {{ $total_experiences }} </h3>
                       
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-briefcase"></i>
                    </div>
                    <a href="{{ route('admin.experiences.list') }}" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-sm-3">
                <div class="card-box bg-red">
                    <div class="inner">
                        <p> Feedbacks </p>
                        <h3> {{ $total_feedbacks }} </h3>
                       
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-message"></i>
                    </div>
                    <a href="{{ route('admin.view.feedback') }}" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>


         </div>

            

        </div>



    </main>
@endsection
